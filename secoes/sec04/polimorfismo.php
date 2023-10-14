<?php

require 'vendor/autoload.php';

interface EmailInterface
{
    public function send();
}

class Swift implements EmailInterface
{
    public function send(): string
    {
        return "Enviando Email com o Swift";
    }
}

class Mailer implements EmailInterface
{
    public function send(): string
    {
        return "Enviando Email com o PHPMailer";
    }
}

class SendEmail
{
    private $email;
    public function __construct(EmailInterface $email)
    {
        $this->email = $email;
    }

    public function send(): string
    {
        return $this->email->send();
    }
}

$email = new SendEmail(new Mailer);
echo $email->send();
