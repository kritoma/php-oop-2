<?php 
    require_once __DIR__ . "/../product.php";

    class Food extends Product {
        public $type;
        public $expireDate;

        public function __construct($_name, $_price, $_type)
        {
            parent::__construct($_name, $_price);

            $this->type = $_type;
        }
    }


?>