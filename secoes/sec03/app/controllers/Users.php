<?php 

namespace app\controllers;

class Users
{
    public function index()
    {
        $users = all('users','id, firstname, lastname');
        echo json_encode($users);
    }
}
?>