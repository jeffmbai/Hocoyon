<?php
  include 'config.php';
  /*processing of order form*/
if ($_POST['order']) {
		$fname=$_POST['fname'];
		$sname=$_POST['sname'];
		$tel=$_POST['phone'];
		$location=$_POST['location'];
		$tshirt=$_POST['tshirt'];
		$umbrella=$_POST['umbrella'];
		$cap=$_POST['cap'];

		$send= "INSERT INTO resource(fname,sname,phone,location,tshirt,umbrella,cap) VALUES('$fname','$sname','$tel','$location','$tshirt','$umbrella','$cap');";
		$result=$connect->query($send);
		if (!$result) {
			die($connect->error);
		}else{
			print"<p style='color:orange;','font-size:40px;'>Thank You,We will submit your order shortly</p>";
			print"<p style='color:orange;'font-size'28px;'><a href='../index.php'>Home</p>";
	    }
}
$connect->close();
?>