<?php

namespace model;
use model\Product;

class Book extends Product {

    private string $weight;

    public function __construct(string $sku,
                                string $name, 
                                string $price, 
                                array $properties) {

        parent::__construct($sku, $name, $price);
        
        $this->weight = $properties["weight"];

    }

    public function getSpecificProperty(): string {

        return "weight: " . $this->weight . " KG";

    }

    public function setSpecificProperty($weight) {

        $this->weight = $weight;

    }

}