<?php
include('conexion.php');

$obj = new Conexion;

$id_p          = $_POST['id_p'];
$nombre_p      = $_POST['nombre'];
$descripcion_p = $_POST['descripcion'];
$precio_v      = $_POST['preciov'];
$precio_c      = $_POST['precioc'];
$stock         = $_POST['stock'];
$url_i         = $_POST['url_i'];

$res= $obj->agregarProducto($id_p, $nombre_p, $descripcion_p, $precio_v, $precio_c, $stock, $url_i);

if($res == 1){
    $datos = array('dato' => 'ok');
}else{
    $datos = array('dato' => 'NO EXISTE');
}


//$datos = array('datos' => $texto);//que guarde lo que viene en texto

echo json_encode($datos, JSON_FORCE_OBJECT);
?>