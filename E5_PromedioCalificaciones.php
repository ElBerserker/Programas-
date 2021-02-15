<!--Autor:  Hernandez   Lopez   Raul
    correo: freeenergy1975@gmail.com
    fecha  14  de  febrero  del 2020
    Tema:  Elabora un programa con condicionales anidados que solicite 3 calificaciones
    obtén el promedio  de  esas   tres  calificaciones, y de acuerdo al promedio que se 
    obtuvo, coloca la leyenda que le corresponde-->

<html>
    <head>
        <title>Promedio Calificaciones</title>
        <meta charset = "UTF-8">
    </head>

    <body>
    <!--Especificar como se enviaran los datos en este caso por metodo post
	en action definira el lugar a donde se enviaran los datos-->
    <form method = "POST" action = "E5_PromedioCalificaciones.php">
	    <!--Entrada de datos por formulario-->
            <label><h6>Primera calificacion</h6></label>
            <input type="text" name="calificacion1">

            <label><h6>Segunda calificacion</h6></label>
            <input type="text" name="calificacion2">

            <label><h6>Tercera calificacion</h6></label>
            <input type="text" name="calificacion3">
	    <br />
	    <br />
            <!--Boton de envio de formulario-->	
            <input type="submit" value = "Enviar">
        </form>
        <?php
                    //Declarcion de variables, obtenemos valores del formulario por nombre 'name'.                      
                    $calif1 = $_POST['calificacion1'];
                    $calif2 = $_POST['calificacion2'];
                    $calif3 = $_POST['calificacion3'];
                    $promedio = ($calif1 + $calif2 + $calif3) / 3;
                    //echo gettype($promedio);
                    /*Evalua el valor del promedio, de acuerdo a ello 
                    imprime una pequena leyenda*/
		    if (($promedio >= 95) && ($promedio <= 100 )) {
			/*Es posible introducir codigo con etiquetas html dentro de php :o OMG*/    
                        echo '<script type="text/javascript">alert("Promedio: '.$promedio.' Eres Exelente");</script>';
                    }//Fin evaluacion del rango 95 a 100
                    elseif (($promedio >= 85) && ($promedio < 95 )){
                        echo '<script type="text/javascript">alert("Promedio: '. $promedio . ' Eres notable");</script>';
                    }//Fin evaluacion del rango 85 a 94   
                    elseif (($promedio >= 75) && ($promedio < 85)){
                        echo '<script type="text/javascript">alert("Promedio: '. $promedio .' Eres bueno");</script>';
                    }//Fin evaluacion del rango 75 a 84    
                    elseif(($promedio >= 70) && ($promedio < 75)){
                        echo '<script type="text/javascript">alert("Promedio: '. $promedio .' Sufisiente");</script>';
                    }//Fin evaluacion del rango 70 a 74
                    elseif(($promedio < 70) && ($promedio >= 1)){
                        echo '<script type="text/javascript">alert("NA (No aprobado)");</script>';
                    }//Fin evaluacion del rango 1 a 69                   
                    else{
                        echo '<script type="text/javascript">alert("Valor fuera de rango");</script>';
                    }                           
        ?><!--Fin php->
    </body>
</html>
