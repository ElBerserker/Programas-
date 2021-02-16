<!--autor: RAÚL  HERNÁNDEZ LÓPEZ
correo: freeenergy1975@gmail.com
fecha: 13 de Febrero del 2021-->

<!--Captura 3 numeros y determina si son pares o no-->

<!DOCTYPE html>
<html>
   <head>
        <title> Numeros Pares </title>
        <meta charset = "UTF-8">
   </head>
   <body>
   <form method="post" action="E2_NumerosPares.php">
        <!--Entrada de datos-->
        <h6><label>Numero 1</label></h6>
	<input type="text" name="numero1">
	
	<h6><label>Numero 2</label></h6>
        <input type="text" name="numero2">

	<h6><label>Numero 3</label></h6>
        <input type="text" name="numero3">

        <br />
        <br />
        <input type="submit" value="Enviar">
   </form>
<?php
	    $numero_1 = $_POST['numero1'];
	    $numero_2 = $_POST['numero2'];
	    $numero_3 = $_POST['numero3'];
	    $numeros = array($numero_1, $numero_2, $numeros_3);

	    for($x = 0; $x < 3; $x++){ 
                if( $numeros[$x]%2 == 0 ){
                    echo '<script type="text/javascript">alert("El numero ' . $numeros[$x] .' es par");</script>';
                }
                else{
                    echo '<script type="text/javascript">alert("El numero ' . $numeros[$x] . ' es impar");</script>';
		}
	   }	
   ?>
   </body>
</html>

