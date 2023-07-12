<?php
function foreachArray()
{
    $names = ["Felipe", "Marcia", "Alexandre", "Miro","Marcos","Romeu","Carlos","Marcelo","Thiago","Viniccius","Andressa","Carla","Rodrigo","Gabriel"];
 
    foreach ($names as $key => $name) {
    echo "[".$key. "] =><br>" . $name."<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <title>Foreach</title>
</head>
<body>
<h1>Mexendo no looping <em>Foreach</em></h1>
<pre>
array(13) {
<?php foreachArray()?>
}
</pre>
</body>
</html>