<!--Raul Hernandez Lopez
freeenrgy1975@gmail.com-->

<html>
        <head>
                <title> Conagua </title>
                <meta charset="UTF-8">
        </head>
        <body>
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ;?>">
        <br />
        <br />
        Ingresa el costo por metro cubico de agua :
        <input type"text"  name="Costo_Agua">
        Cantidad de agua consumida en metros cubicos:
        <input type"text"  name="Consumo_Agua">
        <input type="submit">
        <br />
        <br />
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $costo_agua = $_POST['Costo_Agua'];
        $consumo = $_POST['Consumo_Agua'];
        $Monto = $costo_agua * $consumo;

        echo "Monto a pagar[$ $Monto ]";
        }
        ?>
        </body>
</html>

