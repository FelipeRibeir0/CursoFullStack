<?php

require "app/class/UploadFoto.php";

$upload = new UploadFoto;
$upload->file('foto.png');
$upload->extension();
$upload->rename();
echo $upload->upload();
