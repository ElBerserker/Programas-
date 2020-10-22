 <!DOCTYPE html>

<html><head><title>Ejemplo aprenderaprogramar.com</title><meta charset="utf-8">

</head>

<body><div id="cabecera"><h2>Cursos aprenderaprogramar.com</h2><h3>Ejemplos PHP</h3></div>

<?php

$A=5; $B=3; $C=-7; $D=5;

$msg = '';

$A==5 ? $msg='A es 5<br/>': $msg='A no es 5<br/>';

echo $msg;

$A<$B ? $msg='A es menor que B<br/>': $msg='A es mayor o igual que B<br/>';

echo $msg;

$B<$C ? $msg='B es menor que C<br/>': $msg='B es mayor o igual que C<br/>';

echo $msg;

?>

</body>
</html>
