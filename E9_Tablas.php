<!--Autor:   Hernandez   Lopez  Raul
    correo: freeenergy1975@gmail.com
    fecha: 14  de  Febrero del  2021

    Tema: Genera la tablas de multiplicar de un numero N
-->

<!DOCTYPE html>
<html>
    <head>
            <title>Tablas de multiplicar</title>
            <meta charset="UTF-8">
    </head>
    <body>
        <form method = "POST" action = "E9_Tablas.php">
            <label>Factorial<label>

            <label><h6>Ingresa un numero</h6></label>
            <input type="text" name="numero">
            <br /><br />
            <input type = "submit" value="enviar">
            <input type = "reset">
        </form>
        <?php
                $numero = $_POST['numero'];
		settype($numero , "integer");

		echo '<script type="text/javascript">alert("Revisa la consola");</script>';
                for($x = 1; $x <= 10; $x++){
                    $multiplicacion = $numero * $x;
		    echo '<script type="text/javascript">console.log("'. $numero . ' x ' . $x . ' = ' . $multiplicacion .'" );</script>';
		}    
        ?>
    </body>
</html>

