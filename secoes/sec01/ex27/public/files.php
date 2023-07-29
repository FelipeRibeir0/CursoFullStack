<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <link rel="stylesheet" href="style.css">
    <title>Arquivo recebido!</title>
</head>

<body>
    <?php

    if (str_starts_with($_FILES['imagemDoUsuario']['type'], "image/")) {
        $arquivoTemporario = $_FILES['imagemDoUsuario']['tmp_name'];
        echo "<p>O arquivo é uma imagem.</p>";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo '<pre>';
            var_dump($_FILES);
            echo '</pre>';

            echo '<h2>Imagem carregada:</h2>';
            echo '<img src="data:' . $arquivoTemporario . ';base64,' . base64_encode(file_get_contents($arquivoTemporario)) . '">';
        }
    } else {
        echo "<strong>O arquivo não é uma imagem.</strong>";
        echo "<p>Volte para a tela inicial e envie o arquivo correto.</p>";
    }
    ?>
    <a href="index.php">Voltar</a>
</body>

</html>