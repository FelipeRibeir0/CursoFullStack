<?php 
require "../../../../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

include "conn.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <title>ENV</title>
</head>
<body>
    <h1>ENV</h1>
    <h2>Informações salvas no .env</h2>
    <pre>
        <?php
        var_dump($_ENV);
        ?>
    </pre>
    <hr>
    <h2>Informações salvas no BD</h2>
    <pre>
        <?php 
        
        var_dump(getMsg());

        ?>
        </pre>
</body>
</html>