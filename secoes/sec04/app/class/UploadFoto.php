<?php

namespace app\class;

class UploadFoto extends Upload
{
    private $extensions = ['png', 'jpg', 'jpeg'];

    public function upload()
    {
        return $this->rename();
    }
}
