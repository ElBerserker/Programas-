<!DOCTYPE html>
<html>
        <head> 
                <title> bicicleta </title>
                <meta charset="UTF-8">
                <style>
                        .formato {
                        background-color: blue;
                        color: white;
                        border: 2px solid black;
                        margin: 20px;
                        padding: 20px;
                        }
                </style>
        </head>
        <body>
        <form method="post" action="<?php $_SERVER['PHP-SELF'];?>">
           <div class="formato">
                <h1>calcula el tiempo que tardaste en hacer un recorrido</h1>
                Cual es la distancia que recorriste? : <input type="text" name="distancia1">
                A que velocidad? : <input type="text" name="velocidad1">
                <button type="button" onclick="Tiempooo();">calcular</button>

           </div>
           <div class="formato">
                <h1>calcula la distancia que recorriste</h1>
                A que velocidad 'km/hr' realizaste tu recorrido? : <input type="text" name="velocidad2">
                En cuanto tiempo 'hrs' ? : <input type="text" name="tiempo2">
		<button type="button" onclick="Distanciaaa();">calcular</button>
           </div>

           <div class="formato">
                <h1>calcular la velocidad con la que realizaste un recorrido</h1>
                Que distancia recorriste'km'? : <input type="text" name="distancia3">
                En cuanto tiempo'hrs' ?: <input type="text" name="tiempo3">
                <button type="button"  onclick="velocidaddd();"> calcular </button>
           </div>
        </form>
<?php
		
	function Tiempooo(){
	 $Velocidad = $_POST['velocidad1'];
         $Distancia = $_POST['distancia1'];       
         $Tiempo = 0;
	
        $Tiempo = $Distancia / $Velocidad;
	echo "<h1>" . "El tiempo que tardaste en recorrer $Distacia es de $Tiempo hrs." . "</h1>";
        }

        function Distanciaaa(){
        $Velocidad = $_POST['velocidad2'];
        $Tiempo = $_POST['tiempo2'];
        $Distancia = $Velocidad * $Tiempo;
        echo "<h1>" . "la distacia que recorriste es de $Distancia kms" . "</h1>";
        }

        function Velocidaddd (){
        $Distancia = $_POST['distancia3'];
        $Tiempo = $_POST['tiempo3'];
        $Velocidad = $Distancia / $Tiempo;
        echo "<h1>" . "La velocidad con la que realizaste tu recorrido es de $Velocidad km/hr" . "</h1>";
        }
?>
        </body>
</html>

