<?php 

function dd($dump)
{
    echo "<pre>";
    var_dump($dump);
    echo "</pre>";
    die();
}

function request(){

    $request = $_SERVER['REQUEST_METHOD'];

    if($request == 'POST'){
        return $_POST;
    }
    return $_GET;

}

?>