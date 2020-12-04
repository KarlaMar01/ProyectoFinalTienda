<?php
    include('assets/data/conexion.php');

    $obj = new Conexion;

    $res = $obj->buscarProducto();

    $temp = array();

    $temp = $res;

    /*echo $row[1];
    print("Id Produto:" . $temp[3]['id_prod'] . '<br>');
    print("Nombre:" . $temp[3]['nombre_producto'] . '<br>');
    print("Precio Venta:" . $temp[3]['precio_venta'] . '<br>');
    print("<img src=" . $temp[3]['url_img'] . ' width="150">');
   */


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="assets/css/trab.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Noto+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Noto+Serif&display=swap" rel="stylesheet">
</head>

<body>
    <div class="media">
        <header class="">
            <div class="contenido contenido-header">
                <div class="titulo">


                    <!--Logo-->
                    <img src="img/logo.png" alt="" class="logo">
                    <div class="logott">𝓟𝓻𝓲𝓭𝓮</div>
                    <nav class="links">
                      <!--  <a href="productos.html">Papelería</a> 
                        <a href="Regalos.html">Regalos</a> -->
                        <a href="pagina.html">Inicio</a>
                        <a href="contacto.html">Contáctanos</a>
                        <a href="nosotros.html">Nosotros</a>
                        <a href="registro_pro.html">Registro Productos</a>
                       
                    </nav>
                </div>
            </div>
        </header>

        <img src="assets/img/contactanos.jpg" alt="nosotros" style="max-width: 100%;">



        <main class="seccion contenedor">

            <h2 class="fw-300 centrar-texto">Obsequios para toda ocasión</h2>

            <div class="contenedor-anuncios">
                <div class="anuncio">
                    <img src="<?php echo $temp[11]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                        <h4><?php echo $temp[11]['nombre_producto'];  ?></h4>

                        <p><?php echo $temp[11]['descripcion_producto'];  ?></p>
                        <p class="precio"><?php echo '$'. $temp[11]['precio_venta'];  ?></p>

                        <br>
                        <center><a href="view.php?id=<?php echo $temp[11]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white" >Ver producto</a></center>
                   
                        <center>
                        <form action="https://www.paypal.com/cgi-bin/webscr" style="margin-top:1rem" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="PX89WY4E7ZC7L">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form> </center>


                    </div>
                </div>
                 <div class="anuncio">
                 <img src="<?php echo $temp[18]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[18]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[18]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[18]['precio_venta'];  ?></p>

<br>
                    <center>
                    <a href="view.php?id=<?php echo $temp[18]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a> </center>
    <br>
                   <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="DF53LUE6VPBAY">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form> </center>

                
                </div>
                </div>

                <div class="anuncio">
                <img src="<?php echo $temp[17]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[17]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[17]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[17]['precio_venta'];  ?></p>
                    <br>
                    <center>

                    <a href="view.php?id=<?php echo $temp[17]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
                 <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="T6TJNWTZJL32E">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>
