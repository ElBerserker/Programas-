<!--Autor:   Hernandez   Lopez  Raul
    correo: freeenergy1975@gmail.com
    fecha: 14  de  Febrero del  2021

    Tema: Genera el factorial de un numero 
-->

<!DOCTYPE html>
<html>
    <head>
            <title>Factorial</title>
            <meta charset="UTF-8">
    </head>
    <body>
        <form method="POST" action="E7_Factorial.php">
            <label>Factorial<label>

            <label><h6>Ingresa un numero</h6></label>
            <input type="text" name="numero">
	    <br /><br /> 	
	    <input type = "submit" value="enviar">
	    <input type = "reset">
        </form>
        <?php
                $numero = $_POST['numero'];
		$factorial = 1;

		settype($numero , "integer");

		/*echo gettype($numero);
		echo gettype($factorial);*/

                for($x = 1; $x <= $numero; $x++){
                        $factorial *= $x;
                }//Fin for
		echo '<script type="text/javascript">alert("El factorial del numero ingresado es '
			. $factorial .' " );</script>';
        ?>
    </body>
</html>

