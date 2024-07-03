<?php
require_once __DIR__ . '/Product.php';

class Food extends Product {
    private $name;
    private $target;
    private $price;
    private $weight;
    private $ingredients;

    public function __construct($name, $target, $price, $weight, $ingredients){
        parent::__construct($name, $target, $price);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}