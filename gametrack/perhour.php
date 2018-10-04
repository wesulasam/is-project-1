<!DOCTYPE html>
<html>
<head>
	<style>
	p{
		text-align: center;
		font-size: 70px;
		margin-top: 0px;
	}
</style>

</head>
<body>

	<p id="time"></p>
	<P>
<form action = "perhourcharge.php" method = "post">
		Number of hours <select name = "hours">
			<option value = "1">1</option>
			<option value = "2">2</option>
			<option value = "3">3</option>
			<option value = "4">4</option>
			<option value = "5">5</option>
			<option value = "6">6</option>
			<option value = "7">7</option>
			<option value = "8">8</option>
			<option value = "9">9</option>
			<option value = "10">10</option>
		</select>
		<br>
		<br>
		Price per hour   <select name = "price">
			<option value = "100">100</option>
			<option value = "120">120</option>
			<option value = "150">150</option>
			<option value = "180">180</option>
			<option value = "200">200</option>
			<option value = "250">250</option>
		</select>
	</form>
	<br>
	<br>

	<input type = "submit" name="Calculate" value = "Calculate">
</P> 
</body>
</html>