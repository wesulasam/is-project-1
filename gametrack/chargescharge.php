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
		float:right;
		width:25%;
		padding:10px;
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
		<a href="#Home">Home</a>
	</div>

 
 <div class = "row" align="center">
		<div class = "column" style ="background-color: purple;">
			<h2>Station 1</h2>
	<form action="server.php" method="post">
		<?php


		echo "Total charge is:".compute();

		?>
		<br>
		<br>
		<input type="submit" name="save" value="save">
	</form>		
</div>
<div class = "row" align="center">
		<div class = "column" style ="background-color: purple;">
			<h2>Station 2</h2>
			<form action="server.php" method="post">
		<?php

		echo "Total charge is:".compute();

		?>
		<br>
		<br>
		<input type="submit" name="save" value="save">
	</form>

</div>

<div class = "row" align="center">
		<div class = "column" style ="background-color: purple;">
			<h2>Station 3</h2>
			<form action="server.php" method="post">
		<?php

		echo "Total charge is:".compute();

		?>
		<br>
		<br>
		<input type="submit" name="save" value="save">
	</form>
</div>			
<div class = "row" align="center">
		<div class = "column" style ="background-color: purple;">
			<h2>Station 4</h2>
			<form action="server.php" method="post">
		<?php

		echo "Total charge is:".compute();

		?>
		<br>
		<br>
		<input type="submit" name="save" value="save">
	</form>
</div>

<div class = "row" align="center">
		<div class = "column" style ="background-color: purple;">
			<h2>Station 5</h2>
			<form action="server.php" method="post">
		<?php

		echo "Total charge is:".compute();

		?>
		<br>
		<br>
		<input type="submit" name="save" value="save">
	</form>
</div>

<div class = "row" align="center">
		<div class = "column" style ="background-color: purple;">
			<h2>Station 6</h2>
			<form action="server.php" method="post">
		<?php

		echo "Total charge is:".compute();

		?>
		<br>
		<br>
		<input type="submit" name="save" value="save">
	</form>
</div


	<?php
	 
	 function compute()
	 
	 {
	 	$number;
	 	$charges;

	 	$number= $_POST['number'];
	 	$charges = $_POST['charges'];

	 	$multiply = $number*$charges;
	 	
	 	return $multiply;
	 }

	echo" Total charge is :".compute();

	?>
	<br>

</body>
</html>