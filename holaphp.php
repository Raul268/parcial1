<?php 

	//echo "Hola PHP";
	//echo "<h1>Hola PHP</h1>";
	date_default_timezone_set('America/Lima');
	//date_default_timezone_set('Europe/Paris');

	//echo date("Y-m-d   H:i:s");

	echo "Las cabeceras desde el Servidor para hoy:   ";
	echo date("d-m-Y   H:i:s");

	for ($n=1; $n<=6; $n++){
		echo "<h$n style='color:#$n$n$n;'> Cabecera Nivel $n </h$n>";
	}
 ?>