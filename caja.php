<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>caja registradora</title>
	</head>
	<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<label>selecciona que es lo que quires hacer</label>
	<br />
	<br />
	<select name="select" id="opciones" >
		<option value="1">calcular el total en monedas</option>
		<option value="2">calcular el total en billetes</option>
		<option value="3">calcular el total de billtes y monedas</option>
	</select>
	<br />
	<br />
	<button type="button" id="button" onclick="prueba ();"/>
	</form>
<?php
  function prueba (){
  $option = $_POST["seleccion"];
		
	switch ($option){
          case "1"
		
		for ($x = 0; $x <= $option; x++){
			echo 
}
	}

		
		
		
	}
?>
</body>
</html>	
