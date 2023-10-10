<?php

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

    public static function send()
    {
        return self::who();
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
