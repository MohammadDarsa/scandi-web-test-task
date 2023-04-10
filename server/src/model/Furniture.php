<?php

namespace model;
use model\Product;


class Furniture extends Product {

    private string $dimensions;

    public function __construct(string $sku,
                                string $name, 
                                string $price, 
                                array $properties) {

        parent::__construct($sku, $name, $price);
        
        $this->dimensions = $properties["dimensions"];

    }

    public function getSpecificProperty(): string {

        return "dimensions: " . $this->dimensions;

    }

    public function setSpecificProperty($dimensions) {

        $this->dimensions = $dimensions;

    }

}