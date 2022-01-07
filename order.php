<?php
   $title="Order";
   include 'includes/header.php';
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial scale 1.0">
<link rel="stylesheet" type="text/css" href="style/index.css">
    
    <!--order begins-->
       <div class="box">
       	 <h1>Place your order</h1>

       	   <div class="ord">
       	   	   <form action="includes/odd.php" method="POST">
       	   	   	   <label>First Name</label><br>
       	   	   	   <input type="text" name="fname" placeholder="Enter Firstname" required=""><br><br>

       	   	   	   <label>Second Name</label><br>
       	   	   	   <input type="text" name="sname" placeholder="Enter Secondname" required=""><br><br>

       	   	   	   <label>Phone Number</label><br>
       	   	   	   <input type="number" name="phone" placeholder="Enter Phone Number" required=""><br><br>

       	   	   	   <label>Location</label><br>
       	   	   	   <input type="text" name="location" placeholder="Enter your location" required=""><br><br>

       	   	   	   <label>Item to order(lowest value=0)</label><br>
       	   	   	    <p>T-shirt(s):</p><input type="number" name="tshirt" placeholder="Enter quantity"><br>
       	   	   	    <p>Umbrella:</p><input type="number" name="umbrella" placeholder="Enter quantity"><br>
       	   	   	    <p>cap:</p><input type="number" name="cap" placeholder="Enter quantity"><br><br>
                    <br>
       	   	   	   
       	   	   	   
   	     		<input type="submit" name="order" value="send">
   	     		<input type="reset" value="clear form">
       	   	   </form>
       	   </div>
       </div>
<?php
   include 'includes/footer.php';
?>