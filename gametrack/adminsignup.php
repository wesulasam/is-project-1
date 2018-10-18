<?php
include('server2.php');
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
		float: center;
		width:100%;
		padding:100px;
		height:150px;
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
		<div class = "column" style ="background-color: 808080;">

			<h1>Sign Up</h1>
			
			<form action="server2.php" method="post">
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
		<div class="miniPanel">
			<div class = "row" align="center">
		<div class = "column" style ="background-color:808080;">
			<h1>Sign In</h1>
			<form action="server2.php" method="post">
				<input type="email" name="c_email" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
				<br>
				<input type="password" name="c_password" placeholder="password" pattern=".{6,}" title="six or more characters required" required>
				<br><br>
				<input type="submit" name="loginBtn" value="login"><br><br>
				<?php
					include('server2.php');
				?>
			</form>
		</div>
		

</section>
</body>
</html>