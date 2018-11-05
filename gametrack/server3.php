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
	
	if(isset($_POST['save'])){

		$gametype=$_POST['gametype'];
		$gamename=$_POST['gamename'];


			$sql = "INSERT INTO `game`(`game_type`,`game_name`) VALUES ('$gametype','$gamename')";
			$result = $db->query($sql);
			if ($result) {
				header('location:game.php');
			}
			else{
				echo "Error:" .$sql . "<br>" . $db -> error;
			}
			

		}
	
?>