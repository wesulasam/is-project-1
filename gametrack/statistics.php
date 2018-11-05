<!DOCTYPE html>
<html>
<head>
<style>

<style>

.sidenav{
        height: 100%;
        width: 270px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color:black;
        overflow-x: hidden;
        padding-top: 20px;
    }
    .sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: black;
    display: block;
    }
    .sidenav a:hover {
    color: #f1f1f1;
    }


    {
        box-sizing: border-box;
        align-self: right;
    }

    column{
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
    

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 40%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: right;
    padding: 8px;
}


body{

	background-color: #808080;
}

</style>
</head>
<body>

    <div class = "sidenav">
        <a href="gametrackhomelogin.php">Home</a>
        <a href="totalaverage.php">Total Average</a>
        <a href="stationsaverage.php">Stations Average</a>



    </div>


	<table>
		<tr>
			<th>Id</th>
			<th>Station_id</th>
			<th>Amount</th>
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

$sql = "SELECT id ,station_id,amount FROM charges";
$result = $conn->query($sql);

if ( $result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
    	$id= $row['id'];
    	$station_id=$row['station_id'];
    	$amount1=$row['amount'];

    	

    	echo "<tr><td>".$row["id"]."<br></td><td>".$row["station_id"]. "<br></td><td>".$row["amount"]."<br></td></tr>";


    }

    echo "<tr><td>";

    echo "<table>";

} else {
    echo "0 results";
}

$conn->close();
?> 
</table>
</body>
</html>






      