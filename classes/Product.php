<?php

class Product {
    private $name;
    private $type;
    private $target;
    private $price;
    private $imgURL;
    
    public function __construct($name, $type, $target, $price, $imgURL){
        $this->name = $name;
        $this->type = $type;
        $this->target = $target;
        $this->price = $price;
        $this->imgURL = $imgURL;
    }
}