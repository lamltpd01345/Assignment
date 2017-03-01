<?php
session_start();
if(isset($_GET["removep"]))
{
    $product_code   = $_GET["removep"]; //get the product code to remove
    foreach ($_SESSION["products"] as $cart_itm) //loop through session array var
    {
        if($cart_itm["code"]!=$product_code){ //item does,t exist in the list
            $product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
        }
         
        //create a new product list for cart
        $_SESSION["products"] = $product;
    }
     
    header('Location: cart_show.php');
}
?>