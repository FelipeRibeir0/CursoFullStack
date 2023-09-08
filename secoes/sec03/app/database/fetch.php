<?php
// Query builder

use Doctrine\Inflector\InflectorFactory;

$query = [];

function read(string $table, string $fields = '*')
{
    global $query;
    $query = [];

    $query['read'] = true;
    $query['table'] = $table;
    $query['execute'] = [];
    $query['sql'] = "SELECT {$fields} FROM {$table}";
}

function limit(string|int $limit)
{
    global $query;
    $query['limit'] = true;

    if (isset($query['paginate'])) {
        throw new Exception("O LIMIT não pode vir após a Paginação");
    }

    $query['sql'] = "{$query['sql']} LIMIT {$limit}";
}

function order(string $by, string $order = "ASC")
{
    global $query;

    if (isset($query['limit'])) {
        throw new Exception("O ORDER não pode vir após o LIMIT");
    }

    if (isset($query['paginate'])) {
        throw new Exception("O ORDER não pode vir após a Paginação");
    }

    $query['sql'] = "{$query['sql']} ORDER BY {$by} {$order}";
}

function paginate(string|int $perPage = 10)
{
    global $query;

    if (isset($query['limit'])) {
        throw new Exception("A paginação não pode ser chamada com o LIMIT");
    }

    $rowCount = execute(rowCount:true);

    $page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_STRING);

    $page = $page ?? 1;

    $query['currentPage'] = (int) $page;
    $query['pageCount'] = (int)ceil($rowCount / $perPage);
    $offset = ($page - 1) * $perPage;

    $query['paginate'] = true;
    $query['sql'] = "{$query['sql']} LIMIT {$perPage} offset {$offset}";
}

function render()
{

    global $query;

$pageCount = $query['pageCount'];
$currentPage = $query['currentPage'];

$links = '<ul class="pagination justify-content-center">';

if($currentPage > 1)
{
    $previous = $currentPage - 1;
    $linkPage = http_build_query(array_merge($_GET, ['page' => $previous]));
    $first = http_build_query(array_merge($_GET, ['page' => 1]));

    $links .= "<li class='page-item'><a class='page-link' href='?{$first}'>Primeira</a></li>";
    $links .= "<li class='page-item'><a class='page-link' href='?{$linkPage}'>Anterior</a></li>";
}

$class = '';
for ($i=1; $i <= $pageCount; $i++) {
    $class = $currentPage == $i ? 'active' : '';
    $linkPage = http_build_query(array_merge($_GET, ['page' => $i]));

    $links .= "<li class='page-item {$class}'><a class='page-link' href='?{$linkPage}'>{$i}</a></li>";
}

if($currentPage < $pageCount)
{
    $next = $currentPage + 1;
    $linkPage = http_build_query(array_merge($_GET, ['page' => $next]));
    $last = http_build_query(array_merge($_GET, ['page' => $pageCount]));

    $links .= "<li class='page-item'><a class='page-link' href='?{$linkPage}'>Próxima</a></li>";
    $links .= "<li class='page-item'><a class='page-link' href='?{$last}'>Última</a></li>";
}

$links .= '</ul>';

return $links;
}

function where()
{
    global $query;

    if(isset($query['where']))
    {
        throw new Exception("Verifique quantos Wheres estão sendo chamados na criação da sua Query");
    }

    $args = func_get_args();
    $numArgs = func_num_args();

    if (!isset($query['read'])) {
        throw new Exception("Precisa executar o Read antes do Where");
    }

    if ($numArgs < 2 || $numArgs > 3) {
        throw new Exception("O Where precisa de 2 ou 3 parâmetros");
    }

    if ($numArgs == 2) {
        $field = $args[0];
        $operator = "=";
        $value = $args[1];
    }

    if ($numArgs == 3) {
        $field = $args[0];
        $operator = $args[1];
        $value = $args[2];
    }

    $query['where'] = true;
    $query['execute'] = [...$query['execute'], $field => $value];
    $query['sql'] = "{$query['sql']} WHERE {$field} {$operator} :{$field}";
}

function orWhere()
{
    global $query;
    $args = func_get_args();
    $numArgs = func_num_args();

    if (!isset($query['read'])) {
        throw new Exception("Precisa executar o Read antes do Where");
    }

    if (!isset($query['where'])) {
        throw new Exception("Precisa executar o Where antes do orWhere");
    }

    if ($numArgs < 2 || $numArgs > 4) {
        throw new Exception("O orWhere precisa de 2 até 4 parâmetros");
    }

    $data = match ($numArgs) {
        2 => whereTwoParams($args),
        3 => whereThreeParams($args),
        4 => $args
    };

    [$field, $operator, $value, $typeWhere] = $data;

    $query['where'] = true;
    $query['execute'] = [...$query['execute'], $field => $value];
    $query['sql'] = "{$query['sql']} {$typeWhere} {$field} {$operator} :{$field}";
}

