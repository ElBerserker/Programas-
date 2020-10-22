<!DOCTYPE html>

<html>
        <head>
                <meta charset="UTF-8">
                <title>COSTO BOLETO </title>
        </head>
<body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        ¿Cuanto es el precio por kilometro?: <input type="text" name="costo">
        ¿Cuantos kilometros va a recorrer?: <input type="text" name="kilometros">
        <input type="submit">
        </form>

<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $precio = $_POST['costo']; 
    $distancia = $_POST['kilometros']; 
    $resultado = $precio * $distancia;     
    if(empty($precio)){ 
        echo "Es necesario llenar los datos"; 
    }else{ 
            echo "El total a pagar es de: $".$resultado." pesos"; 
    } 
 
  }
?>
</body>
</html>
