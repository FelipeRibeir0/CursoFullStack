<?php 

namespace app\controllers;

class Home
{
    public function index($params)
    {
        $search = filter_input(INPUT_GET,'s', FILTER_SANITIZE_STRING);

        read('users','id, firstname, lastname');
        
        if($search)
        {
            search(['firstname' => $search, 'lastname' => $search]);
        }

        paginate(1);

        $users = execute();

        return [
            'view' => 'home',
            'data' => ['title' => 'Home', 'users' => $users, 'links' => render()]
        ];
    }
}

?>