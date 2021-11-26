<?php

    // Crea una classe Employee defineix com a atributs el seu nom i sou.
    // Definir un mètode initialize que rebi com a paràmetres el nom i sou.
    // Plantejar un segon mètode print que imprimeixi el nom i un missatge
    // si ha o no pagar impostos (si el sou supera 6000 paga impostos).

    class Employee {

        public $name;
        public $wage;

        public function initialize($name, $wage) {
            $this -> name = $name;
            $this -> wage = $wage;
        }

        public function print() {
            if ($this -> wage > 6000) {
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