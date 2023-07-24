<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <title>Cookies</title>
</head>
<body>
    <h1>Utilizando Cookies</h1>
    <p>Neste arquivo eu utilizarei a variável super global <strong>$_COOKIE</strong></p>

    <?php 
    if (isset($_COOKIE['nome']) && isset($_COOKIE['idade']) && isset($_COOKIE['hora']))
    {
    echo "<p>Meu nome é {$_COOKIE['nome']} e eu tenho {$_COOKIE['idade']} anos</p>";
    echo "<p> {$_COOKIE['hora']} </p>";
    }
    else
    {
        header("Location: index.php");
    }
    ?>

</body>
</html>