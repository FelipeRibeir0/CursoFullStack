<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title><?php echo $this->e($title)?></title>
</head>

<body>
    <div id="header">
        <?=$this->insert('partials/header')?>
    </div>
    <div class="container">
    <?=$this->section('content')?>
    </div>
    <script src="app.js"></script>
    <?=$this->section('scripts')?>
</body>
</html>