<?php 

function setFlash($index, $message)
{
    if(!isset($_SESSION['flash'][$index]))
    {
        $_SESSION['flash'][$index] = $message;
    }
}

function getFlash($index, $style = "color:#ea868f")
{
    if(isset($_SESSION['flash'][$index]))
    {
        $flash = $_SESSION['flash'][$index];
        unset($_SESSION['flash'][$index]);

        return "<span id='flashMessage' style={$style}>{$flash}</span>";
    }
}

?>