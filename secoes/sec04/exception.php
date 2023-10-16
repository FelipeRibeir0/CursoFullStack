<?php

require 'vendor/autoload.php';

class Controller
{
    public function make()
    {
        if (!$this->controllerExist()) {
            throw new ControllerNotExistException("Erro ao criar o controller");
        }

        if (!$this->methodExist()) {
            throw new MethodNotExistException("Erro ao chamar o método");
        }
        return "controller";
    }

    private function controllerExist()
    {
        return true;
    }

    private function methodExist()
    {
        return false;
    }
}

class ControllerNotExistException extends \Exception
{
}

class MethodNotExistException extends \Exception
{
}

try {
    $controller = new Controller;
    $controller->make();
} catch (\Exception $e) {
    echo $e->getMessage();
}
