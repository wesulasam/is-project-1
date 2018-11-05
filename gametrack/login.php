<head>
	
	<link rel="stylesheet" type="text/css" href="mainStyle.css">
	
</head>
<body>
	<section>
		<div class="miniPanel">
			<h1>Login</h1>
			<form action="server.php" method="post">
				<input type="email" name="c_email" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
				<br>
				<input type="password" name="c_password" placeholder="password" pattern=".{6,}" title="six or more characters required" required>
				<br><br>
				<input type="checkbox" name="checkB">Remember Me<br><br>
				<input type="submit" name="loginBtn" value="login"><br><br>
				
				
			
			</form>
		</div>	
	</section>
</body>