<?php 

require "../../../bootstrap.php";

if(isEmpty()){
    flash("message","Preencha todos os campos","danger");
    return redirect("contato");
}

$validate = validate([
'name' => 's',
'email' => 'e',
'subject' => 's',
'message' => 's'
]);

$data = 
[
    'nomeQuem' => $validate->nome,
    'quem' => $validate->email,
    'para' => 'fecribeiro2003@gmail.com',
    'mensagem' => $validate->message,
    'assunto' => $validate->subject,
];

if(send($data))
{
    flash('message','Email enviado com sucesso','success');
    return redirect("contato");

};

?>