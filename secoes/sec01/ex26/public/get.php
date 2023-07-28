<?php 
$queryString = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
$paramUrl = '?'.urldecode($queryString);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="methods.css">
    <title>GET</title>
</head>

<body>
    <pre>
        <?php var_dump($_GET); ?>
    </pre>
    <p>No GET, é realizada uma query url para receber os valores nessa página, com os valores e nome de variáveis visíveis na URL após os símbolos <strong>?</strong> e o <strong>&</strong></p>

    <p>
        Por exemplo, na URL está escrito
        <strong>
        <?php
        echo $paramUrl;
        ?>
        </strong>, onde passa 2 parâmetros pela URL do site, <em>name</em> e <em>email</em>
    </p>

    <a href="index.php">
        <i class="fa fa-arrow-left"> Voltar </i>
    </a>
</body>

</html>