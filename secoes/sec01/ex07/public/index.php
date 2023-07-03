<?php

print "<h1>Operadores condicionais</h1>";

print "<h2>If e Else</h2>";

if (80 > 70) {
    echo "80 é maior que 70";
} else {
    echo "80 é menor que 70";
}

echo "<h3>If com Return</h3>";

if (79 > 80) {
    echo "79 é maior que 80";
    return;
}
echo "79 é menor que 80";

print "<h3>Operadores ternários</h3>";

echo (80 < 100) ? "100 é maior que 80<hr>" : "80 não é maior que 100<hr>";

print "<h2>Switch</h2>";

$number = random_int(1, 5);

switch ($number) {
    case 1:
    case 2:
    case 3:
        echo "O número sorteado foi o ".$number;
        break;
    default:
    echo "O número sorteado não foi nem 1, nem 2 e muito menos 3!! O número que saiu foi o " . $number;
        break;
}
?>