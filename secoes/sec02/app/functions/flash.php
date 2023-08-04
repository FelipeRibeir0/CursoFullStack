<?php 

function flash($key, $message, $type = 'danger')
{
    if(!isset($_SESSION['flash'][$key]))
    {
      $icon = "<i class='fa fa-exclamation-circle' aria-hidden=true'></i>";

      if($type !='danger')
      {
        $icon = "<i class='fa fa-check-circle' aria-hidden='true'></i>";
      }
      $_SESSION['flash'][$key] = "
      <div class='alert alert-{$type} d-flex align-items-center' role='alert'>" .
      $icon . "<div> {$message} </div> </div>";
    }
}

function get($key)
{ 
if (isset($_SESSION['flash'][$key]))
{
    $message = $_SESSION['flash'][$key];

    unset($_SESSION['flash'][$key]);

    return $message ?? '';
}
}
