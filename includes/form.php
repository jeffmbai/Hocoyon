<?php

include 'config.php';
/*processing of contact form*/
if ($_POST['con']) {
	$fname=$_POST['fname'];
	$sname=$_POST['sname'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$send= "INSERT INTO form(fname,sname,email,subject,message) VALUES('$fname','$sname','$email','$subject','$message');";

	$result= $connect->query($send);
	if (!$result) {
		die($connect->error);
	}else{
		print "<p style='color: orange'; 'font-size:18px;'>Thank you, We will get back to you shortly</p>";
		print "<p style='color:orange;' 'font-size:28px;'><a href='../index.php'>Home";
	}
}
$connect->close();
?>