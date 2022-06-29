<?php
    class User {
        public $name;
        public $surname;
        public $creditCard;
        public $discount = 0;

        public function __construct($_name, $_surname,)
        {
            $this->name = $_name;
            $this->surname = $_surname;
            
        }

    }
?>