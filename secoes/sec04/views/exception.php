<?php

require "../vendor/autoload.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php getBootstrap() ?>
    <link rel="stylesheet" href="../css/codebox.css">
    <title>Exception</title>
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
                    <a class="nav-link " href="assossiacao.php">Assossiação</a>
                    <a class="nav-link" href="agregacao.php">Agregação</a>
                    <a class="nav-link" href="interface.php">Interface</a>
                    <a class="nav-link" href="polimorfismo.php">Polimorfismo</a>
                    <a class="nav-link" href="__magicos.php">Métodos Mágicos</a>
                    <a class="nav-link active" aria-current="page" href="#">Exceptions</a>
                </div>
            </div>
        </div>
    </nav>

    <?php

    class Controller
    {
        public function make()
        {
            if (!$this->controllerExist()) {
                throw new ControllerNotExistException("Erro ao criar o controller");
            }

            if (!$this->methodExist()) {
                throw new MethodNotExistException("Erro ao chamar o método");
            }
            return "controller";
        }

        private function controllerExist()
        {
            return true;
        }

        private function methodExist()
        {
            return false;
        }
    }

    class ControllerNotExistException extends \Exception
    {
    }

    class MethodNotExistException extends \Exception
    {
    }

    try {
        $controller = new Controller;
        $controller->make();
    } catch (\Exception $e) {
        echo $e->getMessage();
    }

    ?>

    <div id="container">
        <div class="code-container">
            <header>
                <div class="redBall"></div>
                <div class="yellowBall"></div>
                <div class="greenBall"></div>
            </header>
            <textarea class="code-box" readonly>
            class Controller
{
    public function make()
    {
        if (!$this->controllerExist()) {
            throw new ControllerNotExistException("Erro ao criar o controller");
        }

        if (!$this->methodExist()) {
            throw new MethodNotExistException("Erro ao chamar o método");
        }
        return "controller";
    }

    private function controllerExist()
    {
        return true;
    }

    private function methodExist()
    {
        return false;
    }
}

class ControllerNotExistException extends \Exception
{
}

class MethodNotExistException extends \Exception
{
}

try {
    $controller = new Controller;
    $controller->make();
} catch (\Exception $e) {
    echo $e->getMessage();
}
        </textarea>
        </div>
    </div>

</body>

</html>