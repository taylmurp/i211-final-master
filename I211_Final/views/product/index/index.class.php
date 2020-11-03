<?PHP
/*
 * Author: Group 5
 * Date: 4/4/19
 * Name: index.class.php
 * Description: view file for the application homepage. Defines a class called Index.
 */
class Index {
    public function display($products){
        
        
   
?>

<!DOCTYPE HTML">
<html>
    <head>
        <title>Product List </title>
        <link type="text/css" rel="stylesheet" href="includes/style.css" />
    </head>
    <body>
        <h2>Products in our Listings</h2>
        <table border="0">
            <tr>
                <th>Product Number</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Description</th>
            </tr>
			<?php
			//add code here to create a new row for each guest
			foreach($products as $product){
                            echo "<tr>";
                            echo "<td>" . $product->getProductNum() . "</td>";
                            echo "<td>" . $product->getProductName() . "</td>";
                            echo "<td>" . $product->getPrice() . "</td>";
                            echo "<td>" . $product->getImage() . "</td>";
                            echo "<td>" . $product->getDescription() . "</td>";
                            echo "</tr>";
                        }
			?>
		</table>
    </body>
</html>
<?PHP



 }//end of display
}//end of class
?>