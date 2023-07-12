<?php

$dadosArray = ["Felipe", 'Trelawny', 78, true, false, 40.35];
$arrayPush = $dadosArray;
$arrayUnshift = $dadosArray;
$arrayNum = range(0, 21);

$pares = array_filter($arrayNum, function ($valor) {
    return $valor % 2 == 0;
});

$randIndex = array_rand($arrayNum, 4); 
            
foreach ($randIndex as $i => $indice) {
    $randNum[$i] = $arrayNum[$indice];
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <title>Arrays</title>
</head>

<body>
    <h1>Tipos de dados - Arrays</h1>
    <section>
        <h2>Criando índice</h2>
        <fieldset>
            <h3>Como criar índices que não sejam [0], [1]..</h3>
            <?php $arrayPersonalizado = ['name' => 'Felipe', 'age' => 20] ?>
            <p>$dadosArray = ['name' => 'Felipe', 'age' => 20]</p>
            <pre>Output: <?php var_dump($arrayPersonalizado) ?></pre>
            <p class="explicacao">Criei índices que podem armazenar vários nomes e idades em um array</p>
        </fieldset>

        <h2>Array multidimensional</h2>
        <fieldset>
            <h3>Como criar índices que não sejam [0], [1]..</h3>
            <?php $arrayMulti = [
                'name' => 'Felipe', 'docs' => [
                    'cpf' => 29443, 'rg' => 39857489
                ]
            ]
            ?>

            <p>$dadosArray = ['name' => 'Felipe', 'docs' => ['cpf' => 29443,'rg' => 39857489]]</p>
            <pre>Output: <?php var_dump($arrayMulti) ?></pre>
            <p class="explicacao">Criei um array dentro de outro array, tornando-o multidimensional</p>
        </fieldset>
    </section>
    <hr>
    <section>
        <header>
            <fieldset>
                <h2>Array padrão</h2>
                <pre><?php var_dump($dadosArray) ?></pre>
            </fieldset>
        </header>

        <h2>Funções</h2>

        <fieldset>
            <h3>Array Push</h3>
            <?php array_push($arrayPush, 'Último elemento') ?>
            <p>Input: array_push($dadosArray, 'Último elemento')</p>
            <pre>Output: <?php var_dump($arrayPush) ?></pre>
            <p class="explicacao">Adicionar um elemento no último index do Array</p>
        </fieldset>
        <fieldset>
            <h3>Array unshift</h3>
            <?php array_unshift($arrayUnshift, 'Primeiro elemento') ?>
            <p>Input: array_unshift($dadosArray, 'Primeiro elemento')</p>
            <pre>Output: <?php var_dump($arrayUnshift) ?></pre>
            <p class="explicacao">Adicionar um elemento no primeiro index do Array</p>
        </fieldset>
        <fieldset>
            <h3>Array Filter</h3>
            <?php array_unshift($arrayUnshift, 'Primeiro elemento') ?>
            <pre>$pares = array_filter($arrayNum, function ($valor) {
    return $valor % 2 == 0;
});</pre>
            <p>Output: <?php echo implode(", ", $pares); ?>
                </p>
            <p class="explicacao">Filtrei os números pares de um array que vai de 0 até 21 utilizando o array_filter e uma função de callback</p>
        </fieldset>

        <fieldset>
            <h3>Array Rand</h3>
            <pre>$randIndex = array_rand($arrayNum, 4);</pre>
            <p>Output: <?php echo implode(", ",$randNum); ?>
                </p>
            <p class="explicacao">Obter X valores com índices aleatórios (que no meu caso X = 4)</p>
        </fieldset>

        <fieldset>
            <h3>Shuffle</h3>
            <?php shuffle($arrayNum); ?>
            <pre>shuffle($arrayNum)</pre>
            <pre>Output: <?php print_r($arrayNum); ?> </pre>
            <p class="explicacao">Embaralhar uma array</p>
        </fieldset>
</body>

</html>