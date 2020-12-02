<?php
include ("assets/data/conexion.php");
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $con = new Conexion();
    $stmt = $con->detalles($id);
    if ($stmt != false) {
        // kk
        $row = $stmt->fetch();
    }
}

include ('assets/data/Configuracion.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,700;0,900;1,700&family=Roboto:wght@400;700&display=swap"  rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styleV.css">
    <link rel="stylesheet" href="assets/css/compras.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Compras</title>
  
</head>
<body>
    <div class="media">
    <header>
        <div class=" contenidoh contenido-header ">
            <div class="titulo ">
                <a href="index.html">
                    <!--Logo-->
                    <img src="img/logo.png " alt="Pride" class="logo ">
                </a>
                <div class="logot ">𝓟𝓻𝓲𝓭𝓮</div>
                <nav class="links ">
                    <a href="pagina.html">Inicio</a>
                    <a href="productos.html">Regalos</a>
                    <a href="contacto.html">Contáctanos</a>
                    <a href="nosotros.html">Nosotros</a>
                    <a href="VerCarta.php">Ver Carta</a>
                    <a href="Pagos.php">Pagos</a>
                   <!-- 
                    <a href="registro-ingreso.php">Registro</a>
                    <a href="administra.php">Admin</a> -->
                </nav>
            </div>
        </div>
    </header>
    
    <div class="division">
        <div class="mitades">
            
            <div class="centrarImagen">
                <img src="assets/img/cupcakes.jpg" alt="colores">
                
           </div>
        </div>
        

        <div class="mitades">
    <div class="Formulario">
    <form action="">
    <datalist id="ventac">
        <option value="1 unidad"></option>
        <option value="2 unidades"></option>
        <option value="3 unidades"></option>
        <option value="4 unidades"></option>
        <option value="5 unidades"></option>
        <option value="Más de 6 unidades"></option>
    </datalist>
          <fieldset class="datos">
              <legend>Información sobre Producto</legend>
              <h3>Nombre del Producto</h3>
               <p><?php echo isset($row[1]) ? $row[1]: "-"; ?></p>
              <h3>Descripción</h3>
              <p><?php echo isset($row[2]) ? $row[2]: "-"; ?></p>
              <div>
                <h3>Precio</h3>
                <p><?php echo isset($row[3]) ? "$".$row[3]: "$0"; ?></p>
                <h3>Cantidad</h3>
                  <input list="ventac" name="ventac" type="text" placeholder="--Selecciona--" />
              </div>
              
               <a class="btn btn-success" href="assets/data/AccionCarta.php?action=addToCart&id=<?php echo $row[0]; ?>">Comprar</a>

              <p class="precio">Devolución Gratis</p><p>Tienes 30 días para devolverlo por algún defrecto. Solo aplica en cosas que no sean alimentos</p>
              <p class="precio">Compra Protegida</p><p>Recibe el producto que esperabas o te devolvemos tu dinero.</p>
              <p class="precio">12 meses de Garantía</p>
          </fieldset>
        </form>
        </div>
    </div>
    
    </div>



        <footer>
            <section class="finalpagina ">
                <nav class="links info2 ">
                    <div class="contenedor-nosotros ">
                        <div class="contenido-nosotros info1 ">
                            <a href="contactanos.html ">
                                <h3 class="links-f ">Contáctanos</h3>
                            </a>
                            <p class="ubi info "><strong>Ubicación: </strong>Av. El Sol, Col. San Miguel , SJR, Qro CP. 76890</p>
                            <p><strong>Correo: </strong> clientes.pr@outlook.com.mx</p>
                            <p>Folleto del mes</p>
                            <p>Ofertas</p>
                            <p>Facturación</p>
                        </div>
                        <div class="contenido-nosotros info1 ">
                            <a href="nosotros.html ">
                                <h3 class="links-f ">Información del Sitio</h3>
                            </a>
                            <p class="info ">Convenio de Usuario</p>
                            <p>Aviso de privacidad</p>
                            <p>Devoluciones</p>
                            <p>Términos y Condiciones</p>
                        </div>
                        <div class="contenido-nosotros info1 ">
                            <a href="contactanos.html " class="info ">
                                <h3 class="links-f ">Atención al Cliente</h3>
                            </a>
                            <p class="info ">Proveedores</p>
                            <p>Información de Entrega</p>
                        </div>
                    </div>
                </nav>
                <hr>
                <div>
                    <img src="img/redes.png " alt=" " class="redes ">
                </div>
            </section>
        </footer>
        </div>
</body>
</html>