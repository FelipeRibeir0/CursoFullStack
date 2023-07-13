<?php
$nums = range(0, 10);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <title>Continue e Break</title>
</head>

<body>
    <h1>Continue e Break</h1>
    <section>
        <fieldset>
            <h2>Continue</h2>
            <pre>if ($key == 3) {
                continue;
                }</pre>
            <pre>Output: 
                <?php foreach ($nums as $key => $num) {
                    if ($key == 3) {
                        continue;
                    }
                    echo $num;
                    if ($key < count($nums)-1){
                        echo ", ";
                    }
                } ?></pre>
            <p class="explicacao">Usei o Continue para que, cumprindo a condição de que a $key seja 3, ele pule o 3 e continue o foreach</p>
        </fieldset>

        <fieldset>
            <h2>Break</h2>
            <pre>if ($key > 3) {
                break;
                }</pre>
            <pre>Output:
                <?php foreach ($nums as $key => $num) {
                    if ($key > 3) {
                        break;
                    }
                    echo $num;
                    if ($key < 3){
                        echo ", ";
                    }
                } ?></pre>
            <p class="explicacao">Usei o Break para que, cumprindo a condição de que a $key seja maior que 3, ele pare o foreach</p>
        </fieldset>
</body>

</html>