<?php
function doWhileArray()
{
    $names = ["Felipe", "Marcia", "Alexandre", "Miro","Marcos","Romeu","Carlos"];
    $i = 0;
    do {
        echo $names[$i].", ";
        $i++;
    } while ($i < count($names)-1);
    echo end($names);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <title>Do While</title>
</head>
<body>
<h1>Mexendo no looping <em>Do While</em></h1>
<p><?php doWhileArray()?></p>
</body>

</html>