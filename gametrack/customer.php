<!DOCTYPE html>
<html>
<head>
<style>

<style>

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}


body{

	background-color: #808080;
}
</style>
</head>
<body>

	<form action="customer.php" method="post">

	<table>
		<tr>
			<th>Id</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Action</th>

	</tr>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gametrack";


$conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT gaming_id,first_name,last_name,email FROM customer";
$result = $conn->query($sql);

if ( $result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
    	$id= $row['gaming_id'];
    	$fname=$row['first_name'];
    	$lname=$row['last_name'];
    	$email=$row['email'];

    	//name variable according to how the appear on database
    	echo "<tr>";
    	echo "<td>".$row["gaming_id"]."</td>";
    	echo "<td>".$row["first_name"]."</td>";
    	echo "<td>".$row["last_name"] ."</td>";
    	echo "<td>".$row["email"]."</td";
   		echo '<td><input type="button" name="delete" value="delete">]</td>';
    	echo "</tr>";

    }

    echo "<table>";

} else {
    echo "0 results";
}
 
include('delete.php');

$conn->close();
?> 

</table>
</form>
</body>
</html>






