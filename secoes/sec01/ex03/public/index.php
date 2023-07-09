<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <title>Constantes</title>
    <style>
        body
        {
            overflow-x: hidden;
        }
    </style>
</head>
<body>
<?php 
define('DICA','Se você reparar, dentro do array das const definidas, as const que o desenvolvedor define estão dentro do array ["user"]');
define('NAME','Felipe');
define("PARABENS",'Nossa, você leu tudo neste array mesmo!');+
define("JEITOFACIL",'Você leu tudo, ou deu CTRL+F na palavra "user"?');

if (defined('NAME'))
{
    echo 'A Const NAME foi definida com o valor <em>'. NAME.'</em><br>';
    echo DICA;
}?>

<h1>Const já definidas</h1>
<p>O PHP possui Consts definidas, a seguir temos um array mostrando-as:</p>

<?php 
$cons = get_defined_constants(true);
?>

<pre>
    <?php 
    var_dump($cons);
    ?>
</pre>
</body>
</html>