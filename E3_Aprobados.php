<!--autor: RAÚL  HERNÁNDEZ LÓPEZ
correo: freeenergy1975@gmail.com
fecha: 13 de febrero del 2021-->

<!--Genera un programa que determine si eres de mayor de edad-->

<!DOCTYPE html>
<html>
   <head>
        <title>calificaciones</title>
        <meta charset = "UTF-8">
   </head>
   <body>
   <form method="post" action="E3_Aprobados.php">
        <!--Entrada de datos-->
        <h6><label>Ingresa tu califcacion</label></h6>
        <input type="text" name="calificacion">
        <br />
        <br />
        <input type="submit" value="enviar">
   </form>
   <?php
           //obtencion de datos.
           $califcacion = $_POST['calificacion'];

            if( $califcacion >= 70 ){
                echo '<script type="text/javascript">alert("calificacion aprobatoria");</script>';
            }//Fin if
            else{
                echo '<script type="text/javascript">alert("calificacion no aprobatoria");</script>';
            }//Fin else
   ?>
   </body>
</html>
