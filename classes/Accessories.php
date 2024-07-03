<?php
require_once __DIR__ . '/Product.php';

class Toy extends Product {
    private $name;
    private $target;
    private $price;
    private $material;
    private $size;

    public function __construct($name, $target, $price, $material, $size){
        parent::__construct($name, $target, $price);
        $this->material = $material;
        $this->size = $size;
    }
}