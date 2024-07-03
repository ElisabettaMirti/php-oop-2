<?php
require_once __DIR__ . '/Product.php';

class Accessories extends Product {
    private $name;
    private $target;
    private $price;
    private $imgURL;
    private $material;
    private $size;

    public function __construct($name, $target, $price, $imgURL, $material, $size){
        parent::__construct($name, $target, $price, $imgURL);
        $this->material = $material;
        $this->size = $size;
    }
}