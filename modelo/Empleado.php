<?php

    require_once "../../../controlador/conexion.php";
    

    class Crud extends Conexion{
    	public function mostrarDatos(){
    		$sql="SELECT id_usuario,
    		            nombre_us,
<<<<<<< HEAD
    		            apellido_us,
=======
    		            apellidos_us,
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
                        documento_us,
                        telefono_us,
                        correo_us,
                        direccion_us,
                        rol
    		    from usuario";
    		$query=Conexion::conectar()->prepare($sql);
    		$query->execute();
    		return $query->fetchAll();
    		$query->close();
    	}

        public function insertarDatos($datos){
<<<<<<< HEAD
            $sql="INSERT into usuario ( nombre_us, apellido_us, documento_us, telefono_us, correo_us, direccion_us, rol)
                            values ( :nombre_us, :apellido_us, :documento_us, :telefono_us, :correo_us, :direccion_us, :rol)";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindparam(":nombre_us", $datos["nombre_us"], PDO::PARAM_STR);
            $query->bindparam(":apellido_us", $datos["apellido_us"], PDO::PARAM_STR);
            $query->bindparam(":documento_us", $datos["documento_us"], PDO::PARAM_STR);
            $query->bindparam(":telefono_us", $datos["telefono_us"], PDO::PARAM_STR);
            $query->bindparam(":correo_us", $datos["correo_us"], PDO::PARAM_STR);
            $query->bindparam(":direccion_us", $datos["direccion_us"], PDO::PARAM_STR);
            $query->bindparam(":rol", $datos["rol"], PDO::PARAM_STR);
=======
            $sql="INSERT into usuario ( nombre_us, Apellidos_us, Documento_us, Telefono_us, Correo_us, Direccion_us)
                            values ( :nombre_us, :Apellidos_us, :Documento_us, :Telefono_us, :Correo_us, :Direccion_us)";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindparam(":nombre_us", $datos["nombre_us"], PDO::PARAM_STR);
            $query->bindparam(":apellidos_us", $datos["apellidos_us"], PDO::PARAM_STR);
            $query->bindparam(":documento_us", $datos["documento_us"], PDO::PARAM_STR);
            $query->bindparam(":telefono_cliente", $datos["telefono_us"], PDO::PARAM_STR);
            $query->bindparam(":correo_us", $datos["correo_us"], PDO::PARAM_STR);
            $query->bindparam(":direccion_us", $datos["direccion_us"], PDO::PARAM_STR);
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
            

            return $query->execute();

            $query->close();
        }

        public function obtenerDatos($id){
            $sql="SELECT id_usuario,
                        nombre_us,
<<<<<<< HEAD
                        apellido_us,
=======
                        apellidos_us,
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
                        documento_us,
                        telefono_us,
                        correo_us,
                        direccion_us,
                        rol
                      
                from usuario where id_usuario=:id_usuario";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindparam(":id_usuario", $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
            $query->close();
        }

        public function actualizarDatos($datos){
            $sql="UPDATE usuario set nombre_us = :nombre_us,
<<<<<<< HEAD
                                    apellido_us = :apellido_us,
                                    documento_us= :documento_us,
                                    telefono_us = :telefono_us,
                                    correo_us = :correo_us,
                                    direccion_us = :direccion_us,
                                    rol = :rol
=======
                                    apellidos_us = :apellidos_us,
                                    documento_us = :documento_us,
                                    telefono_us = :telefono_us,
                                    correo_us = :correo_us,
                                    direccion_us = :direccion_us
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
                                  
                        where id_usuario=:id_usuario";
            $query=Conexion::conectar()->prepare($sql);

            $query->bindparam(":nombre_us", $datos["nombre_us"], PDO::PARAM_STR);
<<<<<<< HEAD
            $query->bindparam(":apellido_us", $datos["apellido_us"], PDO::PARAM_STR);
=======
            $query->bindparam(":apellidos_us", $datos["apellidos_us"], PDO::PARAM_STR);
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
            $query->bindparam(":documento_us", $datos["documento_us"], PDO::PARAM_STR);
            $query->bindparam(":telefono_us", $datos["telefono_us"], PDO::PARAM_STR);
            $query->bindparam(":correo_us", $datos["correo_us"], PDO::PARAM_STR);
            $query->bindparam(":direccion_us", $datos["direccion_us"], PDO::PARAM_STR);
<<<<<<< HEAD
            $query->bindparam(":rol", $datos["rol"], PDO::PARAM_STR);
            
=======
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
           
            $query->bindparam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);

            return $query->execute();


            $query->close();
        }

        public function eliminarDatos($id){
            $sql="DELETE from usuario where id_usuario=:id_usuario";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindparam(":id_usuario", $id, PDO::PARAM_INT);
            return $query->execute();
            $query->close();
        }

    }

?>
