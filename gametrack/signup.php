<?php
include('server.php');
?>
<html>
<head>
	<title>signup</title>
		<link rel="stylesheet" type="text/css" href="mainStyle.css">
		<style>
	{
		box-sizing: border-box;
		align-self: center;
	}

	.column{
		float: right;
		width:25%;
		padding:100px;
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
	<section>
		<div class="miniPanel">
			<div class = "row" align="center">
		<div class = "column" style ="background-color: purple;">
			<h2>Dont have an account?</h2>	
			<h1>Sign Up</h1>
			<form action="server.php" method="post">
				<input type="text" name="fname" placeholder="First Name" required>
				<br>
				<br>
				<input type="text" name="lname" placeholder="Last Name" required>
				<br>
				<br>
				<input type="email" name="c_email" placeholder="email" required>
				<br>
				<br>
				<input type="password" name="c_password" placeholder="password" required>
				<br>
				<br>
				<input type="submit" name="signup" value="Signup">
				<br>
				<br>
			</form>
		</div>

</section>
</body>
</html>