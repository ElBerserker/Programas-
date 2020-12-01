<!--Hernandez Lopez Raul
    freeenergy1975@gmail.com
    30 de octubre del 2020
    Se requiere determinar el tiempo que tarda una persona en llegar de una ciudad 
    a otra en bicicleta, considerando que lleva una velocidad constante. Realice un 
    diagrama de flujo y pseudocódigo que repre­senten el algoritmo para tal fin.-->

<!DOCTYPE html>
<html>
   <head>
       <title>BICICLETA</title>
       <meta charset = "UTF-8">
   </head>
   <body>
   <form method="post" action="<?php $_SERVER['PHP-SELF'];?>">

   <h1>calcula el tiempo que tardaste en hacer un recorrido</h1>
   <!--Recoleccion de datos-->
   Cual es la distancia que recorriste? : 
   <input type="text" name="distancia1">

   A que velocidad? : 
   <input type="text" name="velocidad1">

  <input type="submit">
  
   </form>
   <?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$velocidad = $_POST['distancia1'];
		$distancia = $_POST['velocidad1'];
		$tiempo = $velocidad * $distancia;

		echo "<h1>" . "\nEl tiempo que tardaste en recorrer " . $distancia 
			. " es de " . $tiempo . " hrs" . "</h1>";
	}
   ?>
   </body>
</html

