<?php

class Product {
    private $name;
    private $type;
    private $target;
    private $price;
    
    public function __construct($name, $type, $target, $price){
        $this->name = $name;
        $this->type = $type;
        $this->target = $target;
        $this->price = $price;
    }
}