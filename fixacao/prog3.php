<?php
    $nome = $_GET["nome"];
    $anoNasc = $_GET["nasc"];
    $idade = 2024 - $anoNasc;

    // echo "$nome tem $idade anos de idade";
    echo $nome . " tem " . $idade ." anos de idade";

?>