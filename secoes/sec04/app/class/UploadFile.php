<?php

namespace app\class;

class UploadFile extends Upload
{

    private $extensions = ['zip', 'rar', 'pdf'];

    public function __construct($file)
    {
        parent::__construct($file);
        echo "O construtor do UploadFile ";
    }

    public function upload()
    {
        return "Gerou o arquivo {$this->rename()}";
    }
}
