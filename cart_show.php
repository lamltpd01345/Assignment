<?php
  session_start();
         include 'mysql.php';
           include 'herder1.php';
       
        if(isset($_SESSION["products"]))
    {
        $total = 0;
        echo '<form method="post" action="PAYMENT-GATEWAY">';
        echo '<ul>';
        $cart_items = 0;
        foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
           $results = mysql_query("SELECT * FROM sanpham WHERE id='$product_code' LIMIT 1");
           $ok = mysql_fetch_array($results);
            echo '<li style="border: 1px">';
            echo '<span class="remove-itm"><a href="cart_remove.php?removep='.$cart_itm["code"].'">Xoá san phẩm</a></span>';
            echo '<div>'.$ok['gia'].' vnđ</div>';
            echo '<div class="product-info">';
            echo '<b>'.$ok['sanpham'].' (Code :'.$product_code.')</b> ';
            echo '<div class="p-qty">Số lượng : '.$cart_itm["qty"].'</div>';
            echo '<div>'.$ok['ten'].'</div>';
            echo '</div>';
            echo '</li>';
            $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
            $total = ($total + $subtotal);
 $cart_items ++;
            
        }
        echo '</ul>';
        echo '<span class="remove-itm"><a href="cart_pay.php">Thanh toán</a></span></br>';
        echo '<span class="check-out-txt">Tổng tiền: '.$total.' vnđ';
         echo '</span>';
        echo '</form>';
        
    }else{
        echo 'Your Cart is empty';
    }
include 'Footer.php';
        ?>
    