<?php

use app\class\UploadFile;

require "vendor/autoload.php";

$upload = new UploadFile('foto.zip');
echo $upload->upload();
