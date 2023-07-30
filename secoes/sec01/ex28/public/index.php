<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <link rel="stylesheet" href="style.css">
    <title>Sanitizadores e Validates</title>
</head>

<body>
    <div id="container">
        <h1>SANITIZE E VALIDATES</h1>
        <p>Funções que tratam os dados inseridos pelo usuário</p>
        <form action="validate.php" method="post" autocomplete="off">
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Digite o seu nome" required>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Digite o seu email" required>
            <label for="int">Número</label>
            <input type="number" name="int" placeholder="Digite um número inteiro" required>
            <label for="float">Número quebrado</label>
            <input type="number" name="float" step="any" placeholder="Digite um número quebrado" required>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>