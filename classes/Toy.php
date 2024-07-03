<?php
require_once __DIR__ . '/Product.php';

class Toy extends Product {
    private $name;
    private $target;
    private $price;
    private $imgURL;
    private $description;
    private $size;

    public function __construct($name, $target, $price, $imgURL, $description, $size){
        parent::__construct($name, $target, $price, $imgURL);
        $this->description = $description;
        $this->size = $size;
    }
}