<?php 

function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function isAjax():bool
{
return (isset($_SERVER['HTTP_HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest');
}

function getMsg($data)
{
    if($_ENV['PRODUCTION'] == 'true')
    {
        dd("Something get wrong");
    }
    dd($data);
}