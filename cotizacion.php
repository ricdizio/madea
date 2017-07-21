<?php 
var_dump($_POST['']);
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$ciudad = $_POST['ciudad'];
$medidas = $_POST['medidas'];
$tipo_p = $_POST['tipo_p'];
$comentarios = $_POST['comentarios'];

header('Content-type: application/json');
if($email){
	$msg ="Información de la contización:\nNombre: ".$nombre."\nEmail: ".$email."\nTelefono: ".$telefono."\nCiudad: ".$ciudad."\nTipo de proyecto: ".$tipo_p."\nMedidas: ".$medidas."\nComentarios: ".$comentarios;
	wordwrap($msg,70);
	$headers = "From: webmaster@example.com" . "\r\n";
	if(mail("Contacto@madea.com.ve","Cotizacion",$msg,$headers)){
		echo json_encode(['mssg' => 'success']);
	}else{
		echo json_encode(['mssg' => 'error']);
	}
	
}else {
	echo json_encode(['mssg' => 'error']);
}

 ?>