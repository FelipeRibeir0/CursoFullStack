<?php

namespace app\class\assossiacao;

class Carrinho
{
    public array $produtos = [];

    public function adicionarProduto($nome, $preco)
    {
        $produto = new Produto($nome, $preco);
        $this->produtos[] = $produto;
    }

    public function calcularTotal()
    {
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total += $produto->preco;
        }
        return $total;
    }

    public function verProdutos()
    {
        $totalCarrinho = $this->calcularTotal();

        echo "Produtos no carrinho:<br>";
        foreach ($this->produtos as $produto) {
            echo $produto->nome . ": R$" . $produto->preco . "<br>";
        }

        echo "Total no carrinho: R$" . $totalCarrinho;
    }
}
