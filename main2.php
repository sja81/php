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

$books2 = [
    ['The Martian', 'Andy Weir'],
    ['Harry Potter','JK Rowling']
];

foreach($books as [$title, $author]) {
    var_dump($title);
    var_dump($author);
}

# Nullable types

class User 
{
    protected $age;

    public function age() : ?int
    {
        return $this->age;
    }

    public function subscribe(?callable $callback = null) : void
    {
        // bla bla here
        if ($callback) $callback();
    }

}

(new User())->subscribe(function(){
    try{

    } catch (NotEnoughResource | ChargeRejected $e) {
        // catching multiple type of exception and handled in same way!!!!
    }
});

function dumpAll(iterable $myArray)
{
    foreach ($myArray as $item) {
        var_dump($item);
    }
}

class Collection implements IteratorAggregate 
{
    protected $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }

}

$collection = new Collection(['one','two','three']);
dumpAll($collection);

