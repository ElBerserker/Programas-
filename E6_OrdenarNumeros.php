<!--Autor:  Hernandez   Lopez   Raul
    correo: freeenergy1975@gmail.com
    fecha 14 de febrero del 2020
  
    Tema: ingresa tres numeros y los ordena de mayor a menor-->

<!DOCTYPE html>

<html>
    <head>
         <title>Ordenar numeros</title>
         <meta charset = "UTF-8">
    </head>
    <body>
    <form method = "POST" action = "E6_OrdenarNumeros.php">

        <label><h6>Numero1</h6></label>
        <input type="text" name="numero1">

        <label><h6>Numero2</h6></label>
        <input type="text" name="numero2">

        <label><h6>Numero3</h6></label>
        <input type="text" name="numero3">
        <br />
	<br />
	<input type = "submit" value = "enviar">
	<input type = "reset">
    </form>
    <?php
            $numero_1 = $_POST['numero1'];
            $numero_2 = $_POST['numero2'];
	    $numero_3 = $_POST['numero3'];
	    //Parseo de datos de string a integer.
	    settype($numero_1, "integer");
	    settype($numero_2, "integer");
	    settype($numero_3, "integer");	

	    $numeros = array( $numero_1, $numero_2, $numero_3 );
            for($x = 0; $x < 4; $x++){
                for($y = 0; $y < 2 ; $y++ ){
                    if ($numeros[$y] < $numeros[$y+1]){         
                             $cambioPosicion = $numeros[$y];
                             $numeros[$y] = $numeros[$y+1];
                             $numeros[$y+1] = $cambioPosicion;
                    }//Fin if                   
                }//fin for 2
            }//fin for 1

	    echo '<script type="text/javascript">alert("'.$numeros[0]
		    . ", " . $numeros[1]
		    . ", " . $numeros[2]
		    .'");</script>';
    ?>
    </body>
</html>

