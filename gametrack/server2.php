<?php

	$db=mysqli_connect("localhost","root","","gametrack");
					
					
					if(isset($_POST['Save'])){
		
		$station_id=$_POST['station_id'];
		$amount1=$_POST['amount1'];


			$sql = "INSERT INTO `charges`(`station_id`,`amount`) VALUES ('$station_id','$amount1')";
			$result = $db->query($sql);
			if ($result) {
				header('location:charges.php');
			}
			else{
				echo "Error:" .$sql . "<br>" . $db -> error;
			}
			

		}

?>