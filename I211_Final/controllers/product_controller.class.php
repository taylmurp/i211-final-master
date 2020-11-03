<?php

/*
 * Author: Group 5   
 * Date: April 4, 2019
 * File: product_controller.class.php
 * Description: the product controller
 *
 */

class ProductController {
    //put your code here
    private $product_list;
    
    public function __construct() {
        $this->product_model = new ProductModel();
        
    }
    
    public function all(){
        $products = $this->product_model->getProducts();
        
        if (!$products){
        header ("location: index.php?action=error&message=No product was found.");
        exit();
    }
    
    $view = new ShowProduct();
    
    $view->display($products);
    }
    
    public function error($message){
        $error = new ProductError();
        
        $error->display($message);
    }
    }

