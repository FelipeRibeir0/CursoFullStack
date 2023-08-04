<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function send(array $data) {
	$email = new PHPMailer();
	try{
		$email->isSMTP();
		$email->SMTPAuth = true;
		$email->Username = '8da65333664a29';
		$email->Password = '86e592de9fdcf8';
	$email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'tls';
    $email->Host = 'sandbox.smtp.mailtrap.io';
    $email->Port = 2525;
	$email->isHTML();
	$email->setFrom($data['quem'], $data['nomeQuem']);
	$email->addAddress($data['para']);
	$email->Body = $data['mensagem'];
	$email->Subject = $data['assunto'];
	$email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita ver HTML';
	$email->MsgHTML($data['mensagem']);
	}
	catch (Exception $e)
	{
		echo "Message could not be sent. Mailer Error: {$email->ErrorInfo}";
	}

	return $email->send();
}
