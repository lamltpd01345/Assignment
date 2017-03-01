<?php
  session_start();
         include 'mysql.php';
         include 'herder1.php';
         if(isset($_GET['do']) == 'hoadon'){
            $id = $_GET['id'];
            $sql = mysql_query("select * from hoadon where Id='$id'");
            $mau = mysql_fetch_array($sql);
            echo '<h1> Hóa đơn '.$mau['Id'].'</h1>
             <p>họ và tên : '.$mau['ten'].'</p>
             <p>sđt : '.$mau['sdt'].'</p>';
            
             $query1 = mysql_query("select * from hoadon_ct where madonhang= '$id'");
                 echo'<table border="1" width="400" cellspacing="1" style="border-collapse: collapse" bordercolor="#C0C0C0">
        <tr>
            <td>Ten</td>
            <td>Gia</td>
            <td>So luong</td>
        </tr>';
    while ($ok1 = mysql_fetch_array($query1)){
        
        echo'<tr>
            <td>'.$ok1['tensanpham'].'</td>
            <td>'.$ok1['gia'].'</td>
            <td>'.$ok1['soluong'].'</td>
        </tr>';
        }
         echo'</table><br><br><br>';
         }
         $query = mysql_query("select * from hoadon order by id");
    echo'<table border="1" width="400" cellspacing="1" style="border-collapse: collapse" bordercolor="#C0C0C0">
        <tr>
            <td>Ten</td>
            <td>sđt</td>
            <td>email</td>
            <td>Addres</td>
        </tr>';
    while ($ok = mysql_fetch_array($query)){
        
        echo'<tr>
            <td>'.$ok['ten'].'</td>
            <td>'.$ok['sdt'].'</td>
            <td>'.$ok['email'].'</td>
            <td>'.$ok['diachi'].'</td>
           <td><a href="?do=hoadon&id='.$ok["Id"].'">xem</a></td>
        </tr>';
        }
    echo'</table>';
include 'Footer.php';
        ?>
    