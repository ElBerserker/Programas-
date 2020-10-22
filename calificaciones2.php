<!DOCTYPE html>
<html>
	<head><title>prueba 1</title></head>
	<body>
	<form id="form" name="form" action="">
	<label>ingresa un numero</label>
	<input type="text" id="num1" name="num2">
	<br />
	<br />
	<label>ingresa otro numero</label>
	<input type="text" id="num2" name="num2">
	<button type"button" onclick="multiplicacion();"> 
	</form>
	<?php 
	function (){
		$Num1=$_POST["num1"];
		$Num2=$_POST["num2"];
		
		total= Num1 * Num2
		
	echo <h2>.'el resultado de tu multiplicacion es de :' <h2>. $total</h2>; 
	}
	?>
	</body>
	</html>
