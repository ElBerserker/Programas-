<!--Raul_Hernandez_Lopez
freeenergy1975@gmail.com
1/12/2020-->

<!--Un vendedor ha realizado N ventas y desea saber cuántas fueron por 10,000 o menos, 
cuántas fueron por más de 10,000 pero por menos de 20,000, y cuánto fue el monto de las 
ventas de cada una y el monto global. Realice un algoritmo para determinar los totales.-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ventas</title>
        <!--<style>
        .formato {
                background-color: rgb(0, 0, 0);
                color: white;
                border: 2px solid black;
                margin:20px;
                padding: 20px;
        }
        </style>-->
        </head>
        <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <p> No. de ventas </p>
 	<h5>Venta N. 1 ventas :</h5>
	<!--Entrada de datos-->
	<input type="text" name="venta_1" id="venta_1">
	<br />
	<h5> Venta N. 2 ventas :</h5>
	<input type="text" name="venta_2" id="venta_2">
	<br />
	<h5>Venta N. 3 ventas :</h5>
	<input type="text" name="venta_3" id="venta_3">
	<br />
	<h5>Venta N. 4 ventas :</h5>
	<input type="text" name="venta_4" id="venta_4">
	<br />
	<h5> Venta N. 5 ventas :</h5>
        <input type="text" name="venta_5" id="venta_5">
	<br />
	<br />
	<input type="submit"/>	
	</form>
	<?php
		//Declaracion de variables.
		$mayor = 0;
		$menor = 0;
		$suma_menor = 0;
		$suma_mayor = 0;
		$monto_global = 0;
		//Declaracion del arreglo venta y asignacion de valores
		$venta = [];
	        $venta[0] = $_POST['venta_1'];
		$venta[1] = $_POST['venta_2'];
		$venta[2] = $_POST['venta_3'];
                $venta[3] = $_POST['venta_4'];
                $venta[4] = $_POST['venta_5'];
		
		//Evalua los valores del arreglo y determina cuales son mayores a 0 pero 
		//menores a 10000 y los que son mayores 10000 pero menores a 20000
		for($x = 0; $x < 5; $x++){
			$monto_global += $venta[$x];
		        if ($venta[$x] >= 0 && $venta[$x] <= 10000){
			    $suma_menor += $venta[$x];
			    $menor += 1;
			} 		    
			elseif ($venta[$x] > 100000  && $venta[$x] <= 20000){
			    $suma_mayor += $venta[$x];
			    $mayor += 1;
			}
		}
		//Impresion de resultados 
		echo  "<h6>" . "Realizaste " . $menor 
			. "ventas menores a 10,000 el monto de estas es [$" 
			. $suma_menor . "]" . "</h5>";
		
		echo "<h6>" . "Realizaste " . $mayor 
			. "ventas mayores a 10,000 el monto de estas es [$" 
			. $suma_mayor . "]" . "</h6>";  
	
		echo "<h6>" . "Mientras que el monto global es de [$" 
			. $monto_global . "]" . "</h6>";
	?>
        </body>
</html>
