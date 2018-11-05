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


</style>
</head>
<body>

<center>
    <form action="game.php" method="post">

    <table>
        <tr>
            <th>Game Type</th>
            <th>Game Name</th>
            

    </tr>

    <div class = "sidenav">
        <a href="gametrackhomelogin.php">Home</a>
        <a href="station1.php">Station 1</a>
        <a href="station2.php">Station 2</a>
        <a href="station3.php">Station 3</a>
        <a href="station4.php">Station 4</a>
    

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gametrack";


$conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT game_type,game_name FROM game";
$result = $conn->query($sql);

if ( $result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $gametype=$row['game_type'];
        $gamename=$row['game_name'];

        //name variable according to how the appear on database
        echo "<tr>";
        echo "<td>".$row["game_type"]."</td>";
        echo "<td>".$row["game_name"] ."</td>";
        echo "</tr>";

    }

    echo "<table>";

} else {
    echo "0 results";
}

$conn->close();
?> 

</table>
</form>
</center>
</body>
</html>






