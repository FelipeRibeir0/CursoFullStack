<?php

use app\class\assossiacao\Carrinho;

require "vendor/autoload.php";

$carrinho = new Carrinho();
$carrinho->adicionarProduto("Camiseta", 20);
$carrinho->adicionarProduto("Calça", 30);
$carrinho->adicionarProduto("Tênis", 50);

$carrinho->verProdutos();
