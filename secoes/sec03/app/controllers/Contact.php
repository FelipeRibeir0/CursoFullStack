<?php 

namespace app\controllers;

use stdClass;

class Contact
{
    public function index()
    {
        return [
            'view' => 'contact',
            'data' => ['title' => 'Contact']
        ];
    }

    public function store()
    {

        $validated = validate([
            'name' => 'required',
            'email' =>'required|email',
            'subject' => 'required',
            'message' => 'required'
        ], persistInputs:true, checkCsrf:true);

        if(!$validated)
        {
            return redirect('/contact');
        }

        $sent = send([
            'fromName' => $validated['name'],
            'fromEmail' => $validated['email'],
            'toName' => $_ENV['TO_NAME'],
            'toEmail' => $_ENV['TO_EMAIL'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'template' => "contact"
        ]);

        if($sent)
        {
            return setMessageAndRedirect('contact_success', 'Enviado com Sucesso', '/contact');
        }
        return setMessageAndRedirect('contact_error', 'Ocorreu um erro ao enviar o email. Tente novamente em alguns segundos', '/contact');
    }
}

?>