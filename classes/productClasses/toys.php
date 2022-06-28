<?php
    require_once __DIR__ ."/../product.php";

    class Toys extends Product {
        public $type;
        public $size;

        public function __construct($_name, $_price, $_type)
        {
            parent::__construct($_name,$_price);
            $this->type = $_type;
        }
    }

?>
