<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
</head>
<body>

<?php

$conexion = mysqli_connect("localhost","root","","papeleria"); 

$consulta = mysqli_query ($conexion, "SELECT * from productos")
or die ("Error al traer los datos");

echo '<table border="1>';
echo '<tr>';
echo '<th id="id"></th>';
echo '<th id="nombre">Id</th>';
echo '<th id="nombre">Nombre</th>';
echo '<th id="descripcion">Descripción</th>';
echo '<th id="precio">Precio</th>';
echo '</tr>';

while ($extraido = mysqli_fetch_array ($consulta))
{
    echo '<tr>';
    echo '<td>'.$extraido['id_prod'].'</td>';
    echo '<td>'.$extraido['nombre_prod'].'</td>';
    echo '<td>'.$extraido['descripcion_prod'].'</td>';
    echo '<td>'.$extraido['precio_prod'].'</td>';
    echo '</tr>';
}
mysqli_close ($conexion);
    echo '</table>';

?>
    
</body>
</html>