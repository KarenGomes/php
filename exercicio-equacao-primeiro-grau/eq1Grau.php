<?php
        /*
    Pelo paradigma estruturado:
    $a = $_GET["a"];
    $b = $_GET["b"];
    $x = -$b / $a;
    echo "Raiz: " . $x;
    */

    //pelo paradigma OO

    include_once "classes.php";

    $eq1 = new EQ1Grau();

    $eq1 -> setA($_GET["a"]);
    $eq1 -> setB($_GET["b"]);

    $pag = "";

    $pag .= "<html>";
    $pag .= "<head><title>Eq1Grau</title></head>";
    $pag .= "<body>";
    $pag .= "<h2>Raiz: {$eq1->raiz()} </h2>";
    $pag .= "</body>";
    $pag .= "</html>";

    echo $pag;

?>