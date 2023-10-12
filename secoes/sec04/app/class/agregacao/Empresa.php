<?php

namespace app\class\agregacao;

class Empresa
{
    public $nome;
    public $departamentos = [];

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function adicionarDepartamento($departamento)
    {
        $this->departamentos[] = $departamento;
    }

    public function verEstrutura(): void
    {
        echo "Nome da Empresa: " . $this->nome . "<br>";
        foreach ($this->departamentos as $departamento) {
            echo "Departamento: " . $departamento->nome . "<br>";
            echo "Funcionários no Departamento:<br>";
            foreach ($departamento->funcionarios as $funcionario) {
                echo $funcionario->nome . " (" . $funcionario->cargo . ")<br>";
            }
            echo "<br>";
        }
    }
}
