<?php 

function strongDump($param)
{
    echo "<strong>";
    var_dump(!!$param);
    echo "</strong>";
}

function formatParagraph($text, $vardump)
{
    echo "<p>";
    print $text;
    strongDump($vardump);
    echo "</p>";
}

// Fiz algumas funções para evitar a repetição desnecessárias no index.php
?>