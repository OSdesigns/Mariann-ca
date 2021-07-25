<?php
	$destino = "oxcar.yolo@gmail.com";
	$nombre = $_POST["nombre"];
	$correo = $_POST["mail"];
	$mensaje = $_POST["msg"];
	$contenido = "Nombre: " . $nombre . "\nDireccion de e-mail: " . $correo . "\nMensaje: " . $mensaje;

	mail($destino, "Contacto", $contenido);
?>
