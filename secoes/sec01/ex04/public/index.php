<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <title>Operadores</title>
</head>
<body>
<?php 

print "<h1>Operadores de atribuição</h1>";

echo "<p>Concatenação: .=</p>";

print "<h2>Atribuindo Strings</h2>";
//Strings

$name = "Felipe";

$name .= " Ribeiro";

echo "<p>".$name."</p>
<hr>";

//Numbers

print "<h1>Operadores aritméticos</h1>";

echo "<p>Adição: +=</p>";
echo "<p>Subtração: -=</p>";
echo "<p>Multiplicação: *=</p>";
echo "<p>Divisão: /=</p>";
echo "<p>Resto de divisão: %=</p>";
echo "<p>Exponenciação: **=</p>";

print "<h2>Atribuindo números</h2>";

$add = 40;

$add += 20;

echo "<p> 40 + 20 = ".$add."</p>";

$sub = $add;

$sub -= 10;

echo "<p> 60 - 10 = ".$sub."</p>";

$multi = $sub;
$multi *= 2;

echo "<p> 50 x 2 = ".$multi."</p>";

$div = $multi;
$div /= 4;

echo "<p> 100 / 4 = ".$div."</p>";

$restoDiv = $div;

$restoDiv %= 7;

echo "<p> 25 % 7 = ".$restoDiv."</p>";

$expo = $restoDiv;

$expo **= 2;

echo "<p> 4² = ".$expo."</p>
<hr>";

print "<h1>Operadores de incremento e decremento</h1>";

echo "<p>Adição: ++</p>";
echo "<p>Subtração: --</p>"
?>
</body>
</html>