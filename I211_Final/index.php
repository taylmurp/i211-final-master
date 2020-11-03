<?php
/*
 * Author: Group 5
 * Date: April 4, 2019
 * Name: index.php
 * Description: The homepage
 */

//include code in vendor/autoload.php file
require_once ("vendor/autoload.php");

//create an object of GuestController
$product_controller = new ProductController();

//add your code below this line to complete this file

//default action is list all Product
$action = "all";
if (isset($_GET['action']) && !(empty($_GET['action'])))
    $action = $_GET['action'];


//invoke appropriate method depending on action value
if($action === 'all'){
    $product_controller->all();
}
else if ($action === 'error'){
    //default error message
    $message = "We are sorry, but an error has occured.";
    
    if((isset($_GET['message'])) && !(empty($_GET['message'])))
        $message = $_GET['message'];
    
    $product_controller->error($message);
}
else{
    $message = "Invalid action was requested.";
    $product_controller->error($message);
}