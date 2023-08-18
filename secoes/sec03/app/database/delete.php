<?php 

function delete(string $table, array $where)
{

$connect = connect();

if(array_is_list($where))
{
    throw new Exception("O array tem que ser Associativo no Delete");
}


$whereField = array_keys($where);

$sql = "DELETE FROM {$table} WHERE ";
$sql .= "{$whereField[0]} = :{$whereField[0]}";

$prepare = $connect->prepare($sql);
$prepare->execute($where);

return $prepare->rowCount();

}

?>