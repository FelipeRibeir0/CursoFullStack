<?php 

namespace app\class\agregacao;

class Funcionario {
    public $nome;
    public $cargo;

    public function __construct($nome, $cargo) {
        $this->nome = $nome;
        $this->cargo = $cargo;
    }
}
