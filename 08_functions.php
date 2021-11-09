<?php

// Function which prints "Hello I am Zura"

function hello()
{
    echo "Hello I am Marius";
}
hello();
hello();
hello();

// Function with argument

function hei($name)
{
    return "Hello I am $name";
}

echo hei('Marius');
echo hei('Brad');

// Create sum of two functions

function sum($a, $b)
{
    return $a + $b;
}

echo sum(4, 5);

// Create function to sum all numbers using ...$nums

function ssum(...$nums)
{

    $ssum = 0;
    foreach ($nums as $n) {
        $ssum += $n;
    }

    return $ssum;
}

echo ssum(1, 2, 3, 4, 5, 6);

// Arrow functions

function ssumm(...$nums)
{
    return array_reduce($nums, fn ($carry, $n) => $carry + $n);
}

echo ssumm(1, 2, 3, 4, 5, 6);
