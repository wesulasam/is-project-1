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

</head>
<body>
	<div class = "sidenav">
		<a href="gametrackhome.php">Home</a>
		<a href="game.php">Game</a>
	</div>

 
 <div class = "row" align="center">
		<div class = "column" style ="background-color:#808080;">
			<h2>Update Game</h2>
	<form action="server3.php" method="post">
	Genre   <select name = "gametype" required>
			<option value = "Sport">Sport</option>
			<option value = "Action">Action</option>
			<option value = "Simulation">Simulation</option>
			<option value = "Racing">Racing</option>
			<option value = "Adventure">Adventure</option>
			<option value = "Horror">Horror</option>
		</select>
		<br>
		<br>
	<input type="text" name="gamename" placeholder="Game Name" required>
	<br>
	<br>
	<input type="submit" name="save" value="Update">
</form>
</div>
</body>
</html>