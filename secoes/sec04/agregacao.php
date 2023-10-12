<?php

use app\class\agregacao\Departamento;
use app\class\agregacao\Empresa;
use app\class\agregacao\Funcionario;

require "vendor/autoload.php";

$funcionario1 = new Funcionario("Felipe", "Programador");
$funcionario2 = new Funcionario("Marilene", "Designer");

$departamentoTI = new Departamento("TI");
$departamentoDesign = new Departamento("Design");

$departamentoTI->adicionarFuncionario($funcionario1);
$departamentoDesign->adicionarFuncionario($funcionario2);

$minhaEmpresa = new Empresa("Minha Empresa");
$minhaEmpresa->adicionarDepartamento($departamentoTI);
$minhaEmpresa->adicionarDepartamento($departamentoDesign);

$minhaEmpresa->verEstrutura();
