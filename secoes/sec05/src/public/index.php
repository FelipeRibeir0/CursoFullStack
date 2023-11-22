<?php

declare(strict_types=1);

use src\app\class\User;

require '../../vendor/autoload.php';

$user = new User;
$user->info();
