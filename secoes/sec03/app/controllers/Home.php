<?php 

namespace app\controllers;

class Home
{
    public function index($params)
    {
        $search = filter_input(INPUT_GET,'s', FILTER_SANITIZE_STRING);

        read('users','id, firstname, lastname');
        paginate(2);
        // if($search)
        // {
        //     search(['firstname' => $search, 'lastname' => $search]);
        // }

        $users = execute();

        return [
            'view' => 'home',
            'data' => ['title' => 'Home', 'users' => $users, 'links' => render()]
        ];
    }
}

?>