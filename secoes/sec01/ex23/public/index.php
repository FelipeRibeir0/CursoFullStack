<?php 
date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y');
$time = date('H:i:s');

setcookie('nome',"Felipe", strtotime('+5days'));
setcookie('idade',20, strtotime('+5days'));
setcookie('hora',"Dentro do período de 24 horas, você entrou no site em $date às $time.",strtotime('+1day'));
header("Location: getCookie.php");
?>