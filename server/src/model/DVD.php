<?php

namespace model;
use model\Product;

class DVD extends Product {

    private string $size;

    public function __construct(string $sku,
                                string $name, 
                                string $price, 
                                array $properties) {

        parent::__construct($sku, $name, $price);
        
        $this->size = $properties["size"];

    }

    public function getSpecificProperty(): string {

        return "size: " . $this->size . " MB";

    }

    public function setSpecificProperty($size) {

        $this->size = $size;

    }

}