
<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');

include 'herder1.php';
echo '<title>Đăng nhập</title>';
require_once("mysql.php");
if ( isset($_GET['act']) == "do" )
{
   $username = addslashes( $_POST['username'] );
    $password = md5( addslashes( $_POST['password'] ) );
    // Lấy thông tin của username đã nhập trong table members
    $sql_query = @mysql_query("SELECT id, username, password FROM members WHERE username='{$username}'");
    $member = @mysql_fetch_array( $sql_query );
    // Nếu username này không tồn tại thì....
    if ( @mysql_num_rows( $sql_query ) <= 0 )
    {
        print "Tên truy nhập không tồn tại. <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a>";
        exit;
    }
    // Nếu user
    if ( $password != $member['password'] )
    {
        print "Nhập sai mật khẩu. <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a>";
        exit;
    }
    // Khởi động phiên làm việc (session)
    $_SESSION['user_id'] = $member['id'];
     // Thông báo đăng nhập thành công
    print "Bạn đã đăng nhập với tài khoản {$member['username']} thành công. <a href='index.php'>Nhấp vào đây để vào trang chủ</a>";
}
else
{
// Form đăng nhập
print <<<EOF
<form action="Dangnhap.php?act=do" method="post">
Tên truy nhập: <input type="text" name="username" value="">
Mật khẩu: <input type="password" name="password" value="">
<input type="submit" name="submit" value="Đăng nhập">
</form>
EOF;
}
include 'Footer.php';
?>