<?php
function connection()
{
    $host = $_ENV['HOST'];
    $dbname = $_ENV['DATABASE'];
    $user = $_ENV['USER'];
    $password = $_ENV['PASSWORD'];

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$password");
    return $pdo;
}

function getMsg()
{
    $table = $_ENV['TABLE'];

    $conn = connection();
    $query = $conn->query("SELECT * from $table");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
