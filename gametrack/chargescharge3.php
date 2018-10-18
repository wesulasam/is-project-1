<?

include(`server3.php`);

?>



<html>
<head>
	<style>
	.sidenav{
		height: 100%;
		width: 270px;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		background-color: #111;
		overflow-x: hidden;
		padding-top: 20px;
	}
	.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
	}
	.sidenav a:hover {
    color: #f1f1f1;
	}

		
		{
		box-sizing: border-box;
		align-self: right;
	}
		.column{
		float:center;
		width:80%;
		padding:250px;
		height:300px;
		align-items: center;
		align-self: center;
	}

	.row:after{
		content:"";
		display: table;
		clear: both;
	}
	p {
		background-color: black;
	}

</style>
	</style>

</head>
<body>
	<div class = "sidenav">
		<a href="gametrackhome.html">Home</a>
	</div>

 
 <div class = "row" align="center">
		<div class = "column" style ="background-color:#808080;">
			<h2>Station 3</h2>
	<form action="server3.php" method="post">
		Station Id  <select name = "station_id">
			<option value = "3">3</option>
		</select>
		<br>
		<br>
		<br>
		<br>
		<input type="text" name="amount1" placeholder="Enter amount" required>
		<br>
		<br>
		<?php
	 
	 function compute()
	 
	 {

	 	$number= $_POST['number'];
	 	$charges = $_POST['charges'];

	 	$multiply = $number*$charges;
	 	
	 	return $multiply;
	 }



		echo "Amount is:".compute();

		?>
		<br>
		<br>
		<input type="submit" name="Save" value="Save">
	</form>		
</div>

</body>
</html>