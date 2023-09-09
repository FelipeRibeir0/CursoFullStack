<?php 

function limit(string|int $limit)
{
    global $query;
    $query['limit'] = true;

    if (isset($query['paginate'])) {
        throw new Exception("O LIMIT não pode vir após a Paginação");
    }

    $query['sql'] = "{$query['sql']} LIMIT {$limit}";
}

?>