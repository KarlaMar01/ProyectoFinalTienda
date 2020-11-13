<?php
include("conexion.php");
if (!(empty($_POST["nombre"]) && empty($_POST["correo"]) && empty($_POST["asunto"]) && empty($_POST["mensaje"]))) {
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$asunto = $_POST["asunto"];
	$mensaje = $_POST["mensaje"];

	$obj = new Conexion();

	$ins = $obj->insertarContactoMensaje($nombre,$correo,$asunto,$mensaje);
	if ($ins) {
		$datos = array('datos' => 'ok');
	}else {
		$datos = array('datos' => 'Hubo un inconveniente al enviar el mensaje');
	}



}else {
	$datos = array('datos' => 'No rellenaste todos los campos');
}
echo json_encode($datos,JSON_FORCE_OBJECT);
?>