<?php

require 'vendor/autoload.php';

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
