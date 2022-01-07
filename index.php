<?php
   $title = "Home";
   include 'includes/header.php';
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial scale 1.0">
<link rel="stylesheet" type="text/css" href="style/index.css">
<section>
	<div class="container">

<!--slide show begins-->
		<div class="slideshow-container">
		  
	            <div id="slide-show">
				    <div class="mySlides fade">
                        <img src="images/1.jpg">
                    </div>
		        </div>
			    <div id="slide-show">
				    <div class="mySlides fade">
                        <img src="images/2.jpg">
                    </div>
			    </div>
                <div id="slide-show">
                    <div class="mySlides fade">
                       <img src="images/3.jpg">
                    </div>
                </div>
                <div id="slide-show">
                    <div class="mySlides fade">
                        <img src="images/20.jpg">
                    </div>
                </div>
<!--slideshow ends-->

<!--script for slideshow begins-->
	        <script type="text/javascript">
                var slideIndex = 0;
                showSlides();
 
                function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
               }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}
                slides[slideIndex-1].style.display = "block";
                setTimeout(showSlides, 3000); // Change image every 2 seconds
               }   
            </script>
	    </div>
<!--end of slide show script--->

<!--main body begins-->
        <div class="b">
        	<h1><u>Homabay County Youth Network</u></h1>
        	<p>
        		HOCOYON is a non-profit Community Based Organization established to identify,realize and appreciate ability of youths and women in community development through social economic projects<br>
        	</p>
        		<h2><u>Vision</u></h2>
        		<p>HOCOYON  is dedicated to the principles of 
        		<ul>
        			  <li>Economic</li>
        		      <li>Social Justice</li>
        		      <li>Rule Of Law</li>
        		      <li>Self-determination</li>
        		      <li>Awaraness</li>
        		</ul>
        	</p>
        		<p>We intend to unite, sensitize and empower every potential in youths across Homabay County through creation of sustainable development opportunities</p><br>

        		<h3><u>Mission</u></h3>
        		<p>We envision a cohessive and economic just by society for sustainable development that allows more and better opportunities to the majority youth and women population</p>
        	</p>

            <div class="gall">
                <div class="pict">
                    <p>
                    <img src="images/m.jpg">
                    <p>
                        <ul>
                            <li>Name: Eng JM Henga</li>
                            <li>Position: Patron</li>
                        </ul>
                    </p>
                    <p>
                        We,like lace, make up the very fabric of society, the tapestry of togetherness that consists of holes, but also of threads that tie us together until the end of time. The more we embrace our fragility and shared sufferings, the more the boundaries we overcome, until the light can't help but pour on in. We must therefore understand that the oneness in Jesus Christ crosses all boundaries and separations.Anyone with the faith of Jesus Christ can immediately enjoy the innate oneness with another who has the faith of Jesus,regardless of differing political or doctrial views. Together We Stronger
                    </p>
                </div>
            </div>
        </div>
<!--end of main body-->
<?php
 include 'includes/footer.php'
?>