</center>
                
                </div>

                </div>

                <div class="anuncio">
                <img src="<?php echo $temp[19]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[19]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[19]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[19]['precio_venta'];  ?></p>
                    <br>
                    <center>

                    <a href="view.php?id=<?php echo $temp[19]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
                    <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="SC3RAKJA9EANY">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>

                
                </div>
                </div>

            </div>
            <div class="contenedor-anuncios">
                <div class="anuncio">
                <img src="<?php echo $temp[20]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[20]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[20]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[20]['precio_venta'];  ?></p>

                    <br>
                    <center>
                    <a href="view.php?id=<?php echo $temp[20]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white"
    >Ver producto</a></center>
    <br>
                 <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="F72YQT97DKEVS">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>

                
                </div>
                </div>

                <div class="anuncio">
                <img src="<?php echo $temp[21]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[21]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[21]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[21]['precio_venta'];  ?></p>
                    <br>
                    <center>

                    <a href="view.php?id=<?php echo $temp[21]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
                 <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="FG77YGZAGY4G8">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>

                
                </div>

                </div>

                <div class="anuncio">
                <img src="<?php echo $temp[22]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[22]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[22]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[22]['precio_venta'];  ?></p>

                    <br>
                    <center>
                    <a href="view.php?id=<?php echo $temp[22]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
                         <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="S9WP8YTCEWJ5A">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>


                    </div>
                </div>
                <div class="anuncio">
                <img src="<?php echo $temp[23]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[23]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[23]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[23]['precio_venta'];  ?></p>
                    <br>
                    <center>

                    <a href="view.php?id=<?php echo $temp[23]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
                     <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="2326L4A6A45F8">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>

                
                </div>
                </div>

            </div>
        </main>

        <main class="seccion contenedor">

            <h2 class="fw-300 centrar-texto">Obsequios para toda ocasión</h2>

            <div class="contenedor-anuncios">
                <div class="anuncio">
                <img src="<?php echo $temp[1]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[1]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[1]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[1]['precio_venta'];  ?></p>
                    <br>
                    <center>

                    <a href="view.php?id=<?php echo $temp[1]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
                    <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="M4H9U4YBZ229C">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>

                
                </div>
                </div>
                <div class="anuncio">
                <img src="<?php echo $temp[4]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[4]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[4]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[4]['precio_venta'];  ?></p>

                    <br>
                    <center>
                    <a href="view.php?id=<?php echo $temp[4]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
                   <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6H7SXH7EEYW4C">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>

                
                </div>
                </div>
                <div class="anuncio">
                <img src="<?php echo $temp[2]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[2]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[2]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[2]['precio_venta'];  ?></p>

                    <br>
                    <center>
                    <a href="view.php?id=<?php echo $temp[2]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
                   <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="KC87CE5E2WRVQ">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>

                
                </div>

                </div>

                <div class="anuncio">
                <img src="<?php echo $temp[3]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[3]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[3]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[3]['precio_venta'];  ?></p>

                    <br>
                    <center>
                    <a href="view.php?id=<?php echo $temp[3]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
                    <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="JEHKEC8NYCTLC">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>

                
                </div>
                </div>

            </div>
            <div class="contenedor-anuncios">

                <div class="anuncio">
                <img src="<?php echo $temp[5]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[5]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[5]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[5]['precio_venta'];  ?></p>
                    <br>
                    <center>

                    <a href="view.php?id=<?php echo $temp[5]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
                 <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="89CSBWW2FN8CN">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>

                
                </div>
                </div>

                <div class="anuncio">
                <img src="<?php echo $temp[6]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[6]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[6]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[6]['precio_venta'];  ?></p>

                    <br>
                    <center>
                    <a href="view.php?id=<?php echo $temp[6]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
                    <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="S2QH5N2B9PYZN">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>


                </div>

                </div>

                <div class="anuncio">

                <img src="<?php echo $temp[7]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[7]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[7]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[7]['precio_venta'];  ?></p>

                    <br>
                    <center>
                    <a href="view.php?id=<?php echo $temp[7]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
                    <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="NRERAT86UENAJ">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>
    
                
                </div>

                </div>
                <div class="anuncio">
                    <!-- checar esto mas tarde -->
                <img src="assets/img/gomitas.jpg" alt="Libretas">
                    <div class="contenido-anuncio">

                        <h4>Gomitas de Animalitos</h4>

                        <p>Gomas kiut para borrar con tu animalito favorito</p>
                        <p class="precio">$4.00 cada goma diferente</p>
                        <br>
                    <center>
                        <a href="ver_prop1.html" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
     <center>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="P5UXZZLZZFV64">
<table>
<tr><td><input type="hidden" name="on0" value="Colores">Colores</td></tr><tr><td><select name="os0">
	<option value="Rojo">Rojo </option>
	<option value="Azul">Azul </option>
	<option value="Verde">Verde </option>
