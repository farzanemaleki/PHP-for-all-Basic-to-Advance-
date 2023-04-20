<?php

/*Scalar Types */
// bool - true/false
$payStatus = true; 
echo gettype($payStatus) .' => ' . $payStatus . '<br />'; // output will be 1 if it was false output will be null

// int - 5, 10, -87
$degree = 4;
echo $degree . '<br />';

// float - 8.4, 24.9, -79.933
$score = 89.50;
echo $score . '<br />';

// string - "farzane", "maleki"
$name = "farzane";
echo $name . '<br />';
var_dump($name) . '<br />';

/*Compound Types */

//array
$location = [34.95, 'Tab', true];
echo($location);  // got error Warning: Array to string with function `implude()`
print_r($location); // expected mixed $value
echo '<br />';

//object

//callable

//iterable


/*type-hint */

function sum(int $x, int $y){
    return $x+$y;
}

//even if we pass it an string php will convert it to int
//if couldn't it gives us error
echo sum('3', 5). '<br />'; // 8

//enable the strict type hinting in php
// `declare(strict_types = 1);`
// echo sum('3', 5); // this will provide an error.

//type casting

$x = (int) '4';
var_dump($x);  //int(4)

