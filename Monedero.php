<!--Raul_Hernandez_Lopez
freenergy1975@gmail.com-->
<!DOCTYPE html>
<html>
 	<head>
		<title> Monedero </title>
		<meta charset="UTF-8">
		<style>
			.formato{
			background:rgb(0, 0, 0);
			color: white;
			border: 2px solid black;
			margin:20px;
			padding:2px;
			}
		</style>
	
	</head>
	<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<div class="formato">
	<table>
	  <tr>
		<td>Monedas de $1:<input type="text" name="uno"></td>
		<br />
		<td>Monedas de $5:<input type="text" name="cinco"></td>
		<br />
		<td>Monedas de $10:<input type="text" name="diez"></td>
		<br />
	 </tr>
	 <tr>
		 <td>Billetes de $20 :<input type="text" name="veinte"></td>
		 <br />
		 <td>Billetes de $50 :<input type="text" name="cincuenta"></td>
		 <br />
	 </tr>
	</table>
	<input type="submit">
	</div>
	</form>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$Uno = $_POST['uno'];
	$Cinco = $_POST['cinco'];
	$Diez = $_POST['diez'];
	$Veinte = $_POST['veinte'];
	$Cincuenta = $_POST['cincuenta'];
	$total = ($Uno * 1) + ($Cinco * 5) + ($Diez * 10) + ($Veinte * 20) + ($Cincuenta * 50);
	echo "<h2>" . "el total del monedero es de $$total pesos!" . "<h2>";
	}
	?>
	</body>
</html>
