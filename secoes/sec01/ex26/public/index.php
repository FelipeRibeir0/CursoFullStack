<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <link rel="stylesheet" href="style.css">
    <title>POST e GET</title>
</head>
<body>
    <h1>Forms</h1>
    <div>
        <form action="post.php" method="post" autocomplete="off">
            <h2>POST</h2>
            <label for="name">Nome</label>
            <input type="text" name="name" placeholder="seu nome" required>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="seu email" required>
            <button type="submit">Enviar</button>
            <button type="reset">Resetar</button>
        </form>
        <form action="get.php" method="get" autocomplete="off">
            <h2>GET</h2>
            <label for="name">Nome</label>
            <input type="text" name="name" placeholder="seu nome" required>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="seu email" required>
            <button type="submit">Enviar</button>
            <button type="reset">Resetar</button>
        </form>
    </div>
</body>
</html>
