<?php 

function connection()
{
    $pdo = new PDO('mysql:host=localhost;dbname=functions', 'root', '');
    return $pdo;
}

function getData($table)
{
    $conn = connection();
    $query = $conn->query("SELECT * from {$table}");
    $query->execute();
    return $query->fetchAll();
}

?>