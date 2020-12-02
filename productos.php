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
                    <img src="assets/img/regalos/r1.jpg" alt="colores">
                    <div class="contenido-anuncio">

                        <h4><?php echo $temp[11]['nombre_producto'];  ?></h4>

                        <p><?php echo $temp[11]['descripcion_producto'];  ?></p>
                        <p class="precio"><?php echo '$'. $temp[11]['precio_venta'];  ?></p>


                        <a href="view.php?id=<?php echo $temp[11]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>
                </div>
                 <div class="anuncio">
                 <img src="assets/img/regalos/r2.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[18]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[18]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[18]['precio_venta'];  ?></p>



                    <a href="view.php?id=<?php echo $temp[18]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>
                </div>

                <div class="anuncio">
                <img src="assets/img/regalos/r3.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[17]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[17]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[17]['precio_venta'];  ?></p>


                    <a href="view.php?id=<?php echo $temp[17]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>

                </div>

                <div class="anuncio">
                <img src="assets/img/regalos/r4.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[19]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[19]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[19]['precio_venta'];  ?></p>


                    <a href="view.php?id=<?php echo $temp[19]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>
                </div>

            </div>
            <div class="contenedor-anuncios">
                <div class="anuncio">
                <img src="assets/img/regalos/r5.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[20]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[20]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[20]['precio_venta'];  ?></p>


                    <a href="view.php?id=<?php echo $temp[20]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>
                </div>

                <div class="anuncio">
                <img src="assets/img/regalos/r7.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[21]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[21]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[21]['precio_venta'];  ?></p>


                    <a href="view.php?id=<?php echo $temp[21]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>

                </div>

                <div class="anuncio">
                <img src="assets/img/regalos/r8.png" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[22]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[22]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[22]['precio_venta'];  ?></p>

                    <a href="view.php?id=<?php echo $temp[22]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>

                    </div>
                </div>
                <div class="anuncio">
                <img src="assets/img/regalos/r9.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[23]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[23]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[23]['precio_venta'];  ?></p>


                    <a href="view.php?id=<?php echo $temp[23]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>
                </div>

            </div>
        </main>

        <main class="seccion contenedor">

            <h2 class="fw-300 centrar-texto">Obsequios para toda ocasión</h2>

            <div class="contenedor-anuncios">
                <div class="anuncio">
                <img src="assets/img/regalos/r10.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[1]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[1]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[1]['precio_venta'];  ?></p>


                    <a href="view.php?id=<?php echo $temp[1]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>
                </div>
                <div class="anuncio">
                <img src="assets/img/regalos/r11.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[4]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[4]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[4]['precio_venta'];  ?></p>


                    <a href="view.php?id=<?php echo $temp[4]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>
                </div>
                <div class="anuncio">
                <img src="assets/img/r26.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[2]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[2]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[2]['precio_venta'];  ?></p>


                    <a href="view.php?id=<?php echo $temp[2]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>

                </div>

                <div class="anuncio">
                <img src="assets/img/regalos/r13.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[3]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[3]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[3]['precio_venta'];  ?></p>

                    <a href="view.php?id=<?php echo $temp[3]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>
                </div>

            </div>
            <div class="contenedor-anuncios">

                <div class="anuncio">
                <img src="assets/img/regalos/r14.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[5]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[5]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[5]['precio_venta'];  ?></p>


                    <a href="view.php?id=<?php echo $temp[5]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>
                </div>

                <div class="anuncio">
                <img src="assets/img/regalos/r15.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[6]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[6]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[6]['precio_venta'];  ?></p>

                    <a href="view.php?id=<?php echo $temp[6]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>

                </div>

                <div class="anuncio">

                <img src="assets/img/regalos/r16.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[7]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[7]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[7]['precio_venta'];  ?></p>

                    <a href="view.php?id=<?php echo $temp[7]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>

                </div>
                <div class="anuncio">
                <img src="assets/img/gomitas.jpg" alt="Libretas">
                    <div class="contenido-anuncio">

                        <h4>Gomitas de Animalitos</h4>

                        <p>Gomas kiut para borrar con tu animalito favorito</p>
                        <p class="precio">$4.00 cada goma diferente</p>

                        <a href="ver_prop1.html" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>
                </div>

            </div>
        </main>


        <main class="seccion contenedor">

            <h2 class="fw-300 centrar-texto">Detalles románticos</h2>

            <div class="contenedor-anuncios">
                <div class="anuncio">
                <img src="assets/img/regalos/r17.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[8]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[8]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[8]['precio_venta'];  ?></p>


                    <a href="view.php?id=<?php echo $temp[8]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>
                </div>
                <div class="anuncio">
                <img src="assets/img/regalos/r18.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[9]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[9]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[9]['precio_venta'];  ?></p>


                    <a href="view.php?id=<?php echo $temp[9]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>
                </div>

                <div class="anuncio">
                <img src="assets/img/regalos/r20.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[10]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[10]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[10]['precio_venta'];  ?></p>

                    <a href="view.php?id=<?php echo $temp[10]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>

                </div>

                <div class="anuncio">
                <img src="assets/img/regalos/r21.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[12]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[12]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[12]['precio_venta'];  ?></p>

                    <a href="view.php?id=<?php echo $temp[12]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>

                    </div>
                </div>

            </div>
            <div class="contenedor-anuncios">

                <div class="anuncio">
                     <img src="assets/img/regalos/r22.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[13]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[13]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[13]['precio_venta'];  ?></p>


                    <a href="view.php?id=<?php echo $temp[13]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>
                </div>
                <div class="anuncio">
                <img src="assets/img/regalos/r23.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[14]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[14]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[14]['precio_venta'];  ?></p>

                    <a href="view.php?id=<?php echo $temp[14]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>
                </div>
                <div class="anuncio">
                <img src="assets/img/regalos/r24.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[15]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[15]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[15]['precio_venta'];  ?></p>

                    <a href="view.php?id=<?php echo $temp[15]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
                    </div>

                </div>

                <div class="anuncio">

                <img src="assets/img/regalos/r25.jpg" alt="colores">
                    <div class="contenido-anuncio">

                    <h4><?php echo $temp[16]['nombre_producto'];  ?></h4>

                    <p><?php echo $temp[16]['descripcion_producto'];  ?></p>
                    <p class="precio"><?php echo '$'. $temp[16]['precio_venta'];  ?></p>

                    <a href="view.php?id=<?php echo $temp[16]['id_prod']?>" class="boton boton-amarillo d-block">Ver producto</a>
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