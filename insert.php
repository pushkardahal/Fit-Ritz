<?php
session_start();
require('config.php');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$content = $_POST['content'];
echo($name.$email.$phone.$content);


$connection = mysqli_connect($db_host,$db_username,$db_password,$db_name);
$insertQuery = "INSERT INTO tbl_msg(msg_sender_name,msg_sender_email,msg_sender_phone,msg_content) VALUES('$name','$email','$phone','$content')";
$queryExe = mysqli_query($connection,$insertQuery);

if ($queryExe) {
	$_SESSION['userauth'] = TRUE;
	header("location:index.php");
}
else{
	echo "-1";
}
?>