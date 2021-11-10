<?php

require_once './Person.php';
require_once './Student.php';


$student = new Student("Marius", "Petrut", '1234');

// What is class and instance

$p = new Person('Brad', 'Traversy');

$p->setAge(30);

echo '<pre>';
var_dump($p);
echo '</pre>';

echo $p->name . '<br>';
echo $p->getAge();

$p2 = new Person('John', 'Smith');
echo '<pre>';
var_dump($p2);
echo '</pre>';
echo Person::getCounter();



// Create Person class in Person.php

// Create instance of Person

// Using setter and getter