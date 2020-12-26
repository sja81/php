<?php
declare(strict_types=1); // !!!

function setAge(int $age)
{
}

setAge('30'); // PHP will translate '30' to integer 30!!!

// The spaceship operator


usort($games, function($a, $b){
    return $a <=> $b; // -1, 0, 1
    // $a < $b => -1
    // $a = $b => 0
    // $a > $b => 1
});


function sortBy($property)
{
    usort($users, function($uOne, $uTwo) use ($property) {
        return $uOne->$property() <=> $uTwo->$property();
    });
}

# Null coalesce operator

$name = $_GET['name'] ?? '';

use App\{Person, Animal};