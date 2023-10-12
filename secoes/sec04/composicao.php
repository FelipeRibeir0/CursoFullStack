<?php

use app\class\composicao\Carro;
use app\class\composicao\Motor;
use app\class\composicao\Rodas;
use app\class\composicao\Transmissao;

require "vendor/autoload.php";

$motor = new Motor("200hp");
$rodas = new Rodas(4);
$transmissao = new Transmissao("Automática");
$carro = new Carro($motor, $rodas, $transmissao);

$carro->ligarCarro();
$carro->dirigir();
