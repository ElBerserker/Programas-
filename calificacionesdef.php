<!--Raul Hernandez Lopez
freeenergy1975@gmail.com-->
<!DOCTYPE html>
<html>
	<head><title> prueba 1</title>  <meta charset="UTF-8"></head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 INGRESA TU CALIFICACION: <input type="text" name="calificaciones">
<input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $mensaje = "Tu calificacion es :";
  $calificacion = $_POST['calificaciones'];
  if ($calificacion == 10) {
    echo $mensaje . " A sigue asi!";
  }
  elseif ($calificacion == 9) {
    echo $mensaje . " B bien echo";
  }
  elseif ($calificacion == 8) {
    echo $mensaje . " C genial!";
  }
  elseif (($calificacion == 7) or ($calificacion == 6)) {
   echo $mensaje . " D bien";
  }	 
  elseif (($calificacion <= 5) and($calificacion >= 1)) {
   echo $mensaje . " F Estas reprobado!";
  } else {
   echo " Ingresa un valor valido\n";	
  }
}
?>

</body>
</html>

