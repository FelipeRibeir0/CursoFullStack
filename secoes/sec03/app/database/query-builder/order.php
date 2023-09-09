<?php 

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

?>