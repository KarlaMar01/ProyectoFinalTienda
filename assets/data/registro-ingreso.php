<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ingresa / Registra Papeleria</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
 
    <link rel="stylesheet" href="assets/css/stylesr.css">
    
</head>
<body>
    
<div class="container-form">
        <div class="header">
            <div class="logo-title">
                <img src="img/logo.png" alt="">
                <h2>Papelería</h2>
            </div>
            <div class="menu">
                <a href="index.html"><li class="module-register active">Ingresa</li></a>
                <a href="registro-ingreso.php"><li class="module-register active">Registra</li></a>
            </div>
        </div>
        
        <form method="post" class="form">
            <div class="welcome-form"><h1>Bienvenido</h1><h2>A nuestra Papelería</h2></div>
            <div class="user line-input">
            <input type="text" placeholder="Nombre Usuario" name="usuario">
            </div>
            <div class="user line-input">
            <input type="text" placeholder="E-mail" name="email">
            </div>
            <button type="submit" name="register">Registrarse</button>   
    </form>
    </div>

    <?php 
        include("registro_in.php");
        ?>
        
</body>
</html>