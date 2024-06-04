<?php 

require_once __DIR__ . "/category.php";

class Product {
    private string $name;
    private float $price;
    private string $image;
    public Category $category;

    public function __construct($name, $price) {
        $this->name = $name;
        
        $this->price = $price; 
    }

    
    

    /**
     * Get the value of name
     */ 
    public function getName(): string {
        return $this->name;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice(): float {
        return $this->price;
    }

    /**
     * Get the value of image
     */ 
    public function getImage(): string {
        return $this->image;
    }

    /**
     * Set the value of image
     * @return  self
     */ 
    public function setImage(string $image): void {
        $this->image = $image;
    }
}