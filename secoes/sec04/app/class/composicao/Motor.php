<?php

namespace app\class\composicao;

class Motor
{
    private $potencia;

    public function __construct($potencia)
    {
        $this->potencia = $potencia;
    }

    public function ligar()
    {
        echo "Motor ligado.<br>";
    }
}
