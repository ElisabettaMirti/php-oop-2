<?php
require_once __DIR__ . '/Product.php';

class Accessories extends Product {
    private $material;
    private $size;

    public function __construct($name, $target, $price, $imgURL, $material, $size){
        parent::__construct($name, $target, $price, $imgURL);
        $this->material = $material;
        $this->size = $size;
    }

    public function GetMaterial(){
        return $this->material;
    }

    public function GetSize(){
        return $this->size;
    }
}