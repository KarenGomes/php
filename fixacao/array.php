<?php
    // $estoque = array("martelo","un", 1);

    // echo $estoque[0]."<br>";
    // echo $estoque[1]."<br>";
    // echo $estoque[2]."<br>";

    $estoque = array();

    array_push($estoque, "martelo");
    array_push($estoque,"un");
    array_push($estoque,1);

    echo $estoque[0]."<br>";
    echo $estoque[1]."<br>";
    echo $estoque[2]."<br>";

    print_r($estoque);

    echo "quantidade de elementos ".count($estoque)."<br>";

    if(in_array("martelo", $estoque)) echo "tem martelo <br>"; else echo "Não tem martelo <br>";

    echo "mart: ". array_search("mart", $estoque)."<br>";
    echo "martelo: ". array_search("martelo", $estoque)."<br>";
?>