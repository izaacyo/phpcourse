<?php

// Create array

$fruits = ["Banana", "Apple", "Orange"];


// Print the whole array


echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index

echo $fruits[1] . '<br>';


// Set element by index

$fruits[0] = 'Peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Check if array has element at index 2

isset($fruits[2]); // true


// Append element

$fruits[] = 'Banana';
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Print the length of the array

echo count($fruits) . '<br>';

// Add element at the end of the array

array_push($fruits, 'foo');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array

echo array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array

array_unshift($fruits, 'bar');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array

echo array_shift($fruits);

// Split the string into an array

$string = "Banna, Apple, Peach";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';


// Combine array elements into string

echo implode(" & ", $fruits);


// Check if element exist in the array

echo '<pre>';
var_dump(in_array('Apple', $fruits)); //boolean true
echo '</pre>';


// Search element index in the array

echo '<pre>';
var_dump(array_search('Mango', $fruits)); //boolean false or index in array
echo '</pre>';


// Merge two arrays

$vegetables = ["Potato", "cucumber"];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]);
echo '</pre>';



// Sorting of array (Reverse order also)
//rsort($fruits)
sort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games']
];

echo '<pre>';
var_dump($person); // print_r
echo '</pre>';



// Get element by key

echo $person['name'] . '<br>';

// Set element by key

$person['channel'] = 'Media';


// Null coalescing assignment operator. Since PHP 7.4

if (!isset($person['address'])) {
    $person['address'] = 'unknown';
};

$person['address'] ??= 'unknown';
echo '<pre>';
var_dump($person); // print_r
echo '</pre>';

// Check if array has specific key

var_dump(isset($person['name'])); // true

// Print the keys of the array

echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array

echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys

ksort($person);
print_r($person);


// Two dimensional arrays

$todos = [
    ['title' => 'Todo title 1', 'completed' => true],
    ['title' => 'Todo title 2', 'completed' => false]

];
echo '<pre>';
var_dump($todos);
echo '</pre>';
