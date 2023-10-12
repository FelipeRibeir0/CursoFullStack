<?php

namespace app\class\composicao;

class Carro
{
    private $motor;
    private $rodas;
    private $transmissao;

    public function __construct($motor, $rodas, $transmissao)
    {
        $this->motor = $motor;
        $this->rodas = $rodas;
        $this->transmissao = $transmissao;
    }

    public function ligarCarro()
    {
        $this->motor->ligar();
    }

    public function dirigir()
    {
        $this->rodas->girar();
        $this->transmissao->mudarMarcha(1);
        echo "Dirigindo o carro.<br>";
    }
}
