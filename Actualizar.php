<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act</title>
</head>
<body>
<?php

$conexion = mysqli_connect("localhost","root","","papeleria"); 


$id = $_POST ['id'];
$nombre = $_POST ['producto'];
$descripcion = $_POST ['descripcion'];
$precio = $_POST ['precio'];

mysqli_query ($conexion, "UPDATE productos set nombre_prod='$nombre', descripcion_prod='$descripcion',precio_prod='$precio' where id_prod='$id'")
or die ("Error al realizar la consulta");

mysqli_close ($conexion);
echo "Datos modificados correctamente";


?>
  

</body>
</html>