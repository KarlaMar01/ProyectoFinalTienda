<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="stylesr.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administra BD</title>
</head>
<body>
    
<div class="container-form">
        <div class="header">
            <div class="logo-title">
                <img src="img/logo.png" alt="">
                <h2>Papelería</h2>
            </div>
            <div class="menu">
                <a href="administra.php"><li class="module-register active">Registra</li></a>
                <a href="elimina.html"><li class="module-register active">Elimina</li></a>
                <a href="modifica.html"><li class="module-register active">Actualiza</li></a>
                <a href="muestra.html"><li class="module-register active">Muestra</li></a>
                <a href="index.html"><li class="module-register active">Ingresa</li></a>
            </div>
        </div>
        
        <form method="post" class="form">
            <div class="welcome-form"><h1>Bienvenido</h1><h2>Admin</h2></div>
            <div class="user line-input">
            <input type="text" placeholder="ID Producto" name="id">
            </div>
            <div class="user line-input">
            <input type="text" placeholder="Nombre Producto" name="producto">
            </div>
            <div class="user line-input">
            <input type="text" placeholder="Descripción" name="descripcion">
            </div>
            <div class="user line-input">
            <input type="text" placeholder="Precio" name="precio">
            </div>
            <button type="submit" name="register">Registra</button>   
    </form>

    </div>

    <?php 
        include("registro.php");
        ?>
</body>
</html>