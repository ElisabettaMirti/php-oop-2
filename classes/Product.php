<?php

class Product {
    private $name;
    private $target;
    private $price;
    private $imgURL;
    public static $instances = [];
    
    public function __construct($name, $target, $price, $imgURL){
        $this->name = $name;
        $this->target = $target;
        $this->price = $price;
        $this->imgURL = $imgURL;
        self::$instances[] = $this;
    }

    public static function all() {
        return self::$instances;
    }
}