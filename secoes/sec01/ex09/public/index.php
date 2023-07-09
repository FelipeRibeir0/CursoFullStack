<?php 

$nome = "felipe";
$idade = "20";
$textoExemplo = "Contar o tamanho de uma string: <strong>strlen()</strong>";
$replace = "Substituir partes ". substr($textoExemplo, 17, 13);
$rtrim = "Uma string cheia de espaço no final                              ";
$ltrim = "                                                                                                                                                 Uma string cheia de espaço no começo";
$trim =  "                                                                                                                                                 Uma string cheia de espaço                                                                                                          ";
$upperLower = "EstA StrInG FicaRá X";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <title>Strings</title>
</head>
<body>
<section id="aspasSimples">
<h1>Tipos de dados - Strings</h1>
<h2>Aspas simples</h2>
<fieldset>
<p><?php echo 'Nome: $nome' ?> </p>
<p><?php echo 'Idade: $idade' ?> </p>
<p>Caso tente dar print em uma variável dentro de aspas simples, será lido somente o nome da variável, e não o seu valor. </p>
</fieldset>
</section>

<section id="aspasDuplas">
<h2>Aspas duplas</h2>
<fieldset>
<p><?php echo "Nome: $nome" ?> </p>
<p><?php echo "Idade: $idade" ?> </p>
<p>Caso dê print em uma variável dentro de aspas duplas, seu valor será lido. </p>
</fieldset>
</section>

<section id="function">
<h2>Funções</h2>
<fieldset>
 <p><?php echo $textoExemplo?></p>
 <p>O texto acima possui: <?php echo strlen($textoExemplo) - 17 ?> caracteres </p>
<!-- O - 17 é porque o strlen() também está contando com o <strong> que coloquei na string -->
<p>Recortar <?php echo substr($textoExemplo, 20, 12) ?> <strong>substr()</strong></p>
</fieldset>

<fieldset>
    <p>Verificar se há alguma letra/palavra/frase dentro <?php echo substr($textoExemplo, 17, 14) ?> <strong>str_contains()</strong></p>
    <p>Exemplo: Vou verificar se têm a palavra 'string' dentro da variável que foi usada no strlen()</p>
    <p>Output: <?php var_dump(str_contains($textoExemplo, "string")) ?> </p>
</fieldset>

<fieldset>
    <p>Substituir partes <?php echo substr($textoExemplo, 17, 14)?> <strong>str_replace()</strong></p>
    <p>Output: <?php echo str_replace("Substituir","<strong>Mudar</strong>",$replace)?></p>
</fieldset>

<fieldset>
<p>Retirar os espaços do final <?php echo substr($textoExemplo, 17, 14) ?> <strong>rtrim()</strong></p>
<p>Caracteres do rtrim: <?php echo strlen($rtrim)?></p>
<p>Output: <?php echo rtrim($rtrim) ?> </p>
</fieldset>

<fieldset>
<p>Retirar os espaços do começo <?php echo substr($textoExemplo, 17, 14) ?> <strong>ltrim()</strong></p>
<p>Caracteres do ltrim: <?php echo strlen($ltrim)?></p>
<p>Output: <?php echo ltrim($ltrim) ?> </p>
</fieldset>

<fieldset>
<p>Retirar os espaços do começo e do final <?php echo substr($textoExemplo, 17, 14) ?> <strong>trim()</strong></p>
<p>Caracteres do trim: <?php echo strlen($trim)?></p>
<p>Output: <?php echo trim($trim) ?> </p>
</fieldset>

<fieldset>
<p>Deixar <?php echo substr($textoExemplo, 20, 10) ?> maiúscula: <strong>mb_strtoupper()</strong></p>
<p>Input: <?php echo str_replace("X","<strong>maiúscula</strong>",$upperLower)?></p>
<p>Output: <?php echo mb_strtoupper(str_replace("X","<strong>maiúscula</strong>",$upperLower),'UTF-8')?></p>
</fieldset>

<fieldset>
<p>Deixar <?php echo substr($textoExemplo, 20, 10) ?> minúscula: <strong>mb_strtolower()</strong></p>
<p>Input: <?php echo str_replace("X","<strong>minúscula</strong>",$upperLower)?></p>
<p>Output: <?php echo mb_strtolower(str_replace("X","<strong>MINÚSCULA</strong>",$upperLower),'UTF-8')?></p>
</fieldset>

<fieldset>
<p>Deixar apenas a primeira letra em maiúsculo: <strong>ucfirst()</strong></p>
<p>Input: <?php echo $nome?></p>
<p>Output: <?php echo ucfirst($nome)?></p>
</fieldset>

<fieldset>
<p>Deixar a primeira letra em maiúsculo de todas palavras: <strong>ucwords()</strong></p>
<p>Input: <?php echo mb_strtolower(substr($textoExemplo, 0, 30),'UTF-8')?></p>
<p>Output: <?php echo ucwords(mb_strtolower(substr($textoExemplo, 0, 30),'UTF-8'))?></p>
</fieldset>
</section>
</body>
</html>