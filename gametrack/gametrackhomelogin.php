<?php

require'connection.php';
?>
<html>
<head>
	<script type="text/javascript">
			var angle = 0;
			function galleryspin(sign) { 
			spinner = document.querySelector("#spinner");
			if (!sign) { angle = angle + 45; } else { angle = angle - 45; }
			spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");
			}
		</script>
	<style>
	body{
		margin: 0%;
		font-family: arial;
	}
	.topnav{
		overflow:hidden;
		background-color:#808080;
		padding: 30px;
		align-content: left;
		font-size: 30px;


	}

	.topnava{
		float:left;
		color:purple;
		text-align: left;
		padding:50px;
		text-decoration: none;
		font-size: 50px;
	}

	.topnav a:hover{
		background-color:white;
		color: purple;
	}

	.topnav a.active{
		background-color:black;
		color: purple;
	}

	.topnav-right{
		float: right;
	}

	.navbar{
		overflow: hidden;
		background-color: #808080;
		position: fixed;
		bottom: 0;
		width: 140%
	}

	.navbara{
		float: left;
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 50px 50px;
		text-decoration: none;
		font-size: 80px;


	}

	.mySlides{display:}
	img{vertical-align: top;}

	.slideshow-container{
		max-width: 120px;
		position: relative;
		margin:auto;
	}

</style>

</head>
<body>

			<div class="topnav" >
				<a> <h1 style="color:blue;""font-size:100vw;"><em>GAMETRACK<em></h1></a>
					<div class ="topnav-right">
<center>

	 	
		 	 
		 	 <?php
$usertype = $_SESSION['permit']['type'];
		 	 ?>
		 	 
		      <a href= "game.php" > Games </a>
		       <a href="customer.php">Customer</a> 
		       
		       
		       

		    
		       	
		        <a href="statistics.php">Statistics</a>
		         <a href= "charges.php" > Charges </a> 

		     

		        
		           <a href="logout.php"> <img src="logout.png" style="height: 20px; width: 20px; margin-top: 2%"> </a> 
</center>		 
	</div>
		
	</div>


<div class = "topnav-right">
	

    </div>

		<div class = "navbar">
			<a href="https://www.instagram.com/accounts/login/">
				<img src="instagram.jpg" style="width:5px;height: 5px;border:0;">
			</a>
		</div>


			<div id="carousel">
			  <figure id="spinner">
			    <img src="fifa18.jpg" alt style="width:1500px;height:900px;" >



		

			  </figure>
			</div>
			<span style="float:left" class="ss-icon" onclick="galleryspin('-')">&lt;</span>
			<span style="float:right" class="ss-icon" onclick="galleryspin('')">&gt;</span>
</body>
</html>