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

$shoppingCart = new ShoppingCart;

/* try {
     $shoppingCart->product = "Monitor";
     $shoppingCart->product = "Teclado";
     $shoppingCart->product = "Mouse";
     $shoppingCart->product;
 } catch (\Exception $e) {
     echo $e->getMessage();
}

$shoppingCart->add(['Monitor', 'Teclado', 'Mouse', 'Geladeira']);
$shoppingCart->products();
*/

echo $shoppingCart;
