<!--Raul Hernandez Lopez
freeenrgy1975@gmail.com-->

<html>
        <head>
                <title> LLamada telefonica </title>
                <meta charset="UTF-8">
        </head>
        <body>
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ;?>">
        <br />
        <br />
        Ingresa la tarifa por minuto de tu compañia telefonica :
	<input type"text"  name="Costo_Minuto">
	Duracion de tu llamada telefonica
	<input type"text"  name="Duracion_llamada">
        <input type="submit">
        <br />
        <br />
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $costo_minuto = $_POST['Costo_Minuto'];
	$duracion_llamada = $_POST['Duracion_llamada'];
	$Monto = $costo_minuto * $duracion_llamada;

        echo "Monto a pagar[$ $Monto ]";
        }
        ?>
        </body>
</html>

