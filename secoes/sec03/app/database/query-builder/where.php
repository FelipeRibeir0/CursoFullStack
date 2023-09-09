<?php 

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

?>