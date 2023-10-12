<?php

namespace app\class\composicao;

class Rodas
{
    private $quantidade;

    public function __construct($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function girar()
    {
        echo "Rodas girando.<br>";
    }
}
