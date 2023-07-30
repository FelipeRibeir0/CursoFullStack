<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = preg_replace('/[^A-Za-zÀ-ÿ ]/', '', $_POST['nome']);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $int = (int) $_POST['int'];
    $float = (float) $_POST['float'];
}

function checkEmail()
{
    global $email;
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "O email {$email} é um email válido";
    } else {
        echo "O texto {$email} não é um email válido";
    }
}

function checkFloat()
{
    global $float;
    if (is_numeric($float) && strpos($float, '.')) {
        echo "O número {$float} é um Float";
    } else {
        echo "{$float} não é um Float";
    }
}

function checkInt()
{
    global $int;
    if (filter_var($int, FILTER_VALIDATE_INT)) {
        echo "O número {$int} é um Int";
    } else {
        echo "O número {$int} não é um Int";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <link rel="stylesheet" href="style.css">
    <title>Sanitizadores e Validates</title>
</head>

<body>
        <section>
            <fieldset>
                <h1>Nome</h1>
                <p>Nome original: <?php echo $_POST['nome'] ?></p>
                <p>Nome tratado: <?php echo $nome ?></p>
            </fieldset>
        </section>
        <section>
            <fieldset>
                <h1>Email</h1>
                <p>Email original: <?php $_POST['email'] ?></p>
                <p>Email tratado: <?php checkEmail() ?></p>
            </fieldset>
        </section>
        <section>
            <fieldset>
                <h1>Int</h1>
                <p>Int original: <?php echo $_POST['int'] ?></p>
                <p>Int tratado: <?php checkInt() ?></p>
            </fieldset>
        </section>
        <section>
            <fieldset>
                <h1>Float</h1>
                <p>Float original: <?php echo $_POST['float'] ?></p>
                <p>Float tratado: <?php checkFloat() ?></p>
            </fieldset>
        </section>
</body>

</html>