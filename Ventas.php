<!--Raul_Hernandez_Lopez
freeenergy1975@gmail.com-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ventas</title>
        <style>
        .formato {
                background-color: rgb(0, 0, 0);
                color: white;
                border: 2px solid black;
                margin:20px;
                padding: 20px;
        }
        </style>
        </head>
        <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <p> No. de ventas </p>
        Venta N. 1 ventas :
        <input type="text" name="venta_1" id="venta_1">
	 Venta N. 2 ventas :
        <input type="text" name="venta_2" id="venta_2">
	 Venta N. 3 ventas :
        <input type="text" name="venta_3" id="venta_3">
	 Venta N. 4 ventas :
        <input type="text" name="venta_4" id="venta_4">
	 Venta N. 5 ventas :
        <input type="text" name="venta_5" id="venta_5">

	<input type="submit">	
	<?php
	    if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$mayor = 0;
		$menor = 0;
		$SUMA_MENOR = 0;
		$SUMA_MAYOR = 0;
		$MONTO_GLOBAL = 0;
	        $VENTA_1 = $_POST['venta_1'];
		$VENTA_2 = $_POST['venta_2'];
                $VENTA_3 = $_POST['venta_3'];
                $VENTA_4 = $_POST['venta_4'];
                $VENTA_5 = $_POST['venta_5'];
		$Ventas = [$VENTA_1, $VENTA_2, $VENTA_3, $VENTA_4, $VENTA_5]; 		

		    for($x = 1	; $x <= 5 ; $x++){
			$MONTO_GLOBAL += $Ventas[$x]
		        if (($Ventas[$x] >= 0) and ($Ventas[$x] <= 10000)){
			    $SUMA_MENOR += $Ventas[x$];
			    $menor += 1;
			} 		    
			elseif (($Ventas[$x] > 100000 ) and ($Ventas[$x] <= 20000)){
			    $SUMA_MAYOR += $Ventas[$x];
			    $mayor += 1;
			}
		    }
		echo "Realizaste " . $menor . "ventas menores a 10,000 el monto de estas es [$"
		. $SUMA_MENOR . "]";
		
		echo "Realizaste " . $mayor . "ventas mayores a 10,000 el monto de estas es [$"                    
		. $SUMA_MAYOR . "]";  
	
		echo "Mientras que el monto global es de [$" . $MONTO_GLOBAL . "]";
	    }
	?>
        </body>
</html>

