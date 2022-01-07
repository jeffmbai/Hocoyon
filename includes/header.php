<!DOCTYPE html>
<html>
<head>
	<title><?php  echo $title;?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale=1.0">
	<style type="text/css">

/*normal screen header*/
		body{
			background-color: steelblue;
		}
		.navbar{
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1;
			top: 70px;
			left: 0;
			background-color: black;
			overflow: auto;
			transition: 0.5s;
			padding-top: 5px;
		}
		.navbar a{
			padding: 20px 20px 20px 32px;
			text-decoration: none;
			line-height: 1.1;
			font-family: sans-serif;
			color: white;
			display: block;
			transition: 0.5s;
			font-size: 25px;
		}
		.navbar .closebtn{
			margin-left: 240px;
			top: 0;
			position: absolute;
			padding-bottom: 20px;
			font-size: 50px;
			color: red;
		}
		.navbar a:hover{
			background-color: aqua;
		}
                .
		.navbar p{
			color: white;
			margin-left: 50px;
			font-size: 26px;
		}
		.top{
			background-color: green;
			top:10px;
			width: 750px;
			height: 350px;
		}
		.header img{
			border-radius: 10px;
	    	height: 180px;
	    	width: 180px;
	    	margin-left: 250px;
	    	margin-top: 25px;
	    	margin-bottom: 1px;
		}
                .header h1{
         	color: orange;
        	font-weight: bolder;
        	font-size: 30px;
        	top: 0;
        	text-align: center;
        	margin-right: 20px;
        }
		.main{
			transition: margin-left .5s;
			float: left;
			position: static;
		}
/*end of normal header*/

/*tablet hader begins*/
         @media only screen and (min-width: 775px){
         	body{
         		background-color: black;
         	}
         	.top{
         		background-color: #006400;
         		width: 1000px;
         		height: 200px;
         	}
         	.header img{
         		top: 2px;
         		float: left;
         		margin-left: 20px;
         		width: 150px;
         		height: 140px;
         	}
         	.header h1{
         		margin-top: 60px;
         		margin-left: 10px;
         		float: left;
         	}
         	.navbar{
         		padding-top: 100px;
         		background-color: #006400;
         		float: right;
         		font-family: sans-serif;
         		font-weight: bold;
         		position: static;
         		width: 400px;
         		margin-right: 50px;
         		text-align: center;
         		font-size: 16px;
         		margin: 0 auto;
         	}
         	.navbar a{
         		padding: 0.5px;
         		font-size: 16px;
         		float: left;
         		margin-right: 10px;
         		display: block;
         		text-decoration: none;
         	}
         	.navbar a:hover{
         		color: steelblue;
         	}
         	.navbar .closebtn, p, .main{
         		display: none;
         	}
                .dropdown{
                        float: left;
                        overflow: hidden;
                }
                .dropdown .dropbtn{
                        font-size: 20px;
                        border:none;
                        outline: none;
                        color: white;
                        padding: 2px 5px;
                        background-color: inherit;
                        font-family: inherit;
                        margin: 0;
                }
                .dropdown:hover .dropbtn{
                        background-color: red;
                }
                .dropdown-content{
                        display: none;
                        position: absolute;
                        background-color: #f9f9f9;
                        min-width: 110px;
                        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                        z-index: 1;
                }
                .dropdown-content a{
                        float: none;
                        color: orange;
                        padding: 12px 16px;
                        text-decoration: none;
                        display: block;
                        text-align: left;
                }
                .dropdown-content a:hover{
                        background-color: #ddd;
                }
                .dropdown:hover .dropdown-content{
                        display: block;
                }
         }
         @media only screen and (max-width: 700px){
                .navbar .dropdown{
                        float: none;
                }
                .dropdowncontent a{
                        background-color: red;
                        position: relative;
                }
                .dropdown .dropbtn{
                        font-size: 22px;
                        background-color: red;
                        display: block;
                        width: 100%;
                        text-align: left;
                }

         }
/*end of tablet header*/

/*changes for desktop header*/
         @media only screen and (min-width: 915px){
         	.top{
         		background-color:#006400;
         		width: 100%;
         		height: 240px;
         	}
         	.header h1{
         		margin-left: 50px;
         		font-weight: bolder;
         		font-size: 40px;
         	}
         	.header img{
         		width: 150px;
         		height: 150px;
         	}
         	.navbar{
         		margin-right: 50px;
         		width: 650px;
         	}
         	.navbar a{
         		padding: 2px;
         		font-size: 20px;
         	}
         	.navbar .active{
         		color: orange;
         	}
         	.navbar a:hover{
         		color: steelblue;
         	}
                 .dropdown{
                        float: left;
                        overflow: hidden;
                }
                .dropdown .dropbtn{
                        font-size: 20px;
                        cursor: po
                        border:none;
                        outline: none;
                        color: white;
                        padding: 2px 5px;
                        background-color: inherit;
                        font-family: inherit;
                        margin: 0;
                }
                .dropdown:hover .dropbtn{
                        background-color: red;
                }
                .dropdown-content{
                        display: none;
                        position: absolute;
                        background-color: #f9f9f9;
                        min-width: 110px;
                        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                        z-index: 1;
                }
                .dropdown-content a{
                        float: none;
                        color: orange;
                        padding: 12px 16px;
                        text-decoration: none;
                        display: block;
                        text-align: left;
                }
                .dropdown-content a:hover{
                        background-color: #ddd;
                }
                .dropdown:hover .dropdown-content{
                        display: block;
                }
         }
/*end of desktop header*/
	</style>
</head>
<body>
<section>
<!--sidenav begins-->
	<div id="sidebar" class="navbar">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="index.php">Home</a>
		<a href="about.php">About Us</a>
		<div class="dropdown">
                       <button class="dropbtn">Leadership</button>
                       <div class="dropdown-content">
                               <a href="leader.php">Leader</a><br>
                               <a href="secretariat.php">Sec</a><br>
                               <a href="cordinator.php">Cord</a>
                       </div>
                </div>
                <div class="dropdown">
                       <button class="dropbtn">Committe</button>
                       <div class="dropdown-content">
                               <a href="leader.php">Leader</a><br>
                               <a href="secretariat.php">Sec</a><br>
                               <a href="cordinator.php">Cord</a>
                       </div>
                </div>
                <div class="dropdown">
                       <button class="dropbtn">Committe</button>
                       <div class="dropdown-content">
                               <a href="leader.php">Leader</a><br>
                               <a href="secretariat.php">Sec</a><br>
                               <a href="cordinator.php">Cord</a>
                       </div>
                </div>
		<a href="resource.php">Resources</a>
		<a href="contact.php">Contact</a>
		<p><i>&copy hoyocon.org 2020</i></p>
	</div>

<!--end of side navbar-->

<!--begins header-->
	<div class="top">
		<div class="header">
		    <img src="images/logo.jpg"><h1>Homabay County Youth Network(HOCOYON)</h1>
	    </div>
	    <div class="main">
	        <span style="font-size:50px; color:blue;cursor: pointer"onclick="openNav()">&#9776;</span>
	    </div>
	</div>
<!--end of header-->

<!--script for navbar opening and closing-->
	<script type="text/javascript">
        function openNav(){
	    document.getElementById("sidebar").style.width="300px";
	    document.getElementById("main").style.marginLeft="300px";
        }
        function closeNav(){
	    document.getElementById("sidebar").style.width="0";
	    document.getElementById("main"),marginLeft="0";
        }
	</script>
<!--end of script-->
</section>







