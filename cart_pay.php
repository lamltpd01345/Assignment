<?php
    session_start();
         include 'mysql.php';
           include 'herder1.php';
       if(isset($_POST["ok"]))
    {
           $ten = $_POST["ten"];
           $diachi = $_POST["diachi"];
           $sdt = $_POST["sdt"];
           $email = $_POST["email"];
           $ok = mysql_query("Insert into `hoadon` set
               `ten` = '$ten',
               `diachi` = '$diachi',
               `email` = '$email',
               `sdt` = '$sdt'
               ");
           $hd = mysql_insert_id();
            if(isset($_SESSION["products"]))
    {
        foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
           $results = mysql_query("SELECT * FROM sanpham WHERE id='$product_code' LIMIT 1");
           $ok = mysql_fetch_array($results);
           $ok2 = mysql_query("Insert into `hoadon_ct` set
               `tensanpham` = '".$ok['sanpham']."',
               `soluong` = '".$cart_itm["qty"]."',
               `gia` = '".$ok['gia']."',
               `madonhang` = '$hd'
               ");
            
        }
    }
        if($ok && $ok2){
    echo'hóa đơn được ghi nhận';
        }else{
          echo'thất bại';
      
        }
    }else{
        echo '<form action="cart_pay.php" method="post">
    <table border="1" width="400" cellspacing="1" style="border-collapse: collapse" bordercolor="#C0C0C0">
        <tr>
            <td>Tên:</td>
            <td><input type="text" name="ten" value=""></td>
        </tr>
        <tr>
            <td>Đia chỉ:</td>
            <td><input type="text" name="diachi" value=""></td>
        </tr>
        <tr>
            <td>Số điện thoại:</td>
            <td><input type="text" name="sdt" value=""></td>
        </tr>
        <tr>
            <td>Địa chỉ E-mail:</td>
            <td><input type="text" name="email" value=""></td>
        </tr>
        <tr>
        
            <td><input type="submit" name="ok" value="Thanh Toán"></td>
        </tr>
    </table>
</form>';
    }
include 'Footer.php';
        ?>
    