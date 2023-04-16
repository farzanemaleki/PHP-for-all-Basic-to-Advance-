<?php

// define has 3 parameters: define(name, value, case-insensitive)
// If set to true, the constant will be defined case-insensitive.
// Defining case-insensitive constants is deprecated as of PHP 7.3.0.
// For constant names, it's better to use uppercase.

define("STATUS_PAID", "paid");
const NEW_LINE = "\n";

// There is no need to use the dollar ($) sign before a constant during assignment or execution.
echo STATUS_PAID;  // paid
echo NEW_LINE; // This will appear only in your command line, not in the browser.

// To check whether a constant is defined or not, we can use defined() with echo and it will return 1 or NULL.
echo defined("STATUS_PAID");  // 1
echo NEW_LINE;

// Cannot use the const keyword in control structures because it is defined at compile time, not run time.
if (true) { 
    define("STATUS","good");
    // const STATUS = "good";  // error
    echo STATUS; // good
    echo NEW_LINE;
}

// Magic constants
echo __DIR__; // C:\xampp\htdocs\Learning PHP\Basic\2- Constants & Variable Variables
echo NEW_LINE;
echo 'line = ' . __LINE__; // line = 31
echo NEW_LINE;
echo 'line = ' . __LINE__; // line = 33
echo NEW_LINE;

// Variable variables
$food = 'sandwich';

$$food = 'fast food';
echo $food . ' is a kind of ' . $$food; // sandwich is a kind of fast food
echo NEW_LINE;

// Another way to print it
echo "$food is a kind of {$$food}"; // sandwich is a kind of fast food
echo NEW_LINE;
