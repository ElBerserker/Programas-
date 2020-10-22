<!--Raul_Hernandez_Lopez
freeenergy1975@gmail.co-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ventas</title>
        <style>
        .formato {
                background-color: rgb(0, 0, 0);
                color: white;
                border: 2px solid black;
                margin:20px;
                padding: 20px;
        }
        </style>
        </head>
        <body>
        <form type="form" action="">
        <p> No. de ventas </p>
        Numero de ventas :
        <input type="text" name="numero_ventas" id="numero_ventas">
        <button type="button" onclick="calcularventas();">Calcular</button>
        <script type="text/javascript">
        var posicion = 0, mayor = 0, menor = 0;
        var sumaMayor= 0, sumaMenor = 0, montoGlobal = 0;

        function calcularventas(){
                var Numero_Ventas = document.getElementById("numero_ventas").value;
                var Ventas = new Array(Numero_Ventas);  
                 
                for (var x = 0; x < Numero_Ventas; x ++){
                posicion += 1;
                Ventas[x] = parseFloat(prompt("Venta No." + posicion + ":"));

                montoGlobal = montoGlobal + Ventas[x];
                
                 if((Ventas[x] >= 0) && (Ventas[x]<= 10000)){
                                sumaMenor = sumaMenor + Ventas[x];
                                menor += 1;
                        }
                        //separa las ventas mayores a diez mil
                        else if((Ventas[x] > 10000) && (Ventas[x] <= 20000)){

                                sumaMayor = sumaMayor + Ventas[x];
                                mayor = mayor + 1;
                        }

                }
                console.log(Ventas);
                alert("Realizaste " + menor + " ventas menores a diez mil"
                + " juntas suman [$" + sumaMenor + "]");
                alert("Realizaste " + mayor + " ventas mayores a diez mil"
                + " juntas suman [$" + sumaMayor + "]");
                alert("Mientras que el monto global es de [$" + montoGlobal + "]");
        }
        </script>
        </body>
</html>

