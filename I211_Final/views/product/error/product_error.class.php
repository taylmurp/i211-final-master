<?PHP
/*
 * Author: Group 5
 * Date: 4/4/19
 * Name: product_error.class.php
 * Description: view file for custom error page defined by class named GuestError
 */
class ProductError {
    public function display($message){
        
        
   
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Product Error</title>
        <link type="text/css" rel="stylesheet" href="includes/style.css" />
    </head>
    <body>
        <table width='500'>
            <tr>
                <td valign='center' align='center'>
                    <img src='includes/kaboom.png' border='0'/>
                </td>
                <td valign='top' align='left'>
                    <h3> We're sorry, but an error has occurred.</h3>
                    <?php echo $message; ?>
                    <p><a href="index.php">HOME</a></p>
                </td>
            </tr>
        </table>
    </body>
</html>
<?PHP



 }//end of display
}//end of class
?>