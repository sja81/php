<?php

class Team
{
    protected $name;
    protected $members = [];
    
    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    // ... variable number of arguments
    public static function start(...$params)
    {
        return new static(...$params);
    }

}


class Collection
{
    protected $items = [];

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        return array_sum(
            array_map(function($item) use ($key){
                return $item->key;
            }, $this->items));
    }   

    // in 7.4+
    public function sum2($key)
    {
        return array_sum(
            array_map(fn($item) => $item->$key, $this->items));
    }  

    // elegant solution
    public function sum3($key)
    {
        return array_sum(array_column($this->items, $key));
    }  
}

// getting the classname by itself

$class = (new ReflectionClass($this))->getShortName();

// searching for a capital letter and replacing it with space and the letter
trim(preg_replace('/[A-Z]/',' $0', $class));

