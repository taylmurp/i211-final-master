<?php

/*
 * Author: Group 5
 * Date: April 4, 2019
 * File: database,class.php
 * Description: Description: the Database class sets the database details.
 * 
 */

class Database {

    //define database parameters
    private $param = array(
        'host' => 'localhost',
        'login' => 'phpuser',
        'password' => 'phpuser',
        'database' => 'grocery',
        'tblProducts' => 'products'
        
    );
    //define the database connection object
    private $objDBConnection = NULL;
    static private $_instance = NULL;

    //constructor
    private function __construct() {
        $this->objDBConnection = @new mysqli(
                $this->param['host'],
                $this->param['login'],
                $this->param['password'],
                $this->param['database']
        );
        if (mysqli_connect_errno() != 0) {
            echo "Connecting to database failed: " . mysqli_connect_error();
            exit();
        }
    }

    //static method to ensure there is just one Database instance
    static public function getInstance() {
        if (self::$_instance == NULL)
            self::$_instance = new Database();
        return self::$_instance;
    }

    //this function returns the database connection object
    public function getConnection() {
        return $this->objDBConnection;
    }

    

    //returns the name of the table that stores products
    public function getProductsTable() {
        return $this->param['tblProducts'];
    }

    

    
}
