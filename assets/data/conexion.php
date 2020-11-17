<?php
class Conexion{
    var $conn;

    function conectar(){
        $conn = null;
     try{
        $conn = new PDO('mysql:host=localhost;dbname=papeleria', 
                            'root',
                             '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //echo 'Se estableció la conexión <br> <br>';
        
   }catch(PDOException $e){
        die(print_r('Error conectando a la base de datos:' . $e->getMessage()));

       
   }
   return $conn;
        }

        function buscarUsuario($user, $pass){
            $con = $this->conectar(); //mandar llamar al metodo de conectar

            $consulta = 'SELECT nombre 
                                    FROM usuario 
                                    WHERE usuario=:usuario 
                                    AND contrasena=:pass';

            $stmt = $con->prepare($consulta);                
            $stmt->execute(array(':usuario'=>$user,':pass'=>$pass));
            $registro = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $numRegistros = count($registro);

            return $numRegistros;

        }
        function insertarUsuario($usuario,$pass,$names,$correo){
            $con = $this->conectar();
        
            $stmt = $con->prepare('INSERT INTO usuario(usuario,contrasena,nombre,correo_e) VALUES (:usuario, :pass, :names, :correo)');
            $rows = $stmt->execute(array(':usuario'=>$usuario,
                                          ':pass'=>$pass,
                                          ':names'=>$names,
                                          ':correo'=>$correo));
            return $rows;
        }
        
		function insertarContactoMensaje($nombre, $correo, $asunto, $mensaje) {
			$estado = false;
			$con = $this->conectar();
			$stmt = $con->prepare("INSERT INTO contacto (nombre,correo,asunto,mensaje) VALUES
				(:name,:email,:issue,:msg)");
			$stmt->bindParam(":name",$nombre,PDO::PARAM_STR);
			$stmt->bindParam(":email",$correo,PDO::PARAM_STR);
			$stmt->bindParam(":issue",$asunto,PDO::PARAM_STR);
			$stmt->bindParam(":msg",$mensaje,PDO::PARAM_STR);
			if ($stmt->execute()) {
				$estado = true;
			}
			return $estado;
		}

        
        function buscarProducto(){
             $con = $this->conectar();

             $consulta = 'SELECT * FROM producto';


             $stmt = $con->prepare($consulta);
             $stmt->execute();
             $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);

             return $registros;

        }

        function agregarProducto($id_p, $nombre_p, $descripcion_p, $precio_v, $precio_c, $stock, $url_i){
            $con = $this->conectar();
        
            $stmt= $con->prepare('INSERT INTO producto(id_prod,
                                                        nombre_producto,
                                                        descripcion_producto, 
                                                        precio_venta,
                                                        precio_compra,
                                                        stock, 
                                                        url_img)
                                                VALUES(:id_p,
                                                       :nombre_p, 
                                                       :descripcion_p, 
                                                       :precio_v, 
                                                       :precio_c, 
                                                       :stock, 
                                                       :url_i)');
            $rows = $stmt->execute(array(':id_p'=>$id_p,
                                        ':nombre_p'=>$nombre_p,
                                         ':descripcion_p'=>$descripcion_p,
                                         ':precio_v'=>$precio_v,
                                         ':precio_c'=>$precio_c,
                                         ':stock'=>$stock,
                                         ':url_i'=>$url_i));
        
            return $rows;
        }
} 
?>