<?php

class Person
{

    public function getName()
    {
        return 'Felipe';
    }
}
$person = new Person;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <title>Mudando os tipos de dados</title>
</head>

<body>
    <h1>Converter dados</h1>
    <section>
        <fieldset id="stringBool">
            <h2>String to Boolean</h2>
            <p>Valor: <?php echo "Felipe" ?> </p>
            <p>Tipo inicial: <?php echo gettype("Felipe") ?></p>
            <p class="codigo"> Código: (boolean) "Felipe"</p>
            <p>Resultado: <?php var_dump((bool) "Felipe") ?></p>
            <p>Tipo Final: <?php echo gettype((bool) "Felipe") ?></p>
            <p class="explicacao">Por possuir um valor truthy, ela retorna um bool true</p>
        </fieldset>

        <fieldset id="stringBool">
            <h2>Empty string to Boolean</h2>
            <p>Valor: <?php echo "" ?> </p>
            <p>Tipo inicial: <?php echo gettype("") ?></p>
            <p class="codigo"> Código: (boolean) ""</p>
            <p>Resultado: <?php var_dump((bool) "") ?></p>
            <p>Tipo Final: <?php echo gettype((bool) "") ?></p>
            <p class="explicacao">Por possuir um valor falsy, ela retorna um bool false</p>
        </fieldset>

        <fieldset id="intBool">
            <h2>Int to Boolean</h2>
            <p>Valor: <?php echo 38 ?> </p>
            <p>Tipo inicial: <?php echo gettype(38) ?></p>
            <p class="codigo"> Código: (boolean) 38</p>
            <p>Resultado: <?php var_dump((bool) 38) ?></p>
            <p>Tipo Final: <?php echo gettype((bool) 38) ?></p>
            <p class="explicacao">Por possuir um valor truthy, ela retorna um bool true</p>
            <hr>
            <h2>0 to Boolean</h2>
            <p>Valor: <?php echo 0 ?> </p>
            <p>Tipo inicial: <?php echo gettype(0) ?></p>
            <p class="codigo"> Código: (boolean) 0</p>
            <p>Resultado: <?php var_dump((bool) 0) ?></p>
            <p>Tipo Final: <?php echo gettype((bool) 0) ?></p>
            <p class="explicacao">Por possuir um valor falsy, ela retorna um bool false</p>
        </fieldset>

        <fieldset>
            <div id="intString">
                <h2>Int to String</h2>
                <p>Valor: <?php echo 38 ?> </p>
                <p>Tipo inicial: <?php echo gettype(38) ?></p>
                <p class="codigo"> Código: (string) 38</p>
                <p>Resultado: <?php echo (string) 38 ?></p>
                <p>Tipo Final: <?php echo gettype((string) 38) ?></p>
                <p class="explicacao">Apesar de que o output é o mesmo, o tipo muda, podendo acrescentar letras na string</p>
            </div>

            <div id="doubleString">
                <h2>Double to String</h2>
                <p>Valor: <?php echo 38.53 ?> </p>
                <p>Tipo inicial: <?php echo gettype(38.53) ?></p>
                <p class="codigo"> Código: (string) 38.53</p>
                <p>Resultado: <?php echo (string) 38.53 ?></p>
                <p>Tipo Final: <?php echo gettype((string) 38.53) ?></p>
                <p class="explicacao">Apesar de que o output é o mesmo, o tipo muda, podendo acrescentar letras na string</p>
            </div>
        </fieldset>

        <fieldset>
            <div id="doubleInt">
                <h2>Double to Int</h2>
                <p>Valor: <?php echo 38.6 ?> </p>
                <p>Tipo inicial: <?php echo gettype(38.6) ?></p>
                <p class="codigo"> Código: (int) 38.6</p>
                <p>Resultado: <?php echo (int) 38.6 ?></p>
                <p>Tipo Final: <?php echo gettype((int) 38.6) ?></p>
                <p class="explicacao">Transforma o número decimal em um número inteiro</p>
            </div>

            <div id="intArray">
                <h2>Int to Array</h2>
                <p>Valor: <?php echo 38 ?> </p>
                <p>Tipo inicial: <?php echo gettype(38) ?></p>
                <p class="codigo"> Código: (array) 38</p>
                <pre>Resultado: <?php var_dump((array) 38) ?></pre>
                <p>Tipo Final: <?php echo gettype((array) 38) ?></p>
            </div>
        </fieldset>

        <fieldset id="arrayObject">
            <h2>Array to Object</h2>
            <pre>Valor: <?php var_dump(["Felipe", 20, "PHP"]) ?> </pre>
            <p>Tipo inicial: <?php echo gettype(["Felipe", 20, "PHP"]) ?></p>
            <p class="codigo"> Código: (object) ["Felipe",20,"PHP"]</p>
            <pre>Resultado: <?php var_dump((object) ["Felipe", 20, "PHP"]) ?></pre>
            <p>Tipo Final: <?php echo gettype((object) ["Felipe", 20, "PHP"]) ?></p>
        </fieldset>

        <fieldset id="objectArray">
            <h2>Object to Array</h2>
            <pre>Valor: <?php var_dump($person->getName()) ?> </pre>
            <p>Tipo inicial: <?php echo gettype($person) ?></p>
            <p class="codigo"> Código: (array) $person</p>
            <pre>Resultado: <?php var_dump((array) $person->getName()) ?></pre>
            <p>Tipo Final: <?php echo gettype((array) $person) ?></p>
        </fieldset>

        <fieldset id="arrayObject">
            <h2>Custom array to Object</h2>
            <pre>Valor: <?php var_dump(['nome' => "Felipe", 'idade' => 20]) ?> </pre>
            <p>Tipo inicial: <?php echo gettype(['nome' => "Felipe", 'idade' => 20]) ?></p>
            <p class="codigo"> Código: (object) ['nome'=> "Felipe",'idade'=>20]</p>
            <pre>Resultado: <?php var_dump((object) ['nome' => "Felipe", 'idade' => 20]['nome']) ?></pre>
            <p>Tipo Final: <?php echo gettype((object) ['nome' => "Felipe", 'idade' => 20]) ?></p>
            <p class="explicacao">Além de personalizar os index como 'nome' e 'idade', fiz com que o output só mostrasse o 'nome'</p>
        </fieldset>

    </section>
</body>

</html>