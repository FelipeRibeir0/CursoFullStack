<?php

namespace app\class;

class UploadFoto extends Upload
{

    const PROP_CONST = "Propriedade constante";
    public static $prop_static = "Propriedade estática";

    private $extensions = ['png', 'jpg', 'jpeg'];

    public function upload()
    {
        return $this->rename();
    }

    public static function teste()
    {
        'Teste de método estático';
    }
}
