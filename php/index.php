<?php
// variables
$name = "Alice";
$age = 20;

// arrays
$winners = array();
$winners = array("asd", "qwe", "zxc");
$numbers = array(15, 25, 35);

// associative arrays
$fruits = array("apple" => 1.7, "orange" => 2.0, "banana" => 1.5);

echo "My name is $name " . "and" . " I am $age years old. <br>";
echo "\"escape char\"";

echo "<br>";
echo sizeof($winners) . "<br>";

echo "1- " . $winners[0] . "<br>";
echo "2- " . $winners[1] . "<br>";
echo "3- " . $winners[2] . "<br>";

unset($winners[0]);

// echo "after unset: 1- " . $winners[0] . "<br>"; // winners[0] is undefined.

echo "apple: " . $fruits["apple"] . "<br>";
echo "orange: " . $fruits["orange"] . "<br>";
unset($fruits["orange"]); // orange is undefined

// if else
if ($fruits['apple'] > $fruits['banana']) {
    echo "apple is more expensive than banana" . "<br>";
} else {
    echo "banana is more expensive than apple" . "<br>";
}

// for loop
for ($i = 0; $i < sizeof($numbers); $i++) {
    echo "number $i: " . $numbers[$i] . "<br>";
}

// foreach loop
foreach ($fruits as $key => $value) {
    echo "$key: $value <br>";
}
