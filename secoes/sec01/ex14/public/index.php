<?php
function whileArray()
{
    $names = ["Felipe", "Marcia", "Alexandre", "Miro"];
    $i = 0;
    while ($i < count($names)-1) {
        echo $names[$i].", ";
        $i++;
    }
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
    <title>While</title>
</head>
<body>
<h1>Mexendo no looping <em>While</em></h1>
<p><?php whileArray()?></p>
</body>

</html>