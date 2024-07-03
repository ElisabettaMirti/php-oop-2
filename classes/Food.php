<?php
require_once __DIR__ . '/Product.php';

class Food extends Product {
    private $weight;
    private $ingredients;

    public function __construct($name, $target, $price, $imgURL, $weight, $ingredients){
        parent::__construct($name, $target, $price, $imgURL);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }

    public function GetWeight(){
        return $this->weight;
    }

    public function GetIngredients(){
        return $this->ingredients;
    }
}