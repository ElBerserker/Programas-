<!--RAUL_HERNANDE_LOPEZ
    freeenergy1975@gmail.com
    30 de novimbre del 2020

    Un vendedor ha realizado N ventas y desea saber cuántas fueron por 10,000 o menos, 
    cuántas fueron por más de 10,000 pero por menos de 20,000, y cuánto fue el monto de 
    las ventas de cada una y el monto global. Realice un algoritmo para determinar los 
    totales. Represente la solución mediante diagrama de flujo, pseudocódigo.
-->

<!DOCTYPE html>
<html>
   <head>
     <title>VENTAS</title>
      <meta charset="UTF-8">
   </head>
   <body>
 
   <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   <!--Entrada de datos-->
        <p> No. de ventas </p>
        Venta N. 1 ventas :
        <input type="text" name="venta_1">
         Venta N. 2 ventas :
        <input type="text" name="venta_2">
         Venta N. 3 ventas :
        <input type="text" name="venta_3">
         Venta N. 4 ventas :
        <input type="text" name="venta_4">
         Venta N. 5 ventas :
        <input type="text" name="venta_5">
	
	<input type="submit"> 
   </form>
   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
	//Declaracion de variables
	$venta1 = $_POST['venta_1'];
	$venta2 = $_POST['venta_2'];
	$venta3 = $_POST['venta_3'];
	$venta4 = $_POST['venta_4'];
	$venta5 = $_POST['venta_5'];
	$ventamenor1 = 0, $ventamenor2 = 0, $ventamenor3 = 0, $ventamenor4 = 0, $ventamenor5 = 0;
	$ventamayor1 = 0, $ventamayor2 = 0, $ventamayor3 = 0, $ventamayor4 = 0, $ventamayor5 = 0;

	$monto_global = $venta1 + $venta2 + $venta3 + $venta4 + $venta5;

	if($venta1 < 10000){
		$ventamayor1 = 1;						
	}
	elseif($venta1 > 10000 && $venta1 <= 20000){
		$ventamenor1 = 1;	
	}

	if($venta2 < 10000){
                $ventamayor2 = 1;
        }
        elseif($venta2 > 10000 && $venta2 <= 20000){
                $ventamenor2 = 1;
        }

	  if($venta3 < 10000){
                $ventamayor3 = 1;
        }
        elseif($venta3 > 10000 && $venta3 <= 20000){
                $ventamenor3 = 1;
        }
	
	  if($venta4 < 10000){
                $ventamayor4 = 1;
        }
        elseif($venta4 > 10000 && $venta4 <= 20000){
                $ventamenor4 = 1;
        }
	
	  if($venta5 < 10000){
                $ventamayor5 = 1;
        }
        elseif($venta5 > 10000 && $venta5 <= 20000){
                $ventamenor5 = 1;
	}
	
	$suma_menor = $ventamenor1 + $ventamenor2 + $ventamenor3 + $ventamenor4 + $ventamenor5;
	
	$suma_mayor = $ventamayor1 + $ventamayor2 + $ventamayor3 + $ventamayor4 + $ventamayor5;
	
	echo "realizaste" . $suma_menor . "ventas menores a 10000";
	echo "realizaste" . $suma_mayor . "ventas mayores a 10000 pero menores a 20000";
	echo "mientras que el monto global es de " . $monto_global;
   }
?>
</body>
</html>

   
