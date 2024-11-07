<?php
    $estoque = array();

    array_push ($estoque, "martelo");
    array_push ($estoque, "un");
    array_push ($estoque, 1);
    
    for($i=0; $i<count($estoque); $i++)
    echo $estoque[$i] . "<br />";

    foreach($estoque as $i => $v)
        echo $estoque[$i]."<br>";
        echo "...................<br>";

    foreach($estoque as $i => $v)
        echo $v."<br>";

?>