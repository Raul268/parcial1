<html>
<head>
	<title> Cuarto ejemplo </title>
</head>
<body>
Bienvenido a esta página, la fecha y hora actual es:<BR>
	<b>
	<?php
	date_default_timezone_set('America/Lima');
	print(date("d  M  Y, H:i:s"));
	?>
	</b>
</body>
</html>
