<?php

// Declaring numbers

$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations

echo ($a + $b) * $c . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>'; // reminder

// Assignment with math operators

//$a += $b; echo  $a.'<br>';
//$a -= $b; echo  $a.'<br>';
//$a *= $b; echo  $a.'<br>';
//$a /= $b; echo  $a.'<br>';
//$a %= $b; echo  $a.'<br>';

// Increment operator

echo $a++ .'<br>';
echo ++$a . '<br>';

// Decrement operator

echo $a-- .'<br>';
echo --$a .'<br>';

// Number checking functions


is_float(1.25); // true
is_double(1.25); // true
is_int(5); // true
is_numeric("3.45"); // true
is_numeric("3.45"); // false


// Conversion

$strNumber = '12.44';
$number = (float)$strNumber; // take strNumber and cast it on the float or floatval;
$number2 = (int)$strNumber; // take strNumber and cast it on the float or intval;
var_dump($number);
var_dump($number2);
echo '<br>';

// Number functions

//abs function takes number and returns the absolute value of that number
echo "abs(-15)" . abs(-15) . '<br>';

// pow takes 2 arguments, first is base and second is exponential
echo "pow(2,  3) " . pow(2, 3) . '<br>';

//sqrt is square root
echo "sqrt(16) " . sqrt(16) . '<br>';


// max givves the value of the max
echo "max(2, 3) " . max(2, 3) . '<br>';


// min gives the minimum among given ones
echo "min(2, 3) " . min(2, 3) . '<br>';


// rounds to the closest
echo "round(2.6) " . round(2.6) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';

// floor rounds down

echo "floor(2.6) " . floor(2.6) . '<br>';

// ceil rounds up

echo "ceil(2.4) " . ceil(2.4) . '<br>';


// Formatting numbers


$number = 123456789.12345; //

echo number_format($number, 2, ',', ' ');


// https://www.php.net/manual/en/ref.math.php
