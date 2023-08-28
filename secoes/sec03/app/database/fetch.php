<?php
// Query builder
$query = [];

function read(string $table, string $fields = '*')
{
    global $query;

    $query['read'] = true;
    $query['execute'] = [];
    $query['sql'] = "SELECT {$fields} FROM {$table}";
}

function limit(string|int $limit)
{
    global $query;
    $query['limit'] = true;

    if(isset($query['paginate']))
    {
        throw new Exception("O LIMIT não pode vir após a Paginação");
    }

    $query['sql'] = "{$query['sql']} LIMIT {$limit}";
}

function order(string $by, string $order = "ASC")
{
    global $query;

    if(isset($query['limit']))
    {
        throw new Exception("O ORDER não pode vir após o LIMIT");
    }

    if(isset($query['paginate']))
    {
        throw new Exception("O ORDER não pode vir após a Paginação");
    }

    $query['sql'] = "{$query['sql']} ORDER BY {$by} {$order}";
}

function paginate(string|int $perPage = 10)
{
    global $query;

    if(isset($query['limit']))
    {
        throw new Exception("A paginação não pode ser chamada com o LIMIT");
    }
}

function where()
{
    global $query;
    $args = func_get_args();
    $numArgs = func_num_args();

    if(!isset($query['read']))
    {
        throw new Exception("Precisa executar o Read antes do Where");
    }

    if($numArgs < 2 || $numArgs > 3)
    {
        throw new Exception("O Where precisa de 2 ou 3 parâmetros");
    }

    if($numArgs == 2)
    {
        $field = $args[0];
        $operator = "=";
        $value = $args[1];
    }

    if($numArgs == 3)
    {
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

    if(!isset($query['read']))
    {
        throw new Exception("Precisa executar o Read antes do Where");
    }

    if(!isset($query['where']))
    {
        throw new Exception("Precisa executar o Where antes do orWhere");
    }

    if($numArgs < 2 || $numArgs > 4)
    {
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

function whereTwoParams(array $args):array {
    $field = $args[0];
    $operator = "=";
    $value = $args[1];
    $typeWhere = "OR";

    return [$field, $operator, $value, $typeWhere];
}
function whereThreeParams(array $args):array {
    $operators = ['=','<', '>','!==','<=',">="];
    $field = $args[0];
    $operator = in_array($args[1],$operators) ? $args[1] : '=';
    $value = in_array($args[1],$operators) ? $args[2] : $args[1];
    $typeWhere = $args[2] == 'AND' ? 'AND' : 'OR';

    return [$field, $operator, $value, $typeWhere];

}

function execute()
{    
    global $query;

    $connect = connect();
    
    $prepare = $connect->prepare($query['sql']);
    $prepare->execute($query['execute'] ?? []);

    return $prepare->fetchAll();
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
