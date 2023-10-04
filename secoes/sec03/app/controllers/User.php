<?php

namespace app\controllers;

class User
{

    public function show($params)
    {
        if (!isset($params)) {
            return redirect('/');
        }
        $user = findBy('users', 'id', $params['user']);
        dd($user);
    }

    public function create()
    {
        return [
            'view' => 'create',
            'data' => ['title' => 'Create']
        ];
    }

    public function edit()
    {

        if (!logged()) {
            redirect('/');
        }

        read('users', 'users.id, firstname, lastname, password, path');
        tableJoin('photos', 'id', 'left');
        where('users.id', user()->id);

        $user = execute(isFetchAll: false);

        return [
            'view' => 'edit',
            'data' => ['title' => 'Edit', 'user' => $user]
        ];
    }
    public function store()
    {
        $validate = validate(
            [
                'firstname' => 'required',
                'lastname' => 'nullable',
                'email' => 'required|email|unique:users',
                'password' => 'required|maxlen:10'
            ],
            persistInputs: true,
            checkCsrf: true
        );

        if (!$validate) {
            return redirect('/user/create');
        }

        $validate['password'] = password_hash($validate['password'], PASSWORD_DEFAULT);

        $created = create('users', $validate);

        if (!$created) {
            setFlash('message', 'Ocorreu um erro ao cadastrar, tente novamente em alguns segundos');
            return redirect('/user/create');
        }

        return redirect('/');
    }
}
