<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <link rel="stylesheet" href="index.css">
    <title>FILES</title>
</head>
<body>
    <h1>Formulário</h1>
    <p>Nesse formulário eu usarei o $_FILES para manipular a imagem enviada</p>
    <form action="files.php" method="post" enctype="multipart/form-data">
        <label for="imagemDoUsuario">Arquivo</label>
        <input type="file" name="imagemDoUsuario" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>