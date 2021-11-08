<?php

// Create simple string


$name = 'Marius';
$string = 'Hello  I am '.$name.'. I am 22';
$string2 = "Hello  I am $name. I am 22";

echo $string .'<br>';
echo $string2 .'<br>';


// String concatenation

echo 'Hello '.' World '.' and PHP '.' <br>';

// String functions
$string = "    Hello World      ";

// prints the length of the string
echo "1 - " . strlen($string) . '<br>' . PHP_EOL;

// removes white spaces from the front and the end of the string
echo "2 - " . trim($string) . '<br>' . PHP_EOL;

// left trim remove from left
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;

// right trim removes from right
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;

// prints the number of words in the string
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;

// reverses the string
echo "6 - " . strrev($string) . '<br>' . PHP_EOL;

// convers every letter in uppercase
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;

// converts every letter in lower
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;

// upper case first letter
echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;

// first letter in lower case
echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;

// only the first letter in each word is uppercase
echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;


// searches for world inside that string
echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; // Change into world

// addition i is for ignore case
echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;

// takes the substring of the string, from position 8 until the end
echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;

// searches for world and replaces it with php inside that string
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL;

// doesn t matter if upper or lower case
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;


// Multiline text and line breaks

$longText = "
  Hello, my name is Zura
  I am 27,
  I love my daughter
";

echo $longText;

echo nl2br($longText);

// Multiline text and reserve html tags

$longText = "
  Hello, my name is <b>Zura</b>
  I am <b>27</b>,
  I love my daughter
";

echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>';
echo "4 - " . nl2br(htmlentities(($longText))) . '<br>';
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;

// https://www.php.net/manual/en/ref.strings.php