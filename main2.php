<?php

// PHP 7.1 features
// Symmetric Array Destructuring

$books = [
    ['title' => 'The Martian', 'author' => 'Andy Weir'],
    ['title' => 'Harry Potter', 'author' => 'JK Rowling']
];

foreach($books as ['title' => $title, 'author' => $author]) {
    var_dump($title);
    var_dump($author);
}