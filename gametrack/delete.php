<?php
 $gaming_id=$_GET['gaming_id'];

 $dbname="gametrack";
 $conn= mysqli_connect("localhost","root","",$dbname);

 if(!$conn){
 	die("connection failed:".mysqli_Connect_error());

 }

if($_GET){
    if(isset($_GET['delete'])){
        delete();
    }
}

    function delete()
    {
    	$delete1 =("DELETE FROM `customer` WHERE id = '$gaming_id'");
        $result = mysqli_query($conn,$delete1) or die(mysqli_error());
        
	echo "record deleted";
   
}

?>