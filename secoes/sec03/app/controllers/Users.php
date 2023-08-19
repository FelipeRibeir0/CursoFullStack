<?php 

namespace app\controllers;

class Users
{
    public function index()
    {
        echo json_encode($_SERVER);
    }
}
?>