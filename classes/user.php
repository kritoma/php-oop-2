<?php
    class User {
        public $name;
        public $surname;
        public $creditCard;
        public $discount = 0;

        public function __construct($name, $surname, $creditCard)
        {
            $this->name = $_name;
            $this->surname = $_surname;
            $this->creditCard = $_creditCard;
        }

    }
?>