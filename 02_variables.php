<?php

// What is a variable

// Variable types


// Declare variables

$name = 'Marius';
$age = 22;
$isMale = true; // false would print nothing on screen
$height = 1.80; // float or duble
$salary = null; // null prints nothing on screen

// Print the variables. Explain what is concatenation


echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>';
echo $height.'<br>';
echo $salary.'<br>';

// Print types of the variables

echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';


// Print the whole variable

var_dump($name, $age, $isMale, $height, $salary);

// Change the value of the variable

$name = false;

// Print type of the variable

echo gettype($name).'<br>';

// Variable checking functions

is_string($name); // false
is_string($age); // true
is_string($isMale); // false
is_string($height); // false

// Check if variable is defined

isset($name); // true
isset($address); // false

// Constants

define('PI', 3.14);
echo PI.'<br>';


// Using PHP built-in constants

echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';
