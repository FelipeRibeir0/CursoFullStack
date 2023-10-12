<?php

namespace app\class\composicao;


class Transmissao
{
    private $tipo;

    public function __construct($tipo)
    {
        $this->tipo = $tipo;
    }

    public function mudarMarcha($marcha)
    {
        echo "Transmissão mudou para a marcha $marcha.<br>";
    }
}
