<html>
<body>
 
	<?php
	 
	 function compute()
	 
	 {
	 	$number= $_POST['number'];
	 	$charges = $_POST['charges'];

	 	$multiply = $number*$charges;
	 	
	 	return $multiply;
	 }

	echo" Total charge is :".compute();

	?>
	<br>

</body>
</html>