<?php
class creditCard {
    public $number;
    public $expireDate;
    public $cvc;
    public $brand;

    public function __construct($_number, $_expireDate, $_cvc, $_brand)
    {
        $this->number = $_number;
        $this->validition($_expireDate);
        $this->cvc = $_cvc;
        $this->brand = $_brand;
    }

    public function validition($_expireDate) {
        $today = date('Y-m-d');
        if ($_expireDate < $today) {
            throw new Exception('La carta non è valida');
        }

        $this->expireDate = $_expireDate;
        
    }
}

?>