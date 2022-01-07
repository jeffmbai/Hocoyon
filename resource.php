<?php
   $title="Resources";
   include 'includes/header.php';
?>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial scale 1.0">
<link rel="stylesheet" type="text/css" href="style/index.css">
     
    <div class="box" style="height: 2000px; ">
     	<h1>Gallery and Events</h1>
 <!--resources begins here-->

    <!--event/gallery begins-->
     	<div class="galler">
     		<div class="pic">
     			<img src="images/5.jpg">
     			<p>Team</p>
     		</div>
     		<div class="pic">
     		    <img src="images/18.jpg">
     		    <p>Supplying trees</p>
	     	</div>
	     	<div class="pic">
	     		<img src="images/9.jpg">
	     		<p>Blood donation</p>
	     	</div>
	     	<div class="pic">
	     		<img src="images/10.jpg">
	     		<p>Awarding</p>
	     	</div>
	     	<div class="pic">
	     		<img src="images/7.jpg">
	     		<p>After AGM</p>
	     	</div>
	     	<div class="pic">
	     		<img src="images/3.jpg">
	     		<p>Tree planting</p>
	     	</div>
            <div class="pic">
                <img src="images/21.jpg">
                <p>During AGM</p>
            </div>
            <div class="pic">
                <img src="images/19.jpg">
                <p>Handing group <br>
                registration certificate</p>
            </div>
     	</div>
    <!--end of events-->

     	<h1>Downloads</h1>
    <!--downloads begins-->
     	<div class="down">
     		<button class="accord">Constitution</button>
     		  <div class="pane">
     		  	<a href="docs/Constitution.pdf" width="100%" height="100%">View</a>
     		</div>

     		<button class="accord">Calender of events</button>
     		  <div class="pane">
     		  	<a href="docs/calender.pdf" width="100%" height="100%">Open</a>
     		</div>

     		<button class="accord">Reports</button>
     		  <div class="pane">
     		  	<a href="#">Will be uploaded shortly</a>
     		</div>
            <button class="accord">Publications</button>
              <div class="pane">
                <a href="#">Will be uploaded shortly</a>
            </div>
     	</div>
    <!--download ends-->
    
        <h1>Support</h1>
    <!--support begins-->
         <div class="sup">
         	<button class="accord">Donate</button>
         	<div class="pane">
         		Mpesa paybill :<a href="tel://#">871214</a><br>
         		Visa: <a href="">GO</a><br>
         		Paypal: <a href="">Go</a>
         	</div> 

         	<button class="accord">Promote</button>
         	<div class="pane">
         		T-shirt:Ksh1000, Umbrella:Ksh650, Cap:Ksh250<br>
         		<a href="order.php">Place order</a>
         	</div>
         </div> 
    <!--support ends--> 
        <!--script for downloads and support-->
	        <script type="text/javascript">
	    		var acc=document.getElementsByClassName("accord");
	    		var i;
	    		for (var i = 0; i < acc.length; i++) {
	    			acc[i].onclick=function(){
	    				this.classList.toggle("active");
	    				this.nextElementSibling.classList.toggle("show");
	    			}
	    		}
	    	</script>
        <!--script ends here-->

 <!--resources ends here--->
    </div>
<?php
    include 'includes/footer.php';
?>