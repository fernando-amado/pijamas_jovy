<?php
    require_once "../../../controlador/conexion.php";
    class Crud extends Conexion{
    	public function mostrarDatos(){
    		$sql="SELECT Id_producto,
    		            Nombre_producto,
    		            Precio_producto,
                        Cantidad_producto,
                        Talla_producto,
                        Id_orden_trabajo,
                        Id_pedido
    		    from producto";
    		$query=Conexion::conectar()->prepare($sql);
    		$query->execute();
    		return $query->fetchAll();
    		$query->close();
    	}

        public function insertarDatos($datos){
            $sql="INSERT into producto ( Nombre_producto, Precio_producto, Cantidad_producto, Talla_producto, Id_orden_trabajo, Id_pedido)
                            values ( :Nombre_producto, :Precio_producto, :Cantidad_producto, :Talla_producto, :Id_orden_trabajo, :Id_pedido)";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindparam(":Nombre_producto", $datos["Nombre_producto"], PDO::PARAM_STR);
            $query->bindparam(":Precio_producto", $datos["Precio_producto"], PDO::PARAM_STR);
            $query->bindparam(":Cantidad_producto", $datos["Cantidad_producto"], PDO::PARAM_STR);
            $query->bindparam(":Talla_producto", $datos["Talla_producto"], PDO::PARAM_STR);
            $query->bindparam(":Id_orden_trabajo", $datos["Id_orden_trabajo"], PDO::PARAM_STR);
            $query->bindparam(":Id_pedido", $datos["Id_pedido"], PDO::PARAM_STR);
            

            return $query->execute();

            $query->close();
        }

        public function obtenerDatos($id){
            $sql="SELECT Id_producto,
                        Nombre_producto,
                        Precio_producto,
                        Cantidad_producto,
                        Talla_producto,
                        Id_orden_trabajo,
                        Id_pedido
                      
                from producto where Id_producto=:Id_producto";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindparam(":Id_producto", $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
            $query->close();
        }

        public function actualizarDatos($datos){
            $sql="UPDATE producto set Nombre_producto = :Nombre_producto,
                                    Precio_producto = :Precio_producto,
                                    Cantidad_producto = :Cantidad_producto,
                                    Talla_producto = :Talla_producto,
                                    Id_orden_trabajo = :Id_orden_trabajo,
                                    Id_pedido = :Id_pedido
                                  
                        where Id_producto=:Id_producto";
            $query=Conexion::conectar()->prepare($sql);

            $query->bindparam(":Nombre_producto", $datos["Nombre_producto"], PDO::PARAM_STR);
            $query->bindparam(":Precio_producto", $datos["Precio_producto"], PDO::PARAM_STR);
            $query->bindparam(":Cantidad_producto", $datos["Cantidad_producto"], PDO::PARAM_STR);
            $query->bindparam(":Talla_producto", $datos["Talla_producto"], PDO::PARAM_STR);
            $query->bindparam(":Id_orden_trabajo", $datos["Id_orden_trabajo"], PDO::PARAM_STR);
            $query->bindparam(":Id_pedido", $datos["Id_pedido"], PDO::PARAM_STR);
           
            $query->bindparam(":Id_producto", $datos["Id_producto"], PDO::PARAM_INT);

            return $query->execute();


            $query->close();
        }

        public function eliminarDatos($id){
            $sql="DELETE from producto where Id_producto=:Id_producto";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindparam(":Id_producto", $id, PDO::PARAM_INT);
            return $query->execute();
            $query->close();
        }

    }
