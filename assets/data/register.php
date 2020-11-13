<?php
    include('conexion.php');

    $obj = new Conexion;

    $usuario    = $_POST['inputUserDos'];
    $pass       = $_POST['inputPasswordDos'];
    $name    = $_POST['inputNombreDos'];
    $correo       = $_POST['inputCorreoDos'];

    //$texto      = "Nombre: " . $usuario . " Contraseña: " . $pass;

    $res = $obj->insertarUsuario($usuario,$pass,$name,$correo);
    if($res == 1){
        $datos  = array('dato' => 'ok');
    }else{
        $datos  = array('dato' => 'no');
    }

    // $datos  = array('datos' => $texto);

    echo json_encode($datos, JSON_FORCE_OBJECT);

?>
