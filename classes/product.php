<?php 
    class Product {
        public $name;
        public $price;
        public $quantity;
        public $animalType;

        public function __construct($_name,$_price)
        {
            $this->name = $_name;
            $this->price = $_price;
        }

    }

?>