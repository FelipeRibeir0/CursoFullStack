<?php
$setH1Color = function ($colorText) {
    return function ($text) use ($colorText) {
        return "<h1 style=\"color: {$colorText} \"> {$text} </h1>";
    };
};

$setH1Text = $setH1Color('#495394');
$h1 = $setH1Text('Aprendendo a utilizar Closures');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <title>Closures</title>
</head>
<body>
    <?php echo $h1 ?>
</body>
</html>