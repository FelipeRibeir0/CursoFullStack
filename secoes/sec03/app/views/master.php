<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://yt3.googleusercontent.com/PwKEk2HVtuL9W8KLYryUVmAO-gZLP1Y5vsgXA4JVrVWaqpxrsSA7QlqxfUtzj9njcNO7kGzAl-I=s900-c-k-c0x00ffffff-no-rj">
    <title><?php echo $this->e($title) ?></title>
</head>

<body>
    <div id="header">
        <?= $this->insert('partials/header') ?>
    </div>
    <div class="container">
        <?= $this->section('content') ?>
    </div>
    <script src="app.js"></script>
    <?= $this->section('scripts') ?>
</body>

</html>