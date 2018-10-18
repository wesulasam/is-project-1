<!DOCTYPE html>
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
	
</style>
</head>

<body>

	<img src="lebronjames.jpg" alt="lebronjames.jpg" style="width: 100%;height: 100%">
	
	<div class = "sidenav">
		<a href="#Home">Home</a>
		<a href="station1.php">Station 1</a>
		<a href="station2.php">Station 2</a>
		<a href="station3.php">Station 3</a>
		<a href="station4.php">Station 4</a>
		<a href="station5.php">Station 5</a>
		<a href="station6.php">Station 6</a>
		<a href="customer.php">Customer</a>



	</div>

</body>
</html>