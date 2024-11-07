<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Práctica php</title>
</head>
<body>
	<?php
	echo "Hola! Este es mi primer script en PHP<BR>";
	//Código PhP comentario
	#Linea de comentario
	/*Lista de bloque
	de un comentario */
	$vartext= "Hola! Ahora estoy usando para variables para guardar texto<BR>";
	echo $vartext;
	$varnum1=5;
	$varnum2=6;
	$res=$varnum1+$varnum2;
	echo "El resultado de la suma de los $varnum1+$varnum2=$res";
	?>

</body>
</html>