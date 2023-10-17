<?php

use app\class\agregacao\Departamento;
use app\class\agregacao\Empresa;
use app\class\agregacao\Funcionario;

require "../vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php getBootstrap() ?>
    <link rel="stylesheet" href="../css/codebox.css">
    <title>Agregação</title>
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
                    <a class="nav-link" href="composicao.php">Composição</a>
                    <a class="nav-link" href="assossiacao.php">Assossiação</a>
                    <a class="nav-link active" aria-current="page" href="#">Agregação</a>
                    <a class="nav-link" href="interface.php">Interface</a>
                    <a class="nav-link" href="polimorfismo.php">Polimorfismo</a>
                    <a class="nav-link" href="__magicos.php">Métodos Mágicos</a>
                    <a class="nav-link" href="exception.php">Exceptions</a>
                </div>
            </div>
        </div>
    </nav>

    <?php

    $funcionario1 = new Funcionario("Felipe", "Programador");
    $funcionario2 = new Funcionario("Marilene", "Designer");

    $departamentoTI = new Departamento("TI");
    $departamentoDesign = new Departamento("Design");

    $departamentoTI->adicionarFuncionario($funcionario1);
    $departamentoDesign->adicionarFuncionario($funcionario2);

    $minhaEmpresa = new Empresa("Minha Empresa");
    $minhaEmpresa->adicionarDepartamento($departamentoTI);
    $minhaEmpresa->adicionarDepartamento($departamentoDesign);

    $minhaEmpresa->verEstrutura();

    ?>

    <code style="height: 20vh;">
        <textarea class="code-box" readonly>
        use app\class\agregacao\Departamento;
        use app\class\agregacao\Empresa;
        use app\class\agregacao\Funcionario;

        $funcionario1 = new Funcionario("Felipe", "Programador");
        $funcionario2 = new Funcionario("Marilene", "Designer");

        $departamentoTI = new Departamento("TI");
        $departamentoDesign = new Departamento("Design");

        $departamentoTI->adicionarFuncionario($funcionario1);
        $departamentoDesign->adicionarFuncionario($funcionario2);

        $minhaEmpresa = new Empresa("Minha Empresa");
        $minhaEmpresa->adicionarDepartamento($departamentoTI);
        $minhaEmpresa->adicionarDepartamento($departamentoDesign);

        $minhaEmpresa->verEstrutura();
        </textarea>
    </code>
</body>

</html>