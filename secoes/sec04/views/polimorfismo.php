<?php

require "../vendor/autoload.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php getBootstrap() ?>
    <link rel="stylesheet" href="../css/codebox.css">
    <title>Polimorfismo</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">PHP POO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="../index.php">Home</a>
                    <a class="nav-link" href="classes.php">Classes</a>
                    <a class="nav-link" href="static.php">Métodos Statics</a>
                    <a class="nav-link" href="composicao.php">Composição</a>
                    <a class="nav-link" href="assossiacao.php">Assossiação</a>
                    <a class="nav-link" href="agregacao.php">Agregação</a>
                    <a class="nav-link" href="interface.php">Interface</a>
                    <a class="nav-link active" aria-current="page" href="#">Polimorfismo</a>
                    <a class="nav-link" href="__magicos.php">Métodos Mágicos</a>
                    <a class="nav-link" href="exception.php">Exceptions</a>
                </div>
            </div>
        </div>
    </nav>

    <?php

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
    echo $email->send() . '<br>';

    $email = new SendEmail(new Swift);
    echo $email->send();
    ?>

    <div id="container">
        <div class="code-container">
            <header>
                <div class="redBall"></div>
                <div class="yellowBall"></div>
                <div class="greenBall"></div>
            </header>
            <textarea class="code-box" readonly>
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

$email = new SendEmail(new Swift);
echo $email->send();
        </textarea>
        </div>
    </div>

</body>

</html>