function whereTwoParams(array $args): array
{
    $field = $args[0];
    $operator = "=";
    $value = $args[1];
    $typeWhere = "OR";

    return [$field, $operator, $value, $typeWhere];
}
function whereThreeParams(array $args): array
{
    $operators = ['=', '<', '>', '!==', '<=', ">="];
    $field = $args[0];
    $operator = in_array($args[1], $operators) ? $args[1] : '=';
    $value = in_array($args[1], $operators) ? $args[2] : $args[1];
    $typeWhere = $args[2] === 'AND' ? 'AND' : 'OR';

    return [$field, $operator, $value, $typeWhere];
}

function whereIn(string $field, array $data)
{
    global $query;

    if(isset($query['where']))
    {
        throw new Exception("Não pode chamar o Where e o whereIn");
    }

    $query['where'] = true;
    $query['sql'] = "{$query['sql']} WHERE {$field} in (".'\''.implode('\',\'',$data).'\''.')';

}

function fieldFK(string $table, string $field){
    $inflector = InflectorFactory::create()->build();
    $tableToSingular = $inflector->singularize($table);

    return $tableToSingular.ucfirst($field);
}

function tableJoin(string $table, string $fieldFK, string $typeJoin = 'INNER'){
    global $query;

    if(isset($query['where']))
    {
        throw new Exception("Não é permitido colocar o Where antes do Join");
    }

    $fkToJoin = fieldFK($query['table'], $fieldFK);
    $query['sql'] = "{$query['sql']} {$typeJoin} JOIN {$table} ON {$table}.{$fkToJoin} = {$query['table']}.{$fieldFK}";
}

function tableJoinWithFK(string $table, string $fieldFK, string $typeJoin = 'INNER'){
    global $query;

    if(isset($query['where']))
    {
        throw new Exception("Não é permitido colocar o Where antes do Join");
    }

    $fkToJoin = fieldFK($table, $fieldFK);
    $query['sql'] = "{$query['sql']} {$typeJoin} JOIN {$table} ON {$table}.{$fieldFK} = {$query['table']}.{$fkToJoin}";
}

function search(array $search)
{
    global $query;

    if(isset($query['where']))
    {
        throw new Exception("Não pode chamar o Where no Search");
    }

    if(array_is_list($search))
    {
        throw new Exception("Na busca o Array tem que ser associativo");
    }

    $sql = "{$query['sql']} WHERE ";

    $execute = [];
    foreach ($search as $field => $searched) {
        $sql .= "{$field} LIKE :{$field} OR ";
        $execute[$field] = "%{$searched}%";
    }

    $sql = rtrim($sql, ' OR ');

    $query['sql'] = $sql;
    $query['execute'] = $execute;
}

function execute(bool $isFetchAll = true, bool $rowCount = false)
{
    try {
        global $query;

        $connect = connect();

        if(!isset($query['sql']))
        {
            throw new Exception("Precisa ter o SQL para executar a Query");
        }

        $prepare = $connect->prepare($query['sql']);
        $prepare->execute($query['execute'] ?? []);

        if($rowCount)
        {
            return $prepare->rowCount();
        }

        return $isFetchAll ? $prepare->fetchAll() : $prepare->fetch();
    } catch (Exception $e) {
        $error = [
            'file' => $e->getFile(),
            'line' => $e->getLine(),
            'message' => $e->getMessage(),
            'sql' => $query['sql']
        ];
        getMsg($error);
    }
}

// Query Completa
function all($table, $fields = "*")
{
    try {
        $connect = connect();

        $query = $connect->query("SELECT {$fields} FROM {$table}");
        return $query->fetchAll();
    } catch (PDOException $e) {
        var_dump($e->getMessage());
    }
}

function findBy($table, $field, $value, $fields = '*')
{
    try {
        $connect = connect();
        $prepare = $connect->prepare("SELECT {$fields} FROM {$table} WHERE {$field} = :{$field}");
        $prepare->execute([
            $field => $value
        ]);
        return $prepare->fetch();
    } catch (PDOException $e) {
        var_dump($e->getMessage());
    }
}
