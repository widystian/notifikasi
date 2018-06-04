<?php
$nama = $_POST['name'];
$to = $_POST['email'];
$subject = $_POST['subject'];
$messages = $_POST['message'];


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
    
$headers = 'From: <widys.tian@gmail.com>';
@mail($to, $subject, $message, $headers);
if(@mail) 
{
	echo "Email sent successfully !!";	
}
else 
{
    echo "pengiriman gagal";
}
?>
