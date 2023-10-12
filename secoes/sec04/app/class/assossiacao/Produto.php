<?php

namespace app\class\assossiacao;

class Produto
{
    public $nome;
    public $preco;

    public function __construct($nome, $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}
