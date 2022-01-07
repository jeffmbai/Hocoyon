<?php
 $title="Contact";
 include 'includes/header.php';
 ?>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial scale 1.0">
   <link rel="stylesheet" type="text/css" href="style/index.css">
   <div class="box">
   	   <h1>Contact Us</h1>
   	     <div class="contact">
   	     	<form action="includes/form.php" method="POST">
   	     		<label>First Name</label><br>
   	     		<input type="text" name="fname" placeholder="First Name" required=""><br><br>

   	     		<label>Second Name</label><br>
   	     		<input type="text" name="sname" placeholder="Second Name" required=""><br><br>

   	     		<label>Email</label><br>
   	     		<input type="text" name="email" placeholder="Email" required=""><br><br>

   	     		<label>Subject</label><br>
   	     		<input type="text" name="subject" placeholder="Subject" required=""><br><br>

   	     		<label>Message</label><br>
   	     		<textarea name="message" placeholder="Message" required=""></textarea><br><br>

   	     		<input type="submit" name="con" value="send">
   	     		<input type="reset" value="clear form">
   	     	</form>
   	     </div>
   </div>

<?php
  include 'includes/footer.php';