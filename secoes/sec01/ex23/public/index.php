<?php 

setcookie('nome',"Felipe", strtotime('+5days'));
setcookie('idade',20, strtotime('+5days'));
header("Location: getCookie.php");
?>