<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<h1>Respuesta</h1>
	<?php
		$nombre = $_GET["Nombre"];
		$ape = $_GET["Apellido"];
		$email = $_GET["Email"];
		$asunto = $_GET["Asunto"];
		$mensaje = $_GET["mensaje"];

		echo "su nombre es $nombre $ape su Email: $email el asunto es: $asunto y el mensaje que dejo : $mensaje";
		
	?>


</body>
</html>