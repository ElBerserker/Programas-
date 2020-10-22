<!DOCTYPE html>
<html>
	<head> 
		<title> bicicleta </title>
		<meta charset="UTF-8">
	</head>
	<form method="post" action="<?php $_SERVER['PHP-SELF'];?>">
	<input type="submit">
	<table>
	<td>
		<tr>
		<h1>calcula el tiempo que tardaste en hacer un recorrido</h1>
		<tr>
		Cual es la distancia que recorriste? :<input type="text" name="distancia1" id="distancia1">
		</tr>
		<tr>
		A que velocidad?<input type="text" name="velocidad1">
		</tr>
	</td>
		
	<td>
		<tr>
		<h1>calcula la distancia que recorriste</h1>
		</tr>
		<tr>
		A que velocidad 'km/hr' realizaste tu recorrido? :<input type="text" name="velocidad2">
		</tr>
		<tr>
		En cuanto tiempo 'hrs' ? :<input type="text" name="tiempo2">
		</tr>
	</td>
	
	<td>
		<tr>
		Que distancia recorriste'km'? :input type
		</tr>
		En cuanto tiempo'hrs' ?:	
		</tr>
	</td>
	</table>
	</form>
	<?php
	if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
	}	
	?>
