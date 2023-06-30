<?php 
print "<h1>Operadores de comparação</h1>";

echo "<p>Como exemplo, irei comparar os valores 20 e 35</p>";

$num1 = 20;
$num2 = "35";

$result = $num1 < $num2;
echo "<p>20 < 35 = ";
var_dump($result);
echo "<em>( 20 é <strong>menor</strong> do que 35 )</em> Resultado = "; var_dump($result);
echo "</p>";
$result = $num1 > $num2;
echo "<p>20 > 35 = "; var_dump($result);
echo "<em>( 20 é <strong>maior</strong> do que 35 )</em> Resultado = "; var_dump($result);
echo "</p>";

$result = $num1 <= $num2;
echo "<p>20 <= 35 = ";
var_dump($result);
echo "<em>( 20 é <strong>menor ou igual</strong> do que 35 )</em> Resultado = "; var_dump($result);
echo "</p>";

$result = $num1 >= $num2;
echo "<p>20 >= 35 = ";
var_dump($result);
echo "<em>( 20 é <strong>maior ou igual</strong> do que 35 )</em> Resultado = "; var_dump($result);
echo "</p>";

$result = $num1 == $num2;
echo "<p>20 == 35 = ";
var_dump($result);
echo "<em>( 20 é <strong>igual</strong> do que 35 )</em> Resultado = "; var_dump($result);
echo "</p>";

$result = $num1 != $num2;
echo "<p>20 != 35 = ";
var_dump($result);
echo "<em>( 20 é <strong>diferente</strong> do que 35 )</em> Resultado = "; var_dump($result);
echo "</p>";

$result = $num1 === $num2;
echo "<p>20 === 35 = ";
var_dump($result);
echo "<em>( 20 é <strong>igual ou possui o tipo igual</strong> do que 35 )</em> Resultado = "; var_dump($result); echo "</p>";
echo "O resultado é <strong>false</strong>, pois 20 é <strong>int</strong> e 35 é <strong>string</strong>";

$result = $num1 !== $num2;
echo "<p>20 !== 35 = ";
var_dump($result);
echo "<em>( 20 é <strong>diferente ou possui o tipo diferente</strong> do que 35 )</em> Resultado = "; var_dump($result);
echo "</p><hr>";

print "<h1>Operadores lógicos</h1>";

$true = true;
$false = false;

$result = $true && $false;

echo "<p>true && false = ";
var_dump($result);
echo "<em>( O operador <strong>&&</strong> verifica se ambos são true, por isto o resultado foi false, pois apenas 1 deles é true )</em></p>";

$result = $true || $false;
echo "<p>true || false = ";
var_dump($result);
echo "<em>( O operador <strong>||</strong> verifica se um deles é true, por isto o resultado foi true, pois possui 1 true )</em></p>";

echo "<p>!true = ";
var_dump(!$true);
echo "<em>( O operador <strong>!</strong> inverte o valor booleano, transformando o true em um false)</em></p>"
?>