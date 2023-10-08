<?php

class UploadFoto
{
    public $extension = ['png', 'jpg', 'jpeg'];
    public $file;
    public $newName;

    public function file($file)
    {
        $this->file = $file;
    }

    public function extension()
    {
        $extension = pathinfo($this->file, PATHINFO_EXTENSION);
        return strtolower($extension);
    }

    public function rename()
    {
        $uniqId = uniqid(true);
        $this->newName = $uniqId . '.' . $this->extension();
    }

    public function upload()
    {
        return $this->newName;
    }
}
