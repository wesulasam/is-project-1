<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "gametrack";

$id="";
$fname="";
$lname="";
$email="";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {

	$connect = mysqli_connect ($host, $user, $password, $database);

} catch (Exception $ex){

	echo"error";

}

function getPosts()
{
	$posts = array();
	$posts[0] = $_POST['id'];
	$posts[1] = $_POST['fname'];
	$posts[2] = $_POST['lname'];
	$posts[3] = $_POST['email'];

	return $posts;
}

if (isset($_POST['search']))
{
	$data = getPosts();

	$search_Query = "SELECT * FROM customers WHERE id = $data[0] ";

	$search_Result =  mysqli_query($connect, $search_Query );

	if($search_Result)
	{
		if (mysqli_num_rows($search_Result))
		{
		  while ($row = mysqli_fetch_array($search_Result))
		  {
		  	$id = $row['id'];
		  	$fname = $row['fname'];
		  	$lname = $row['lname'];
		  	$email = $row['email'];
		  }

		} else {
			echo 'No record for this Id ';
		}
	} else {

		echo 'Result Error';
	}

}

?>

<html>
<head>
	<title></title>
</head>
<body>
	<form action = "customer2.php" method="post">
		<input type = "number" name = "id" placeholder ="ID" value ="<?php echo $id; ?>"><br><br>
		<input type = "text" name = "fname" placeholder ="First Name" value ="<?php echo $fname; ?>"><br><br>
		<input type = "text" name = "lname" placeholder ="Last Name" value ="<?php echo $lname; ?>"><br><br>
		<input type = "text" name = "email" placeholder ="email" value ="<?php echo $email; ?>"><br><br>

		<div>
			<input type = "submit" name = "delete" value = "delete">
			<input type = "submit" name = "search" value = "search">

		</div>
		
	</form>	



</body>
</html>