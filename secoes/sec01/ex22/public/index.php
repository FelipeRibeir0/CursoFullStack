<?php

$nome = "Felipe";
$idade = 20;

function printVarGlobal()
{
    global $nome;
    global $idade;

    echo "Olá! Meu nome é {$nome} e eu tenho {$idade} anos";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <link rel="stylesheet" href="style.css">
    <title>Variável Global</title>
</head>
<body>
    <?php printVarGlobal()?>
</body>
</html>