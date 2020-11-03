<?php
/*
 * Author: Group 5
 * Date: 4/4/19
 * Name: product.class.php
 * Description: defined by the class name product
 */
class Product {
    //properties of a product
    private $productNum, $productName, $price, $image, $description;
    
    //constructor taht initializes toy properties
    public function __construct($productNum, $productName, $price, $image, $description) {
        $this->productNum = $productNum;
        $this->productName = $productName;
        $this->price = $price;
        $this->image = $image;        
        $this->description = $description;

    }
    
    public function getProductNum() {
        return $this->productNum;
    }

    public function getProductName() {
        return $this->productName;
    }

    public function getPrice() {
        return $this->price;
    }
    public function getImage() {
        return $this->image;
    }

    public function getDescription() {
        return $this->description;
    }


}
