<!--HERNANDEZ_LOPEZ_RAUL
    freeenergy1975@gmail.com
    1 de Diciembre del 2020
    Realice un algoritmo que determine el sueldo semanal de N traba­jadores considerando que se 
    les descuenta 5% de su sueldo si ganan entre 0 y 150 pesos. Se les descuenta 7% si ganan más 
    de 150 pero menos de 300, y 9% si ganan más de 300 pero menos de 450. Los datos son horas 
    trabajadas, sueldo por hora y nombre de cada tra­bajador.-->
<!DOCTYPE php>
<html>
   <head>
	<title>Sueldo semanal</title>
	<meta charset="UTF-8">
   </head>
   <form method="post" action="<?php $SERVER['PHP-SELF'];?>">
   <!--Entrada de datos por formulario-->
   <h5>Nombre del trabajador</h5>
   <input type="text" name="nombre">
   <br />
   <h5>Pago por hora</h5>
   <input type="text" name="pagoHora">
   <br />
   <h5>Numero de horas trabajados por dia</h5>
   <input type="text" name="horasTrabajadas">
   <br />
   <h5>Dias trabajados por semana</h5>
   <input type="text" name="diasTrabajados">
   <br />
   <input type="submit"/>
   </form>

   <?php
	//Declaracion de variables
	$nombre=$_POST['nombre'];
 	$pagohora=$_POST['pagoHora'];
	$horastrabajadas=$_POST['horasTrabajadas'];
	$diastrabajados=$_POST['diasTrabajados'];
        //Determina el monto a cobrar por semana
	$sueldo_semanal = $pagohora * $horastrabajadas * $diastrabajados;
	//Determina que tipo de descuento se le hara con base a su sueldo semanal.
	if ($sueldo_semanal > 0 && $sueldo_semanal <= 150 ){
		$sueldo_a_cobrar = $sueldo_semanal * 0.95;
		echo "<br />" . "<h5>" . "El monto a cobrar es de $" . $sueldo_a_cobrar 
			. " Buen dia " . $nombre .  "</h5>";		
	}
	elseif ($sueldo_semanal > 150 && $sueldo_semanal < 300){
		$sueldo_a_cobrar = $sueldo_semanal * 0.93;
		echo "<br />" . "<h5>" . "El monto a cobrar es de $" . $sueldo_a_cobrar 
			. " Buen dia " . $nombre . "</h5>";
	}
	elseif ($sueldo_semanal >= 300 && $sueldo_semanal <= 450 ){
		$sueldo_a_cobrar = $sueldo_semanal * 0.91;
		echo "<br />" . "<h5>" . "El monto a cobrar es de $" . $sueldo_a_cobrar
			. " Buen dia " . $nombre . "</h5>";
	}
	else{
		echo "<h5>" . "No aplica descuento, Monto a cobrar $" . $sueldo_semanal
			. " Buen dias " . $nombre . "</h5>";
	}
    ?>
   </body>
</html>

