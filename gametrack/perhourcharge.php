<html>
<body>
	<form>
		Number of hours <select name = "time">
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
		
<p id="hours"></p>

<button onclick = "gamehours()">Start</button>
<input type="text" id="txt">

<script>
	function gamehours(){
	    var a =document.getElementById("txt");
		setTimeout(function(){a.value="1"},1000);
		   
	}
</script>
<br>
<br>
<input type ="submit" name = "save" value="save">

<?php
 function compute()
 {
	$hours= $_POST('hours');
	$price= $_POST('price');

	$total= $hours*$price;

	return $total;

}

?>
</body>
</html>