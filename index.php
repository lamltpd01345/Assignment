<?php
include 'herder.php';
include 'mysql.php';
    $sql = mysql_query("Select * from sanpham order by id");
    while ($ok = mysql_fetch_array($sql)){
    echo'<div id="boxcategory">
        <form method="post" action="cart_update.php">
   	  <div class="image"><img src="'.$ok['img'].'" /></div></a>
        <div class="cate2">
        	<ul>
            	<li><a href="">'.$ok['ten'].'</a></li>
                <input type="hidden" name="product_code" value="'.$ok['id'].'" />
                <br />
                <h3>'.$ok['gia'].' <br>
                    <input type="number" name="product_qty" value="1">
                    <input type="submit" name="ok" value="Thêm vào Giỏ Hàng"/>
            	</h3>
            </ul>
        </div>
        </from>
    </div>   
      
</div>';
    }
    include 'Footer.php';
?>