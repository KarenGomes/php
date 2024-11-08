<?php

try {
    $con = new PDO('mysql:host=localhost;dbname=ppw', 'root', '');
    if($con)
        echo "conectou <br>";

} catch (PDOException $e) {
    echo "Erro ao conectar. <br>";
    echo "Mensagem de erro: <strong>{$e->getMessage()}</strong>";
    die();
} finally{
    echo "conexão finalizada <br>";
    $con = null;
}

?>