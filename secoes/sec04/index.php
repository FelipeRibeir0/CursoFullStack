<?php

use app\class\UploadFoto;

require "vendor/autoload.php";

$upload = new UploadFoto('foto.png');
$upload->file('foto.png');
$upload->extension();
$upload->rename();
echo $upload->upload();
