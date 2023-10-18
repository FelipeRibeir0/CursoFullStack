<?php

namespace src\app\class;

class Login
{
    public $email;
    public $password;

    public function logar()
    {
        echo "O meu email é {$this->email} e a minha senha é {$this->password}";
    }
}
