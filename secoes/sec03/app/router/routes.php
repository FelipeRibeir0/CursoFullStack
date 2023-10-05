<?php 

return [
    'POST' => [
        '/login' => 'Login@store',
        '/contact' => 'Contact@store',
        '/user/[0-9]+' => 'User@update',
        '/user/store' => 'User@store',
        '/user/image/update' => 'UserImage@store'
    ],
    'GET' => [
        '/' => 'Home@index',
        '/users' => 'Users@index',
        '/user/create' => 'User@create',
        '/user/edit/profile' => 'User@edit',
        '/user/[a-z0-9]+' => 'User@show',
        '/contact' => 'Contact@index',
        '/login' => 'Login@index',
        '/logout' => 'Login@destroy'
    ]
];
