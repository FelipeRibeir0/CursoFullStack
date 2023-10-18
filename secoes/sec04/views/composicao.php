<?php

use app\class\composicao\Carro;
use app\class\composicao\Motor;
use app\class\composicao\Rodas;
use app\class\composicao\Transmissao;

require "../vendor/autoload.php";
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php getBootstrap() ?>
    <link rel="stylesheet" href="../css/codebox.css">
    <title>Composição</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">PHP POO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="../index.php">Home</a>
                    <a class="nav-link" href="classes.php">Classes</a>
                    <a class="nav-link" href="static.php">Métodos Statics</a>
                    <a class="nav-link active" aria-current="page" href="#">Composição</a>
                    <a class="nav-link" href="assossiacao.php">Assossiação</a>
                    <a class="nav-link" href="agregacao.php">Agregação</a>
                    <a class="nav-link" href="interface.php">Interface</a>
                    <a class="nav-link" href="polimorfismo.php">Polimorfismo</a>
                    <a class="nav-link" href="__magicos.php">Métodos Mágicos</a>
                    <a class="nav-link" href="exception.php">Exceptions</a>
                </div>
            </div>
        </div>
    </nav>

    <?php

    $motor = new Motor("200hp");
    $rodas = new Rodas(4);
    $transmissao = new Transmissao("Automática");
    $carro = new Carro($motor, $rodas, $transmissao);

    $carro->ligarCarro();
    $carro->dirigir();
    ?>

    <div id="container">
        <div class="code-container">
            <header>
                <div class="redBall"></div>
                <div class="yellowBall"></div>
                <div class="greenBall"></div>
            </header>
            <textarea class="code-box" readonly>
            use app\class\composicao\Carro;
        use app\class\composicao\Motor;
        use app\class\composicao\Rodas;
        use app\class\composicao\Transmissao;

        require "../vendor/autoload.php";

        $motor = new Motor("200hp");
        $rodas = new Rodas(4);
        $transmissao = new Transmissao("Automática");
        $carro = new Carro($motor, $rodas, $transmissao);

        $carro->ligarCarro();
        $carro->dirigir();
        </textarea>
        </div>
    </div>


</body>

</html>