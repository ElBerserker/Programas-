<!-- Raul_Hernandez_Lopez
freeenrfy1975@gmail.com-->
<!DOCTYPE html>
<html> 
	<head>
		<title> La Curva Loca </title>
		<meta charset="UTF-8">
	</head>
	<body>
	<form method="post" action="<?php $_SERVER['PHP_SELF'] ;?>">
	<h2> Compañía de autobuses “La curva loca” </h2>
	<br />
	<br />
	<label> El costo por km es de $17 </label>
	<br />
	<br />
	Ingresa la distancia en km de tu destino :<input type"text"  name="distancia"> 
	<input type="submit">
	<br />
	<br />
	</form>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$Distancia = $_POST['distancia'];
	$km = 17;
	$costo = $km * $Distancia;

	echo "El costo de tu viaje es de: $costo , buen viaje!";
	}
	?>
	</body>
</html>
