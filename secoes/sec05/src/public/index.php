<?php

declare(strict_types=1);

require '../../vendor/autoload.php';

class User
{

    public function __construct(public string $name, public int $age)
    {
    }

    public function getUserInfo()
    {
        return $this->name . " " . $this->age;
    }
}

class User2 extends User
{
    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age);
    }
}

$user = new User2("Felipe", 20);
echo $user->getUserInfo();
