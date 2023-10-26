<?php

declare(strict_types=1);

use src\app\class\Login;

require '../../vendor/autoload.php';

try {
    $login = new Login;
    echo $login->auth('exemplo@outlook.com', 'testei123%');
} catch (TypeError $te) {
    var_dump($te->getMessage());
}
