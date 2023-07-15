<?php

$user = function($nome,$idade){
    return "O meu nome é {$nome} e eu tenho {$idade} anos";
};

function teste($callback){
    return call_user_func_array($callback,['Felipe',20]);
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <title>Callbacks</title>
</head>

<body>
    <h1>Usando Closures e Callback</h1>

    <?php
    echo teste($user);
    ?>
</body>

</html>