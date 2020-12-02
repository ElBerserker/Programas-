<!--HERNANDEZ_LOPEZ_RAUL
    freeenergy1975@gmail.com
    30 de noviembre del 2020
    Realice un algoritmo para leer las calificaciones de N alumnos y de­termine el número 
    de aprobados y reprobados. Represéntelo me­diante diagrama de flujo, pseudocódigo.-->
<!DOCTYPE html>
<html>
   <head>
	<title>Aprobados</title>
	<meta charset="UTF-8">
   </head>
   <body>
   <form method="post" action="<?php $SERVER['PHP-SELF'];?>">
   <!--Recopilacion de datos por formulario-->
   <h3>Calificacion del alumno 1</h3>
   <input type="text" name="calificacion1">
   <h3>Nombre del alumno:</h3>
   <input type="text" name="nombre1">
   <br />
   <h3>Calificacion del alumno 2</h3>
   <input type="text" name="calificacion2">
   <h3>Nombre del alumno</h3>
   <input type="text" name="nombre2">
   <br />
   <h3>Calificacion del alumno 3</h3> 
   <input type="text" name="calificacion3">
   <h3>Nombre del alumno</h3>
   <input type="text" name="nombre3">
   <br />
   <br />
   <input type="submit"/>

   </form>
   <?php 
	    //Declaracion de variables
	    $calificacion_1=$_POST['calificacion1'];
	    $calificacion_2=$_POST['calificacion2'];
	    $calificacion_3=$_POST['calificacion3'];
	    $nombre_1=$_POST['nombre1'];
	    $nombre_2=$_POST['nombre2'];
	    $nombre_3=$_POST['nombre3'];
	    $alumnoaprobado1 = 0;
	    $alumnoaprobado2 = 0;
	    $alumnoaprobado3 = 0;
	    $reprobado1 = 0;
	    $reprobado2 = 0;
	    $reprobado3 = 0;

	    //Determina si los alumnos pasan o no.
	    if ($calificacion_1 >= 6 && $calificacion_1 < 11){
		    echo "<h6>" . "El alumno " . $nombre_1 . " aprobo" . "</h6>";
		    $alumnoaprobado1 = 1;
	    }
	    elseif ($calificacion_1 < 6){
		    echo "<h6>" . "El alumno " . $nombre_1  . " no aprobo" . "</h6>";
		    $reprobado1 = 1;
	    }

	    if ($calificacion_2 >= 6 && $calificacion_2 < 11){
		    echo "<h6>" . "El alumno " . $nombre_2 . " aprobo" . "</h6>";
		    $alumnoaprobado2 = 1;
            }
            elseif ($calificacion_2 < 6){
		    echo "<h6>" . "El alumno " . $nombre_2  . " no aprobo" . "</h6>";
		    $reprobado2 = 1;
	    }

	     if ($calificacion_3 >= 6 && $calificacion_3 < 11){
		     echo "<h6>" . "El alumno " . $nombre_3 . " aprobo" . "</h6>";
		     $alumnoaprobado3 = 1;
            }
            elseif ($calificacion_3 < 6){
		    echo "<h6>" . "El alumno " . $nombre_3  . " no aprobo" . "</h6>";
		    $reprobado3 = 1;
	    }	    
	    //Determina el numero de aprobados y reprobados
	    $numeroDeAprobados = $alumnoaprobado1 + $alumnoaprobado2 + $alumnoaprobado3;
	    $numeroDeReprobados = $reprobado1 + $reprobado2 + $reprobado3;
	    //Impresion de resultados
	    echo "<br />" . "<h6>" . "El numero de reprobados es de " . $numeroDeReprobados . "</h6>";
	    echo "<br />" . "<h6>" . "El numero de aprobados es de " . $numeroDeAprobados . "</h6>"
   ?>
   </body>
</html>
