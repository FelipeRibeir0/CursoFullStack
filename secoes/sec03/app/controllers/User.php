<?php

namespace app\controllers;

class User
{

    public function show($params)
    {
        if(!isset($params)){
            return redirect('/');
        }
        $user = findBy('users','id',$params['user']);
        dd($user);
    }

    public function create()
    {
        return [
            'view' => 'create',
            'data' => ['title' => 'Create']
        ];
    }

    public function store()
    {  
        $validate = validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|maxlen:10'
        ]);

        if(!$validate)
        {
            return redirect('/user/create');
        }

        $validate['password'] = password_hash($validate['password'], PASSWORD_DEFAULT);

        $created = create('users',$validate);

        if(!$created)
        {
            setFlash('message','Ocorreu um erro ao cadastrar, tente novamente em alguns segundos');
            return redirect('user/create');
        }

        return redirect('/');
    }
}
