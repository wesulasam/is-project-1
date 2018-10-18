<!DOCTYPE html>
<html>
<head>
	<style>
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


	{
		box-sizing: border-box;
		align-self: right;
	}

.column{
		float: center;
		width:70%;
		padding:250px;
		height:150px;
		align-items: center;
		align-self: center;
	}

	.row:after{
		content:"";
		display: table;
		clear: both;
	}

</style>
</head>

<body>
	<div class = "sidenav">
		<a href="gametrackhome.html">Home</a>
		<a href="charges.php">Charges</a>

	</div>

	<form action = "chargescharge4.php" method = "post">

	<div class = "row" align="center">
		<div class = "column" style ="background-color:#808080;">
			<h2>Station 4</h2>
		<p>	
	<form action = "perhourcharge.php" method = "post">
		Station Number <select name ="station" required>
			<option value = "4">4</option>
		</select>
		<br>
		<br>
		Select Charges <select name = "charges" required>
			<option value = "30">30</option>
			<option value = "40">40</option>
			<option value = "50">50</option>
			<option value = "60">60</option>
			<option value = "70">70</option>
			<option value = "80">80</option>
			<option value = "90">90</option>
			<option value = "100">100</option>
		</select>
		<br>
		<br>
		Games played <select name= "number">
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
			<option value = "11">11</option>
			<option value = "12">12</option>
			<option value = "13">13</option>
			<option value = "14">14</option>
			<option value = "15">15</option>
			<option value = "16">16</option>
			<option value = "17">17</option>
			<option value = "18">18</option>
			<option value = "19">19</option>
			<option value = "20">20</option>
		</select>
		<br>
		<br>
<input type = "submit" name="Calculate" value = "Calculate">

		
</form>
</body>
</html>