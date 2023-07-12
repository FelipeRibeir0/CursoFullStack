<?php
    $num2 = range(25, 49);

function printArray()
{
    $num = range(25, 49);

    for ($i = 0; $i < count($num); $i++) {
        echo $num[$i] . ", ";
    }
    echo end($num) + 1;
}
// implode(", ",$num) faz a mesma coisa, mas fiz esse 'for' para praticar
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <title>For</title>
</head>

<body>
    <h1>Mexendo no looping <em>For</em></h1>
    <p><?php printArray()?></p>
</body>

</html>