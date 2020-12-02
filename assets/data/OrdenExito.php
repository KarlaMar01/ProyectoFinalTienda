<?php
if(!isset($_REQUEST['id'])){
    header("Location: productos.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../../assets/css/car.css">
<link rel="shortcut icon" href="../../assets/img/favicon.ico" />
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Orden Completado - PHP Carrito de Compras</title>
    <meta charset="utf-8">
    <style>
    .container{padding: 20px;}
    p{color: #34a853;font-size: 18px;}
    </style>
</head>
</head>
<body>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading"> 

<ul class="nav nav-pills">
  <li role="presentation"><a href="../../productos.php">Inicio</a></li>
</ul>
</div>

<div class="panel-body">

    <h1>Estado de su Orden</h1>
    <p>Su pedido ha sido enviado exitosamente. La ID del pedido es #<?php echo $_GET['id']; ?></p>
           </div>
 <div class="panel-footer">BaulPHP</div>
 </div><!--Panek cierra-->
</div>
</body>
</html>