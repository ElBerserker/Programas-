<!DOCTYPE html>

<html>

<head>
	
<meta charset="UTF-8">

<title> Calificaciones</title>

</head>

<body>

<form id="form" name"form" action="" >

<label> Ingresa la calificacion que obtuviste</label>

<br />

<br />

<select name="select" id"calificaciones">

<option value = "1"> 10 </option>

<option value = "2"> 9 </option>

<option value = "3"> 8 </option>

<option value = "4"> 6-7 </option>

<option value = "5"> 5 </option>

</select>

<br />

<br />

<input type="submit" name="submit" id="submit" value="Enviar"/>

</form>

<?php

if(!empty($_POST["calificaciones"])){

$seleccion = $_POST["calificaciones"];

$mensaje = "Tu calificacion es ";

if(seleccion == 1){echo<h2> . $mensaje . 'A, tus esfuerzos rindieron frutos!' . </h2>;}

if(sleccion == 2){echo $mensaje . 'B, sigue asi! :D';}

if(seleccion == 3){echo $mensaje . 'C, puedes hacerlo mejor!';}
	
if(seleccion == 4){echo $mensaje . 'D, nunca es tarde para hacer lo correcto';}
	
if(seleccion == 5){echo $mensaje . 'F, pinche inutil!';}

}

?>
 
</body>

</html>	




