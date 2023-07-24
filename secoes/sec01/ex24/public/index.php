<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <title>Session</title>
</head>
<body>
    <h1>Session</h1>
<p>
<?php 
session_start();
echo "O id da sua sessão é " . session_id();
?>
</p>
<p>Como esse é o ID da sua sessão, caso você feche seu navegador e abra novamente o site, o ID trocará, pois você abrirá uma sessão diferente!</p>
</body>
</html>