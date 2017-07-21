<?php 

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentarios = $_POST['comentarios'];

header('Content-type: application/json');
if($email){
	$msg ="Información de Contacto:\nNombre: ".$nombre."\nEmail: ".$email."\nComentarios: ".$comentarios;
	wordwrap($msg,70);
	$headers = "From: webmaster@example.com" . "\r\n";
	if(mail("Contacto@madea.com.ve","Chat",$msg,$headers)){
		echo json_encode(['mssg' => 'success']);
	}else{
		echo json_encode(['mssg' => 'error']);
	}
	
}else {
	echo json_encode(['mssg' => 'error']);
}

 ?>