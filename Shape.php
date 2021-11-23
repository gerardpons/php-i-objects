<?php

    class Shape {

        public $width;
        public $height;

        public function __construct($width, $height) {
            $this -> width = $width;
            $this -> height = $height;
        }
            
    }

    class Rectangle extends Shape {

        public function area() {
            return $this->width * $this->height;
        }

    }

    class Triangle extends Shape {

        public function area() {
            return $this->width * $this->height;
        }

    }

    $rectangle1 = new Rectangle(100, 100);
    echo $rectangle1 -> area();

    echo '<br>';

    $triangle1 = new Triangle(300, 300);
    echo $triangle1 -> area();

?>