<?php
include_once("functions.php");
/*
4.Write a PHP function to check if a string contains only letters and whitespace.
 */


// PHP program to check given string is 
// all characters -alphabetic

$string = "PHPLearning hello";
$strings = array(
    // 'GFG',
    // 'GFG space',
    '@@##--/',
    '789543',
    '\n'
);

if (ctype_alpha($string) && $strings !== false) {
    echo "Yes\n";
} else {
    echo "No\n";
}
