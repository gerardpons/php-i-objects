<?php

    class Employee {

        public $name;
        public $wage;

        public function initialize($name, $wage) {
            $this -> name = $name;
            $this -> wage = $wage;
        }

        public function print() {
            if ($this -> wage > 1000) {
                echo $this -> name . ' ha de pagar impostos';
            } else {
                echo $this -> name . ' no ha de pagar impostos';
            }
        }

    }

    $gerard = new Employee();
    $gerard->initialize('Gerard', 1000);
    $gerard->print();

?>