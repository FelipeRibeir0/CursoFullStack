<?php

namespace app\controllers;

class Password
{
    public function update($args)
    {
        if (!isset($args['user']) || $args['user'] != user()->id) {
            return redirect('/');
        }

        $validated = validate([
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ], checkCsrf: true);

        $updated = update('users', ['password' => $validated['password']], ['id' => user()->id]);

        return redirect('/user/edit/profile');
    }
}
