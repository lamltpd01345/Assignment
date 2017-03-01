<?php
if(isset($_POST['email'])) {
 
// EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = "you@yourdomain.com";
$email_subject = "Your email subject line";
 
function died($error) {
// your error code can go here
echo "Xảy ra lỗi!!! ";
echo "<br /><br />";
echo $error."<br /><br />";
echo "Hãy trở lại và sữa chữa các lỗi:<br /><br />";
die();
}
 
// validation expected data exists
if(!isset($_POST['first_name']) ||
!isset($_POST['last_name']) ||
!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['comments'])) {
died('Chúng tôi rất xin lỗi, nhưng có vẻ như là một vấn đề với các hình thức bạn đã gửi.');
}
 
$first_name = $_POST['first_name']; // required
$last_name = $_POST['last_name']; // required
$email_from = $_POST['email']; // required
$telephone = $_POST['telephone']; // not required
$comments = $_POST['comments']; // required
 
$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
if(!preg_match($email_exp,$email_from)) {
$error_message .= ' Địa chỉ email không hợp lệ.<br />';
}
$string_exp = "/^[A-Za-z .'-]+$/";
if(!preg_match($string_exp,$first_name)) {
$error_message .= ' First Name không hợp lệ.<br />';
}
if(!preg_match($string_exp,$last_name)) {
$error_message .= ' Last Name không hợp lệ.<br />';
}
if(strlen($comments) < 2) {
$error_message .= 'Comments Không hợp lệ.<br />';
}
if(strlen($error_message) > 0) {
died($error_message);
}
$email_message = "Mẫu dưới.\n\n";
 
function clean_string($string) {
$bad = array("content-type","bcc:","to:","cc:","href");
return str_replace($bad,"",$string);
}
 
$email_message .= "First Name: ".clean_string($first_name)."\n";
$email_message .= "Last Name: ".clean_string($last_name)."\n";
$email_message .= "Email: ".clean_string($email_from)."\n";
$email_message .= "Telephone: ".clean_string($telephone)."\n";
$email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
}
?>