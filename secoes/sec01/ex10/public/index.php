<?php

$numExemplos = [-10.66, -2, 5, 2, 4.55, 4.99, 4.01, 4.50];
$initialNum = floatval(rand(100, 900000) . '.' . rand(0, 99));

$num = number_format($initialNum, 2, ',', '.');

function getRandomFormatedValue($num)
{
    if (str_ends_with(".0", $num)) {
        return str_replace(',', '.', $num);
    }
    return str_replace(',00', '', $num);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <title>Numbers</title>
</head>

<body>
    <h1>Tipos de dados - Numbers</h1>
    <section>
        <h2>Funções</h2>
        <fieldset>
            <h3>Ceil</h3>
            <p>Input: <?php echo $numExemplos[0] . " e " . $numExemplos[4] ?></p>
            <p>Output: <?php echo ceil($numExemplos[0]) . " e " . ceil($numExemplos[4]) ?></p>
            <p class="explicacao">Arredonda o valor para cima</p>
        </fieldset>

        <fieldset>
            <h3>Floor</h3>
            <p>Input: <?php echo $numExemplos[0] . " e " . $numExemplos[4] ?></p>
            <p>Output: <?php echo floor($numExemplos[0]) . " e " . floor($numExemplos[4]) ?></p>
            <p class="explicacao">Arredonda o valor para cima</p>
        </fieldset>

        <fieldset>
            <h3>Round</h3>
            <p>Input: <?php echo $numExemplos[0] . " e " . $numExemplos[4] ?></p>
            <p>Output: <?php echo round($numExemplos[0]) . " e " . round($numExemplos[4]) ?></p>
            <p class="explicacao">Arredonda o valor para o integer mais próximo</p>
        </fieldset>

        <fieldset>
            <h3>Intval</h3>
            <p>Input: <?php echo $numExemplos[5] . ", false (valor bool) e " . $numExemplos[0] ?></p>
            <p>Output: <?php echo intval($numExemplos[5]) . ", " . intval(false) . " e " . intval($numExemplos[0]) ?></p>
            <p class="explicacao">Obter um valor integer</p>
        </fieldset>

        <fieldset>
            <h3>Rand</h3>
            <p>Input: rand($min, $max)</p>
            <p>Output: <?php echo rand(0, 10) ?></p>
            <p class="explicacao">Obter um valor aleatório que esteja entre o min e o max, que nesse caso foi 0 e 10</p>
        </fieldset>

        <fieldset>
            <h3>Number Format</h3>
            <p>Input: number_format(1234567890, 2, ',', '.')</p>
            <p>Output: <?php echo number_format(1234567890, 2, ',', '.') ?></p>
            <p class="explicacao">Formatar um número de acordo com seus parâmetros</p>
            <p class="explicacao">number_format($num, $decimais, $separador_decimal, $separadorMilhar)</p>
        </fieldset>
        <hr>
        <!-- Uma tarefa que eu mesmo me propus a fazer, para testar as funções que estou aprendendo -->
        <h2>Exercício</h2>
        <fieldset id="exerc">
            <h3>Formatar dinheiro</h3>
            <p>Sem a função: <?php echo $initialNum ?></p>
            <span>Com a função:</span>
            <span> R$ <?php echo getRandomFormatedValue($num) ?></span>
            <p class="explicacao">Meu objetivo foi criar uma função que caso o número não possua centavos, apenas o valor inteiro é mostrado</p>
            
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
            </svg>
        </fieldset>

        <fieldset id="devDetails">
            <h2>Detalhes</h2>
            <p class="explicacao">Como é um pouco difícil obter um valor sem centavos, aqui está um exemplo </p>
            <h3>Valor sem centavos:</h3>
            <p>Sem função: 193495.00</p>
            <p>Com função: <?php echo getRandomFormatedValue(193495.00) ?></p>
            <hr>
            <h3>Valor com centavos:</h3>
            <p>Sem função: 193495.78</p>
            <p>Com função: <?php echo getRandomFormatedValue(number_format(193495.78, 2, ',', '.')) ?> </p>

            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>
            </svg>
        </fieldset>
    </section>
    <script src="app.js"></script>
</body>

</html>