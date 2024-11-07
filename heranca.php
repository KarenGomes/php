<?php
    class ClasseA {
        public $num;

        function dobro(){
            return 2 * $this->num;
        }

    }

    class ClasseB extends ClasseA {
        function triplo(){
            return $this-> num * 3;
        }
    }

    $objetoB = new ClasseB();
    $objetoB->num = 2;

    echo "O triplo de $objetoB->num é {$objetoB->triplo()}  <br><br>"

?>