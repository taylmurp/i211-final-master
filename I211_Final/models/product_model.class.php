<?php
/*
 * Author: Group 5
 * Date: 4/4/19
 * Name: product_model.class.php
 * Description: defined by the class name ProductModel
 */

class ProductModel {
    //put your code here
    private $db;
    private $dbConnection;
    
    public function __construct() {
        $this->db = Database::getInstance();
        $this->dbConnection = $this->db->getConnection();
    }
    
    
     public function getProducts() {
    //SQL select statement
        $sql = "SELECT * FROM " . $this->db->getProductsTable();
 
        //execute the query
        $query = $this->dbConnection->query($sql);
 
        if ($query && $query->num_rows > 0) {
            //array to store all products
            $products = array();
 
            //loop through all rows
            while ($query_row = $query->fetch_assoc()) {
                $product = new Product($query_row["productNum"],
                                $query_row["productName"],
                                $query_row["price"],
                                $query_row["image"],
                                $query_row["description"]);
               
                //push the product into the array
                $products[] = $product;
            }
            return $products;
        }
        return false;
    }
    
    
    
}
