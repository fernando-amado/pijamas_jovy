<?php

    require_once "../../../controlador/conexion.php";
    

    class Crud extends Conexion{
    	public function mostrarDatos(){
    		$sql="SELECT Id_material,
    		            Nombre_material,
    		            Cantidad_material,
                        Tipo_material,
                        Color,
                        Descripcion
    		    from material";
    		$query=Conexion::conectar()->prepare($sql);
    		$query->execute();
    		return $query->fetchAll();
    		$query->close();
    	}

        public function insertarDatos($datos){
            $sql="INSERT into material( Nombre_material, Cantidad_material, Tipo_material, Color, Descripcion)
                            values ( :Nombre_material, :Cantidad_material,  :Tipo_material, :Color, :Descripcion)";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindparam(":Nombre_material", $datos["Nombre_material"], PDO::PARAM_STR);
            $query->bindparam(":Cantidad_material", $datos["Cantidad_material"], PDO::PARAM_STR);
            $query->bindparam(":Tipo_material", $datos["Tipo_material"], PDO::PARAM_STR);
            $query->bindparam(":Color", $datos["Color"], PDO::PARAM_STR);
            $query->bindparam(":Descripcion", $datos["Descripcion"], PDO::PARAM_STR);
            

            return $query->execute();

            $query->close();
        }

        public function obtenerDatos($id){
            $sql="SELECT Id_material,
                        Nombre_material,
                        Cantidad_material,
                        Tipo_material,
                        Color,
                        Descripcion
                      
                from material where Id_material=:Id_material";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindparam(":Id_material", $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
            $query->close();
        }

        public function actualizarDatos($datos){
            $sql="UPDATE material set Nombre_material = :Nombre_material,
                                    Cantidad_material = :Cantidad_material,
                                    Tipo_material= :Tipo_material,
                                    Color = :Color,
                                    Descripcion = :Descripcion
                                  
                        where Id_material=:Id_material";
            $query=Conexion::conectar()->prepare($sql);

            $query->bindparam(":Nombre_material", $datos["Nombre_material"], PDO::PARAM_STR);
            $query->bindparam(":Cantidad_material", $datos["Cantidad_material"], PDO::PARAM_STR);
            $query->bindparam(":Tipo_material", $datos["Tipo_material"], PDO::PARAM_STR);
            $query->bindparam(":Color", $datos["Color"], PDO::PARAM_STR);
            $query->bindparam(":Descripcion", $datos["Descripcion"], PDO::PARAM_STR);
            
           
            $query->bindparam(":Id_material", $datos["Id_material"], PDO::PARAM_INT);

            return $query->execute();


            $query->close();
        }

        public function eliminarDatos($id){
            $sql="DELETE from material where Id_material=:Id_material";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindparam(":Id_material", $id, PDO::PARAM_INT);
            return $query->execute();
            $query->close();
        }

    }
