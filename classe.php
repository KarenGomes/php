<?php

    class Mensagem {
        public function obterMensagem(){
            return "Olá você";
        }
    }

    $m = new Mensagem();
    echo $m -> obterMensagem();

    class Soma{
        public $a, $b;
        public function somar($a, $b){
            return $a + $b;
        }    

        public function somarObjetos(){
            return $this -> a + $this -> b;
        }
    }
    
    $s = new Soma();
    $s -> a = 2;
    $s -> b = 3;

    echo "<br>Soma: ". $s -> somar(2, 3);

    echo "<br>Somar objetos: ".$s -> somarObjetos();
?>
