<?php 

require_once __DIR__ . "/product.php";

class Food extends Product {
    private string $meat;
    private int $weightGr;

    public function __construct(string $name, float $price, int $weightGr) {
        parent::__construct($name, $price);

        $this->weightGr = $weightGr;
    }

    /**
     * Get the value of meat
     */ 
    public function getMeat() {
        return $this->meat;
    }

    /**
     * Set the value of meat
     * @return  self
     */ 
    public function setMeat($meat) {
        $this->meat = $meat;
    }

    /**
     * Get the value of weightGr
     */ 
    public function getWeightGr() {
        return $this->weightGr;
    }
}