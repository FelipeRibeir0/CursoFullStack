<?php

namespace src\app\class;

class Login
{

    public function auth(string $email, string|int $password): string
    {
        return "O meu email é {$email} e a minha senha é {$password}";
    }
}
