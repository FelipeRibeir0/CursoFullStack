<?php

function getExtension($name)
{
    return pathinfo($name, PATHINFO_EXTENSION);
}

function isFileToUpload($fieldName)
{
    if ($_FILES[$fieldName] == null || empty($_FILES[$fieldName]['name'])) {
        throw new Exception("O campo {$fieldName} não foi preenchido ou não foi escolhida uma imagem");
    }
}

function isImage($extension)
{
    if (!in_array($extension, ['jpeg', 'jpg', 'gif', 'png'])) {
        throw new Exception("O arquivo não é aceito");
    }
}

function upload(){
    $dst = imagecreatetruecolor(640,480);

    [$width, $height] = getimagesize($_FILES['file']['tmp_name']);

    $src = imagecreatefrompng($_FILES['file']['tmp_name']);

    imagecopyresampled($dst,$src,0,0,0,0,640,480,$width,$height);

    imagepng($dst,"assets/img/teste.png");
}