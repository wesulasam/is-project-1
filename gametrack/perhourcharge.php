<html>
<body>

<?php

 function compute()
 {
	$hours= $_POST('hours');
	$price= $_POST('price');

	$total= $hours*$price;

	return $total;

}

echo "Total charge is:".compute();
 
$startTime= date("H:i:s");

echo "starting Time:".$startTime;

$cenvertedTime = date("H:i:s",strtotime("+2 hour",strtotime($startTime)));

echo ".$cenvertedTime;"

?>
</body>
</html>