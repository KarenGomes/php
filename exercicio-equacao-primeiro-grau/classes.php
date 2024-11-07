<?php 

    class EQ1Grau{
        private $a, $b;
        function setA( $a ){
            $this -> a = $a;
        }

        function getA(){
            return $this -> a;
        }

        function setB( $b ){
            $this -> b = $b;
        }

        function getB(){
            return $this -> b;
        }

        function raiz(){
            return - $this -> b / $this -> a;
        }


    }

?>