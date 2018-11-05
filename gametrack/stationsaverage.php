<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style>
body{

	background-color: #808080;
}

</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<table class='table table-bordered'>
<tr>
<th>Station Average</th>
</tr>
<?php
$hostname="localhost";
$username="root";
$password="";
$db = "gametrack";
$conn=mysqli_connect("localhost","root","","gametrack");
foreach($conn->query('SELECT station_id,AVG(amount)
FROM charges GROUP BY station_id') as $row) {
echo "<tr>";
echo "<td>" . $row['station_id'] . "</td>";
echo "<td>" . $row['AVG(amount)'] . "</td>";
echo "</tr>";
}
?>
</table>
</div>
</div>
</div>

<center>
<button onclick="goBack()">Back</button>

<script>
function goBack() {
    window.history.back();
}
</script>

</center>



</body>
</html>

