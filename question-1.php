<?php
include_once("functions.php");
/*
1.Write a PHP function to sort an array of strings by their length, in ascending order. 
(Hint: You can use the usort() function to define a custom sorting function.)
*/

$arrayString = explode(" ", "Write a PHP function to sort an array of strings by their length, in ascending order.");
usort($arrayString, "ascendingOrderByLength");

foreach ($arrayString as $key => $value) {
    echo "$key: $value \n";
}
