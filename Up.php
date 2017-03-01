<?php 
include 'herder.php';
include 'mysql.php';
if(isset($_POST['submit'])){
$sp= $_POST['sp'];
$ten= $_POST['ten'];
$gia= $_POST['gia'];
$img= $_POST['img'];

$ok = mysql_query("INSERT INTO sanpham SET
    `sanpham` = '$sp',
    `ten` = '$ten',
    `gia` = '$gia',
    `img` = '$img'
    ");
if($ok){
    echo '<span style="color:white;">lưu thành công</span>';
}  else {
    echo'<span style="color:white;">lỗi</span>';
}
}
echo '<form action="Up.php" method="post">
<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
<td colspan="2">
<div align="center">
</div></td>
</tr>
<tr>
<td><div align="right"><span style="color:white;">Sản Phẩm</span></div></td>
<td><input type="text" name="sp" /></td>
</tr>
<tr>
<td><div align="right"><span style="color:white;">Tên</span></div></td>
<td><input type="text" name="ten" /></td>
</tr>
<tr>
<td><div align="right"><span style="color:white;">Giá</span></div></td>
<td><input type="text" name="gia" /></td>
</tr>
<tr>
<td><div align="right"><span style="color:white;">Link img</span></div></td>
<td><input type="text" name="img" /></td>
</tr>
<tr>
<td><div align="right"></div></td>
<td><input name="submit" type="submit" value="Đăng Sản Phẩm " /></td>
</tr>
</table>
</form>';
include 'Footer.php';
?>