</select> </td></tr>
</table>
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>

                  
                    </div>
                </div>

            </div>
        </main>


        <main class="seccion contenedor">

            <h2 class="fw-300 centrar-texto">Detalles románticos</h2>

            <div class="contenedor-anuncios">
                <div class="anuncio">
                <img src="<?php echo $temp[8]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[8]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[8]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[8]['precio_venta'];  ?></p>
                    <br>
                    <center>
                    <a href="view.php?id=<?php echo $temp[8]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
     <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="Q6VBKQJAYG57U">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>

                </div>
                 
                </div>
                <div class="anuncio">
                <img src="<?php echo $temp[9]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[9]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[9]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[9]['precio_venta'];  ?></p>
                    <br>
                    <center>

                    <a href="view.php?id=<?php echo $temp[9]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
     <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6P7BN6JPYVDNN">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>
   
                
                </div>
                </div>

                <div class="anuncio">
                <img src="<?php echo $temp[10]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[10]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[10]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[10]['precio_venta'];  ?></p>

                    <br>
                    <center>
                    <a href="view.php?id=<?php echo $temp[10]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
                    <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="JDSNYFX9PWFJ4">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>

                
                </div>

                </div>

                <div class="anuncio">
                <img src="<?php echo $temp[12]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[12]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[12]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[12]['precio_venta'];  ?></p>

                    <br>
                    <center>
                    <a href="view.php?id=<?php echo $temp[12]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
                             <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="NFANG5JAKGWBS">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>



                    </div>
                </div>

            </div>
            <div class="contenedor-anuncios">

                <div class="anuncio">
                     <img src="<?php echo $temp[13]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[13]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[13]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[13]['precio_venta'];  ?></p>
                    <br>
                    <center>

                    <a href="view.php?id=<?php echo $temp[13]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
                   <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="J2B2P4XT85UBY">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>

                
                </div>
                </div>
                <div class="anuncio">
                <img src="<?php echo $temp[14]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[14]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[14]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[14]['precio_venta'];  ?></p>

                    <br>
                    <center>
                    <a href="view.php?id=<?php echo $temp[14]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
                    <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="ZYUAJAJ3WKAFC">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>

                
                </div>
                </div>
                <div class="anuncio">
                <img src="<?php echo $temp[15]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[15]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[15]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[15]['precio_venta'];  ?></p>

                    <br>
                    <center>
                    <a href="view.php?id=<?php echo $temp[15]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
                     <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="ZJNHC93Q9S55A">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>

                
                </div>

                </div>

                <div class="anuncio">

                <img src="<?php echo $temp[16]['url_img']?>" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[16]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[16]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[16]['precio_venta'];  ?></p>

                    <br>
                    <center>
                    <a href="view.php?id=<?php echo $temp[16]['id_prod']?>" style="font-weight: 40;text-decoration: none;background-color: #094966;text-align: center; padding: .5rem 4rem;margin-top: 2rem;
    margin-bottom: 2rem; border-radius: 3rem;color:white">Ver producto</a></center>
     <br>
                    <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="K7VRGEBCYBGCC">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>

                
                
                </div>

                </div>


            </div>
        </main>

        <footer>
            <section class="finalpagina">
                <nav class="links info2">
                    <div class="contenedor-nosotros">
                        <div class="contenido-nosotros info1">
                            <a href="contactanos.html">
                                <h3 class="links-f">Contáctanos</h3>
                            </a>
                            <p class="ubi info"><strong>Ubicación: </strong>Av. El Sol, Col. San Miguel , SJR, Qro CP. 76890</p>
                            <p><strong>Correo: </strong> clientes.pr@outlook.com.mx</p>
                            <p>Folleto del mes</p>
                            <p>Ofertas</p>
                            <p>Facturación</p>
                        </div>
                        <div class="contenido-nosotros info1">
                            <a href="nosotros.html">
                                <h3 class="links-f">Información del Sitio</h3>
                            </a>
                            <p class="info">Convenio de Usuario</p>
                            <p>Aviso de privacidad</p>
                            <p>Devoluciones</p>
                            <p>Términos y Condiciones</p>
                        </div>
                        <div class="contenido-nosotros info1">
                            <a href="contactanos.html" class="info">
                                <h3 class="links-f">Atención al Cliente</h3>
                            </a>
                            <p class="info">Proveedores</p>
                            <p>Información de Entrega</p>
                        </div>
                    </div>
                </nav>
                <hr>
                <div>
                    <img src="img/redes.png" alt="" class="redes">
                </div>
            </section>
        </footer>
    </div>
</body>

</html>