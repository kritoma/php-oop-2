<?php
    require_once __DIR__ . "/../product.php";

    class Kennel extends Product {
        public $kennelAnimals;

        public function __construct($_name, $_price, $_kennelAnimals);
        {
            parent::__construct($_name, $_price);
            $this->kennelAnimals = $_kennelAnimals;
        }
    }

?>