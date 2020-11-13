<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
</head>
<body>
<?php
   
$conexion = mysqli_connect("localhost","root","","papeleria"); 

   
    $id = $_POST['id'];

    mysqli_query($conexion, "DELETE from productos where id_prod = '$id'")
    or die ("Error al elimiar los datos");

    mysqli_close($conexion);
    echo "Datos eliminados correctamente";
?>
    
</body>
</html>