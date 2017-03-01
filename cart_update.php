<?php
session_start();
         include 'mysql.php';
         if(isset($_POST["ok"]))
{
    $product_code   = filter_var($_POST["product_code"], FILTER_SANITIZE_STRING); //product code
    $product_qty    = filter_var($_POST["product_qty"], FILTER_SANITIZE_NUMBER_INT); //product code
    
    //limit quantity for single product
    $results = mysql_query("SELECT * FROM sanpham WHERE id='$product_code' LIMIT 1");
    $ok = mysql_fetch_array($results);
    
    if ($results) { //we have the product info
        
        //prepare array for the session variable
        $new_product = array(array('name'=>$ok['sanpham'], 'code'=>$product_code, 'qty'=>$product_qty, 'price'=>$ok['gia']));
        
        if(isset($_SESSION["products"])) //if we have the session
        {
            $found = false; //set found item to false
            
            foreach ($_SESSION["products"] as $cart_itm) //loop through session array
            {
                if($cart_itm["code"] == $product_code){ //the item exist in array
 
                    $product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$product_qty, 'price'=>$cart_itm["price"]);
                    $found = true;
                }else{
                    //item doesn't exist in the list, just retrive old info and prepare array for session var
                    $product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
                }
            }
            
            if($found == false) //we didn't find item in array
            {
                //add new user item in array
                $_SESSION["products"] = array_merge($product, $new_product);
            }else{
                //found user item in array list, and increased the quantity
                $_SESSION["products"] = $product;
            }
            
        }else{
            //create a new session var if does not exist
            $_SESSION["products"] = $new_product;
        }
        
    }
    
    //redirect back to original page
    header('location: cart_show.php');
}
include 'Footer.php';
        ?>
    