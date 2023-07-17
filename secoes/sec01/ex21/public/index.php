<?php
$nome = 'Felipe';
$valorNull = null;
$valoresArray =
    [
        'nome' => 'Felipe',
        'idade' => 20
    ]
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <link rel="stylesheet" href="style.css">
    <title>Isset</title>
</head>
<body>
    <section>
        <h1>Isset function</h1>
        <article id="issetVar">
            <h2>Verificando se uma variável existe</h2>
            <fieldset>
                <p>Variável que vou verificar: $nome</p>
                <p>Valor: <?php echo $nome ?></p>
                <p>Código: isset($nome) </p>
                <p>Resultado: <?php echo isset($nome); ?></p>
                <span>O resultado foi 1 porque representa o bool <strong>true</strong>, a variável $nome tem valor setado</span>
            </fieldset>

            <fieldset>
                <p>Variável que vou verificar: $valorNull</p>
                <p>Valor: <?php var_dump($valorNull) ?></p>
                <p>Código: var_dump(isset($valorNull)) </p>
                <p>Resultado: <?php echo var_dump(isset($valorNull)); ?></p>
                <span>O resultado foi 0 (
                    <strong>ou bool(false)</strong>, devido a função var_dump)
                    porque NULL possui um valor booleano <strong>false</strong>
                </span>
            </fieldset>
        </article>

        <article id="issetArray">
            <h2>Verificando se um array existe</h2>
            <fieldset>
                <p>Variável que vou verificar: $valoresArray</p>
                <pre>Array: <?php var_dump($valoresArray) ?></pre>
                <p>Código: isset($valoresArray) </p>
                <p>Resultado: <?php echo isset($valoresArray); ?></p>
                <span>O resultado foi 1 porque representa o bool <strong>true</strong>, o Array existe</span>
            </fieldset>

            <fieldset>
                <p><strong>Índice</strong> que vou verificar: telefone</p>
                <pre>Array: <?php var_dump($valoresArray) ?></pre>
                <p>Código: var_dump(isset($valoresArray)) </p>
                <p>Resultado: <?php echo var_dump(isset($valoresArray['telefone'])); ?></p>
                <span>O resultado foi 0 (
                    <strong>ou bool(false)</strong>, devido a função var_dump)
                    porque o índice ['telefone'] não existe no array $valoresArray
                </span>
            </fieldset>

            <fieldset>
                <p><strong>Índice</strong> que vou verificar: nome</p>
                <pre>Array: <?php var_dump($valoresArray) ?></pre>
                <p>Código: var_dump(isset($valoresArray)) </p>
                <p>Resultado: <?php echo var_dump(isset($valoresArray['nome'])); ?></p>
                <span>O resultado foi 1 (
                    <strong>ou bool(true)</strong>, devido a função var_dump)
                    porque o índice ['nome'] existe no array $valoresArray
                </span>
            </fieldset>
        </article>
    </section>
</body>

</html>