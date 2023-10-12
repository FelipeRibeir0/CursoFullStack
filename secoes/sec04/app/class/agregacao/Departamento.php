<?php

namespace app\class\agregacao;

class Departamento
{
    public $nome;
    public $funcionarios = [];

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function adicionarFuncionario($funcionario)
    {
        $this->funcionarios[] = $funcionario;
    }
}
