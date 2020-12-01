<!-- Raul Hernandez Lopez
freeenrgy1975@gmail.com-->
<!DOCTYPE html>
<html>
	<head><title>caja registradora</title><meta charset="UTF-8"></head>
	<body>
	<form method="post" action="">
	<h1>Ingresa la cantidad de billetes y monedas que tengas.</h1>
	<table>
		<tr>
			<td><label>Billetes de $1000 :</label><input type="text" id="mil" name="mil"></td>
			<br /><br />
			<td><label>Billetes de $500  :</label><input type="text" id="quinientos" name="quinientos"></td>
			<br /><br /> 
			<td><label>Billetes de $200  :</label><input type="text" id="doscientos" name="doscientos"></td>
			<br /><br/>
			<td><label>Billetes de $100  :</label><input type="text" id="cien" name="cien"></td>
			<br /><br />
			<td><label>Billetes de $50   :</label><input type="text" id="cincuenta" name="cincuenta"></td>
			<br /><br />
			<td><label>Billetes de $20   :</label><input type="text" id="veinte" name="veinte"></td>
			<br /><br />
		</tr>
		<br /><br />
		<tr>
			<td>Monedas de $10  :<input type="text" id="diez" name="diez"></td>
			<br /><br />
			<td>Monedas de $5   :<input type="text" id="cinco" name="cinco"></td>
 			<br /><br />	
			<td>Monedas de $2   :<input type="text" id="dos" name="dos"></td>
			<br /><br />
			<td>Monedas de $1   :<input type="text" id="uno" name="uno"></td>
			<br /><br />
			<td>Monedas de $0.5 :<input type="text" id="centavo" name="centavo"></td>
			<br /><br />
			<td><input type="submit"></td>
		</tr>
	</table>
	</form>
	
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Mil = $_POST['mil'];
  $Quinientos = $_POST['quinientos'];
  $Doscientos = $_POST['doscientos'];
  $Cien = $_POST['cien'];
  $Cincuenta = $_POST['cincuenta'];
  $Veinte = $_POST['veinte'];
  $Diez = $_POST['diez'];
  $Cinco = $_POST['cinco'];
  $Dos = $_POST['dos'];
  $Uno = $_POST['uno']; 
  $Centavo = $_POST['centavo'];
  $total = ($Mil * 1000) + ($Quinientos * 500) + ($Doscientos * 200) + ($Cien * 100) + ($Cincuenta * 50) + ($Veinte * 20) + ($Diez * 10) + ($Cinco * 5) + ($Dos * 2) + ($Uno * 1) + ($Centavo * 0.5);
  echo "\nEl total de la caja es de :$total pesos!";
}
?>
	</body>
</html>
