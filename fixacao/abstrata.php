<?php 

    abstract class ClasseA{
        public $texto;

        public function mensagem1(){
            return "Classe A - mensagem 1: <strong> $this->texto </strong><br>";
        }

        public function mensagem2(){
            return "Classe A - mensagem 2: <strong>$this->texto</strong>";
        }
    }

    class ClasseB extends ClasseA{
        public $texto;
        public function mensagem3(){
            return "Classe B - mensagem 3: <strong>$this->texto</strong>";
        }
    }

    class ClasseC extends ClasseA{
        public $texto;

        public function mensagem2(){
            return "Classe C - mensagem 2: <strong>$this->texto</strong>";
        }

        public function mensagem3(){
            return "Classe C - mensagem 3: <strong>$this->texto</strong>";
        }
    }


    $b = new ClasseB();
    $b->texto = "objeto b";
    echo $b->mensagem1();
    echo $b->mensagem2();
    echo $b->mensagem3();

    echo "<br><br>";

    $c = new ClasseC(); 
    $c-> texto = "objeto c";
    echo $c->mensagem1();
    echo $c-> mensagem2();
    echo $c->mensagem3();
?>