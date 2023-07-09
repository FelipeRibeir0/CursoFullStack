<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <title>Falsy e Truthy</title>
</head>

<body>
    <?php
    include "function.php";

    /* Falsy = [
Null
0
String vazia
Array vazia
]

Truthy = [
    Integer que não seja 0
    Float/Double que não seja 0.0
    Strings
    Arrays
] */

    print "<h1>Falsy e Truthy</h1><hr>";
    echo "<h2>Falsy</h2>";

    formatParagraph("Um valor null é igual a ", null);

    formatParagraph("Um int 0 é igual a ", 0);

    formatParagraph("Uma string vazia é igual a ", "");

    formatParagraph("Um array vazio é igual a ", []);

    formatParagraph("Um valor truthy, como 1 com um <strong>!</strong> na frente é igual a ", !1);
    echo "pois o ! inverte o valor false para true</p><hr>";

    print "<h2>Truthy</h2>";

    formatParagraph("Uma string como 'essa' é igual a ", 'essa');

    formatParagraph("Um integer 1 é igual a ", 1);

    formatParagraph("Um Float como 2.5 é igual a ", 2.5);

    formatParagraph("Uma array com ['Valor dentro'] é igual a ", ['Valor dentro']);

    formatParagraph("Uma bool false com ! na frente é igual a ", !false);

    ?>
</body>

</html>