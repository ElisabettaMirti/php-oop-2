<?php
require_once __DIR__ . '/Product.php';

class Toy extends Product {
    private $description;
    private $size;

    public function __construct($name, $target, $price, $imgURL, $description, $size){
        parent::__construct($name, $target, $price, $imgURL);
        $this->description = $description;
        $this->size = $size;
    }

    public function GetDescription(){
        return $this->description;
    }

    public function GetSize(){
        return $this->size;
    }
}