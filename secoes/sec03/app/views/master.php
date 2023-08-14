<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title><?php echo $title ?></title>
</head>

<body>
    <div id="header">
        <?php require 'partials/header.php'; ?>
    </div>
    <div class="container">
        <?php require $view ?>
    </div>
</body>
</html>