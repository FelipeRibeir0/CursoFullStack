<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="icon" type="image/svg+xml" sizes="any" href="https://yt3.googleusercontent.com/PwKEk2HVtuL9W8KLYryUVmAO-gZLP1Y5vsgXA4JVrVWaqpxrsSA7QlqxfUtzj9njcNO7kGzAl-I=s900-c-k-c0x00ffffff-no-rj">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <?= $this->section('css') ?>
  <title><?php echo $this->e($title) ?></title>
</head>

<body>
    <?= $this->insert('partials/header') ?>
  <div class="container">
    <?= $this->section('content') ?>
  </div>
  <?= $this->section('scripts') ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>