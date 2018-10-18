<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

	$db=mysqli_connect("localhost","root","","gametrack");
					
					
					
	if(isset($_POST['signup'])){
		$fname=$_POST['fname'];
		
		$lname=$_POST['lname'];
		$c_email=$_POST['c_email'];
		$c_password=$_POST['c_password'];

		$c_password=md5($c_password);


			$sql="INSERT INTO `customer`(`first_name`, `last_name`, `email`, `password`) VALUES ('$fname','$lname','$c_email','$c_password')";
				$result= $db->query($sql);
				if ($result) {
					header('location:signup.php');
				}else{
					echo "Error:" .$sql ."<br>". $db->error;
				}
				}


	
	else if(isset($_POST['loginBtn'])){
		//if login button is clicked

//addition
		$query_c_email="email";
		$query_c_password="password";
		$c_email=$_POST['c_email'];
		$c_password=$_POST['c_password'];
		
		$query = "SELECT * from customer WHERE email='$c_email' AND password='$c_password'";
		$result = mysqli_query($db,$query);
		$rowNum = mysqli_num_rows($result);

		if(($c_email==$query_c_email)&&($c_password==$query_c_password)){
			echo "Log in Success";
		}else{
			$message = "incorrect user name or password";

			echo "<script type='text/javascript'>alert('$message');</script>";
		}
//addition
		
		if($rowNum==1){
			while($row=mysqli_fetch_array($result)){
				
				$fname=$row['fname'];
				$lname=$row['lname'];
				$c_email=$row['c_email'];
				$c_password=$row['c_password'];
			}
			if($fname==$first_name && $c_password==$password){
				
				$fname=$_SESSION['ses_fname'];
				$lname=$_SESSION['ses_lname'];
				$c_email=$_SESSION['ses_c_email'];
				$c_password=$_SESSION['ses_c_password'];
				
				header("Location: gametrackhome.html");
			}
		}else{

			echo "Invalid Login";
		}
		
	}
	
	else if(isset($_POST['logout'])){//if logout is clicked
		session_destroy();
		unset($_SESSION['first_name']);
		header("Location:signup.php");
	}

?>  
<a href="signup.php">Try again</a>

</body>
</html>