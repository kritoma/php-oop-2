<?php
require_once __DIR__ . '/classes/user.php';
require_once __DIR__ . '/classes/creditCard.php';
require_once __DIR__ . '/classes/userClasses/registeredUser.php';
require_once __DIR__ . '/classes/productClasses/food.php';



$food = new Food("croccantini", 10, "cani");

$user = new User("kristian", "Toma");

try {
    $visa = new creditCard("2000 2000 2000 2000", "2022-03-10", 123, "visa");
    $user->creditCard = $visa;
} catch (Exception $e) {
    echo $e->getMessage();
}

var_dump($user);

?>