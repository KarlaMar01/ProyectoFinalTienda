<?php 

include("conexion_bd.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['id']) >= 1 
    && strlen($_POST['producto']) >= 1  && strlen($_POST['descripcion']) >= 1  && strlen($_POST['precio']) >= 1) {

	    $id = trim($_POST['id']);
        $producto = trim($_POST['producto']);
        $descripcion = trim($_POST['descripcion']);
        $precio = trim($_POST['precio']);
        $consulta = "INSERT INTO productos (id_prod, nombre_prod, descripcion_prod, precio_prod) VALUES ('$id','$producto','$descripcion','$precio')";
	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3>¡Producto registrado correctamente!</h3>
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