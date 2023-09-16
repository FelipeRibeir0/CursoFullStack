<?php

function getExtension($name)
{
    return pathinfo($name, PATHINFO_EXTENSION);
}

function isFileToUpload($fieldName)
{
    if ($_FILES[$fieldName] == null || $_FILES[$fieldName]['name'] == null || $_FILES[$fieldName]['name'] == '') {
        throw new Exception("O campo {$fieldName} não foi preenchido ou não foi escolhida uma imagem");
    }
}

function isImage($extension)
{
    if (!in_array($extension, ['jpeg', 'jpg', 'gif', 'png'])) {
        throw new Exception("O arquivo não é aceito");
    }
}
