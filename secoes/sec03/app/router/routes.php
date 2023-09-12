<?php 

return [
    'POST' => [
        '/login' => 'Login@store',
        '/contact' => 'Contact@store',
        '/user/store' => 'User@store'
    ],
    'GET' => [
        '/' => 'Home@index',
        '/users' => 'Users@index',
        '/user/create' => 'User@create',
        '/user/[a-z0-9]+' => 'User@show',
        '/contact' => 'Contact@index',
        '/login' => 'Login@index',
        '/logout' => 'Login@destroy'
    ]
];

?>