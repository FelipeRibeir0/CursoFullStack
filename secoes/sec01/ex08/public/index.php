<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <link rel="stylesheet" href="style.css">
    <title>Booleanos</title>
</head>

<body>
    <?php
    $name = "Felipe";
    $age = 20;
    $loggedd = false;

    print "<h1>Valores Booleanos</h1>";

    echo "<p>Os valores booleanos podem tanto ser usados diretamente como true ou false, quanto usando o conceito de <strong>truthy e falsy</strong></p>";

    echo "<section id='condSection'>
<h2>Em condicionais:</h2>";
    echo "<pre>if(\$name === true && \$age > 18 && \$logged === false)</pre>
</p>";
    echo "<p>É a mesma coisa que
<pre> if(\$name && \$age > 18 && !\$logged)</pre>
</p>
</section>";
    ?>
</body>

</html>