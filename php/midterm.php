<?php
$fruits = ["apple" => "$1.00", "orange" => "$2.50", "banana" => "$5.00"];

foreach ($fruits as $key => $value) {
    $price = floatval(explode("$", $value)[1]);
    if ($price > 3.00) {
        echo "The price of the $key is too much, it is " . $price . "<br>";
    } else {
        echo "I will buy ten $key, and I will pay 10x$value. <br>";
    }
}
