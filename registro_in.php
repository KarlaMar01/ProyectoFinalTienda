<?php 

include("conexion_bd.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['usuario']) >= 1 
    && strlen($_POST['email']) >= 1) {

	    $usuario = trim($_POST['usuario']);
	    $email = trim($_POST['email']);
	    $fechareg = date("y/m/d");
	    $consulta = "INSERT INTO registro (nombre_usr, email, fecha_reg) VALUES ('$usuario','$email','$fechareg')";
	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3>¡Te has registrado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3>¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3>¡Por favor complete los campos!</h3>
           <?php
    }
}

?>