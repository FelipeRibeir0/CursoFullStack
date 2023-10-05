<?php

function required($field)
{
    if ($_POST[$field] === '') {
        setFlash($field, "O campo é obrigatório");
        return false;
    }

    return strip_tags($_POST[$field]);
}

function email($field)
{
    $emailIsValid = filter_input(INPUT_POST, $field, FILTER_VALIDATE_EMAIL);

    if (!$emailIsValid) {
        setFlash($field, "O campo tem que ser um email válido");
        return false;
    }

    return strip_tags($_POST[$field]);
}

function uniqueUpdate($field, $param)
{
    $email = strip_tags($_POST[$field]);

    if (!str_contains($param, '=')) {
        setFlash($field, "A validação para unique no update tem que ter o sinal de =");
        return false;
    }

    [$fieldToCompare, $value] = explode('=', $param);

    if (!str_contains($fieldToCompare, ',')) {
        setFlash($field, "A validação para unique no update tem que ter a vírgula");
        return false;
    }

    $table = substr($fieldToCompare, 0, strpos($fieldToCompare, ','));
    $fieldToCompare = substr($fieldToCompare, strpos($fieldToCompare, ','), +1);

    read($table);
    where($field, $email);
    orWhere($fieldToCompare, '!=', $value, 'and');
    $userFound = execute(isFetchAll: false);

    if ($userFound) {
        setFlash($field, 'Esse email já está cadastrado');
        return false;
    }

    return $email;
}

function unique($field, $param)
{
    $data = strip_tags($_POST[$field]);
    $user = findBy($param, $field, $data);

    if ($user) {
        setFlash($field, 'Esse valor já está cadastrado');
        return false;
    }
    return $data;
}

function maxlen($field, $param)
{
    $data = strip_tags($_POST[$field]);
    if (strlen($data) > $param) {
        setFlash($field, "Este campo não pode passar de {$param} caracteres");
        return false;
    }
    return $data;
}

function nullable($field)
{
    $data = strip_tags($_POST[$field]);
    if ($data == '') {
        return null;
    }
    return $data;
}
