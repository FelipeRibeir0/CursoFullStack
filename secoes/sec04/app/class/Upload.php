<?php

namespace app\class;

use app\traits\ValidationFile;

abstract class Upload
{
    use ValidationFile;

    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    protected function extension()
    {
        $extension = pathinfo($this->file, PATHINFO_EXTENSION);
        return strtolower($extension);
    }

    protected function rename()
    {
        $uniqId = uniqid(true);
        return $uniqId . '.' . $this->extension();
    }
}
