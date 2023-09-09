<?php 

function update(string $table, array $fields, array $where)
{
    if(array_is_list($fields) || array_is_list($where))
    {
        throw new Exception('O Array tem que ser Associativo no update');
    }

    $connect = connect();

    $sql = "UPDATE {$table} SET ";

    foreach (array_keys($fields) as $field) {
        $sql .= "{$field} = :{$field}, ";
    }
    
    $sql = trim($sql, ", ");
    
    $whereFields = array_keys($where);

    $sql .= "WHERE {$whereFields[0]} = :{$whereFields[0]}";

    $data = array_merge($fields, $where);

    $prepare = $connect->prepare($sql);
    $prepare->execute($data);

    return $prepare->rowCount();
}

?>