<?php 
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$suma = $_POST['resultado'];
	$asunto = 'Formulario de contacto';
	$mensaje = "Nombre: ".$nombre." Email: $email Mensaje:".$_POST['mensaje'];
	

if(mail('tucorreo@etc.com', $asunto, $mensaje)){
	echo "<p>Correo enviado, gracias por contactar. </p>";
}
		
 ?>
 