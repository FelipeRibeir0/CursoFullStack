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


        if (!$validated) {
            return redirect('/user/edit/profile');
        }

        $updated = update('users', ['password' => $validated['password']], ['id' => user()->id]);

        if ($updated) {
            read('users', 'users.id, firstname, lastname, email');
            where('users.id', user()->id);

            $user = execute(isFetchAll: false);

            send([
                'fromName' => $_ENV['TO_NAME'],
                'fromEmail' => $_ENV['TO_EMAIL'],
                'toName' => $user->firstname,
                'toEmail' => $user->email,
                'subject' => 'Senha alterada',
                'message' => 'Senha alterada com sucesso',
                'template' => "password"
            ]);
            return setMessageAndRedirect('password_success', 'Senha alterada com Sucesso', '/user/edit/profile');
        } else {
            return setMessageAndRedirect('password_error', 'Ocorreu um erro ao atualizar a senha. Tente novamente em alguns segundos', '/user/edit/profile');
        }

        return redirect('/user/edit/profile');
    }
}
