<?php

include './variaveis.php';
require './function.php';

echo "<h1>Tipagem das variáveis</h1>";

#Strings

echo $string . mostrarTipo($string);

#Numbers

//Int

echo "<br><br>A variável com o valor " . $int . " é do tipo " . mostrarTipo($int);

/*
Double

Obs: Aqui mostrará que é uma double, mas pode ser tanto double como float
*/

echo "<br><br>A variável com o valor " . $double . " é do tipo " . mostrarTipo($double);

#Booleans

echo "<br><br>A variável com o valor " . $bool . " é do tipo " . mostrarTipo($bool);

echo "<hr>
<h2><em> Que loucura, 1 é int e também é boolean!</em></h2>
<br>
Isto acontece porque o <strong>true</strong> do boolean é representado visualmente pelo número 1 no PHP
<hr>";

#Arrays

echo "A variável com o valor <pre>";
print_r($array);
echo "</pre> é do tipo " . mostrarTipo($array);

echo "<br><br>
Neste array,
temos um ". mostrarTipo($array[0]) .
", temos um ". mostrarTipo($array[1]) .
" e temos um ". mostrarTipo($array[2]) .
"<br> O boolean que está no index [2] é um false, que é representado por um valor vazio";

#Objects

echo "<br><br>
A class Person que criei é do tipo " .mostrarTipo(new Person);

#Null

echo "<br><br>
A variável com o valor " . $null . " é do tipo " . mostrarTipo($null).
"<br>
Da mesma forma que o false, o valor null também é representado pelo vazio em PHP
<hr>";