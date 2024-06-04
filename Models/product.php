<?php 

require_once __DIR__ . "/category.php";

class Product {
    private string $name;
    private float $price;
    private string $image;
    public Category $category;
}