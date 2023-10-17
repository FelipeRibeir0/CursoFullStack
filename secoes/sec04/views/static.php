<?php

use app\class\UploadFoto;

require "../vendor/autoload.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php getBootstrap() ?>
    <link rel="stylesheet" href="../css/codebox.css">
    <title>Static</title>
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
                    <a class="nav-link active" aria-current="page" href="#">Métodos Statics</a>
                    <a class="nav-link" href="composicao.php">Composição</a>
                    <a class="nav-link" href="assossiacao.php">Assossiação</a>
                    <a class="nav-link" href="agregacao.php">Agregação</a>
                    <a class="nav-link" href="interface.php">Interface</a>
                    <a class="nav-link" href="polimorfismo.php">Polimorfismo</a>
                    <a class="nav-link" href="__magicos.php">Métodos Mágicos</a>
                    <a class="nav-link" href="exception.php">Exceptions</a>
                </div>
            </div>
        </div>
    </nav>

    <?php

    # Utilizar método estático que está dentro de outras classes
    echo UploadFoto::teste();

    echo UploadFoto::PROP_CONST . '  ||  ' . UploadFoto::$prop_static;
    abstract class Email
    {

        public static function teste()
        {
            return 'parent';
        }

        public static function who()
        {
            return "Felipe";
        }

        public static function send(string $key = 'self')
        {
            if ($key === 'self') {
                return self::who();
            }
            return static::who();
            /* 
        self:: = Utiliza o who() da mesma classe, retornando 'Felipe'
        static:: = Utiliza o who() da classe que chama o send(), que retornará o 'Teste'
        */
        }
    }

    class sendEmail extends Email
    {
        public static function who()
        {
            return "Teste";
            #return parent::teste() = Utiliza o teste() da classe-pai, que no caso é a classe abstrata Email.
        }
    }

    echo '  ||  ' . sendEmail::send();
    ?>

    <hr>
    <code>
        <textarea class="code-box" readonly>
use app\class\UploadFoto;

# Utilizar método estático que está dentro de outras classes
echo UploadFoto::teste();

echo UploadFoto::PROP_CONST;
echo UploadFoto::$prop_static;

print "\n\n";

abstract class Email
{

    public static function teste()
    {
        return 'parent';
    }

    public static function who()
    {
        return "Felipe";
    }

    public static function send(string $key = 'self')
    {
        if ($key === 'self') {
            return self::who();
        }
        return static::who();
        /* 
        self:: = Utiliza o who() da mesma classe, retornando 'Felipe'
        static:: = Utiliza o who() da classe que chama o send(), que retornará o 'Teste'
        */
    }
}

class sendEmail extends Email
{
    public static function who()
    {
        return "Teste";
        #return parent::teste() = Utiliza o teste() da classe-pai, que no caso é a classe abstrata Email.
    }
}

echo sendEmail::send();
        </textarea>
    </code>
</body>

</html>