<?php

require "../vendor/autoload.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php getBootstrap() ?>
    <link rel="stylesheet" href="../css/codebox.css">
    <title>Métodos Mágicos</title>
</head>

<body style="overflow-y: scroll;">

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
                    <a class="nav-link" href="agregacao.php">Agregação</a>
                    <a class="nav-link" href="interface.php">Interface</a>
                    <a class="nav-link" href="polimorfismo.php">Polimorfismo</a>
                    <a class="nav-link active" aria-current="page" href="#">Métodos Mágicos</a>
                    <a class="nav-link" href="exception.php">Exceptions</a>
                </div>
            </div>
        </div>
    </nav>

    <?php

    class ShoppingCart
    {
        private $get = [];
        private $products = [];

        public function __set($name, $value)
        {
            if (!property_exists($this, $name)) {
                $this->get[$name][] = $value;
            } else {
                throw new \Exception("Essa propriedade já existe");
            }
        }

        public function __get($name)
        {
            echo '<pre>';
            var_dump($this->get[$name]);
            echo '</pre>';
        }

        public function __call($name, string|array $arguments)
        {
            $this->products[] = $arguments;
        }

        public function getProducts()
        {
            echo '<pre>';
            var_dump($this->products);
            echo '</pre>';
        }

        public function __toString()
        {
            return "Chamando o __toString";
        }
    }
    echo '<h3>Métodos Mágicos</h3>';

    $shoppingCart = new ShoppingCart;

    echo '<h4>__get e __set</h4>';
    try {
        $shoppingCart->product = "Geladeira";
        $shoppingCart->product = "Microondas";
        $shoppingCart->product = "Fogão";
        $shoppingCart->product;
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
    echo '<h4>Utilizando __call</h4>';

    $shoppingCart->add(['Monitor', 'Teclado', 'Mouse', 'Geladeira']);
    $shoppingCart->getProducts();

    echo '<h4>__toString</h4>';
    echo $shoppingCart;

    ?>

    <div id="container">
        <div class="code-container">
            <header>
                <div class="redBall"></div>
                <div class="yellowBall"></div>
                <div class="greenBall"></div>
            </header>
            <textarea class="code-box" readonly>
            class ShoppingCart
{
    private $get = [];
    private $products = [];

    public function __set($name, $value)
    {
        if (!property_exists($this, $name)) {
            $this->get[$name][] = $value;
        } else {
            throw new \Exception("Essa propriedade já existe");
        }
    }

    public function __get($name)
    {
        echo '<pre>';
        var_dump($this->get[$name]);
        echo '</pre>';
    }

    public function __call($name, string|array $arguments)
    {
        $this->products[] = $arguments;
    }

    public function getProducts()
    {
        echo '<pre>';
        var_dump($this->products);
        echo '</pre>';
    }

    public function __toString()
    {
        return "Chamando o __toString";
    }
}
echo '<h3>Métodos Mágicos</h3>';

$shoppingCart = new ShoppingCart;

echo '<h4>__get e __set</h4>';
try {
    $shoppingCart->product = "Geladeira";
    $shoppingCart->product = "Microondas";
    $shoppingCart->product = "Fogão";
    $shoppingCart->product;
} catch (\Exception $e) {
    echo $e->getMessage();
}
echo '<h4>Utilizando __call</h4>';

$shoppingCart->add(['Monitor', 'Teclado', 'Mouse', 'Geladeira']);
$shoppingCart->getProducts();

echo '<h4>__toString</h4>';
echo $shoppingCart;
        </textarea>
        </div>
    </div>

</body>

</html>