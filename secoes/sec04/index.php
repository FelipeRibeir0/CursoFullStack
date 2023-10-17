<?php require 'vendor/autoload.php' ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php getBootstrap() ?>
    <title>eitakk</title>
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
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="views/classes.php">Classes</a>
                    <a class="nav-link" href="views/static.php">Métodos Statics</a>
                    <a class="nav-link" href="views/composicao.php">Composição</a>
                    <a class="nav-link" href="views/assossiacao.php">Assossiação</a>
                    <a class="nav-link" href="views/agregacao.php">Agregação</a>
                    <a class="nav-link" href="views/interface.php">Interface</a>
                    <a class="nav-link" href="views/polimorfismo.php">Polimorfismo</a>
                    <a class="nav-link" href="views/__magicos.php">Métodos Mágicos</a>
                    <a class="nav-link" href="views/exception.php">Exceptions</a>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>