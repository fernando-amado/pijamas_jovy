<?php

require_once "../../../controlador/conexion.php";
class Crud extends Conexion{
	public function mostrarDatos(){
		$sql="SELECT Id_cliente,
		            Nombres_cliente,
		            Apellidos_cliente,
                    Documento_cliente,
                    Telefono_cliente,
                    Correo_cliente,
                    Direccion_cliente
		    from cliente";
		$query=Conexion::conectar()->prepare($sql);
		$query->execute();
		return $query->fetchAll();
		$query->close();
	}
    public function insertarDatos($datos){
        $sql="INSERT into cliente ( Nombres_cliente, Apellidos_cliente, Documento_cliente, Telefono_cliente, Correo_cliente, Direccion_cliente)
                        values ( :Nombres_cliente, :Apellidos_cliente, :Documento_cliente, :Telefono_cliente, :Correo_cliente, :Direccion_cliente)";
        $query=Conexion::conectar()->prepare($sql);
        $query->bindparam(":Nombres_cliente", $datos["Nombres_cliente"], PDO::PARAM_STR);
        $query->bindparam(":Apellidos_cliente", $datos["Apellidos_cliente"], PDO::PARAM_STR);
        $query->bindparam(":Documento_cliente", $datos["Documento_cliente"], PDO::PARAM_STR);
        $query->bindparam(":Telefono_cliente", $datos["Telefono_cliente"], PDO::PARAM_STR);
        $query->bindparam(":Correo_cliente", $datos["Correo_cliente"], PDO::PARAM_STR);
        $query->bindparam(":Direccion_cliente", $datos["Direccion_cliente"], PDO::PARAM_STR);
        
        return $query->execute();
        $query->close();
    }
    public function obtenerDatos($id){
        $sql="SELECT Id_cliente,
                    Nombres_cliente,
                    Apellidos_cliente,
                    Documento_cliente,
                    Telefono_cliente,
                    Correo_cliente,
                    Direccion_cliente
                  
            from cliente where Id_cliente=:Id_cliente";
        $query=Conexion::conectar()->prepare($sql);
        $query->bindparam(":Id_cliente", $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch();
        $query->close();
    }
    public function actualizarDatos($datos){
        $sql="UPDATE cliente set Nombres_cliente = :Nombre_cliente,
                                Apellidos_cliente = :Apellidos_cliente,
                                Documento_cliente = :Documento_cliente,
                                Telefono_cliente = :telefono_cliente,
                                Correo_cliente = :Correo_cliente,
                                Direccion_cliente = :Direccion_cliente
                              
                    where Id_cliente=:Id_cliente";
        $query=Conexion::conectar()->prepare($sql);
        $query->bindparam(":Nombres_cliente", $datos["Nombres_cliente"], PDO::PARAM_STR);
        $query->bindparam(":Apellidos_cliente", $datos["Apellidos_cliente"], PDO::PARAM_STR);
        $query->bindparam(":Documento_cliente", $datos["Documento_cliente"], PDO::PARAM_STR);
        $query->bindparam(":Telefono_cliente", $datos["Telefono_cliente"], PDO::PARAM_STR);
        $query->bindparam(":Correo_cliente", $datos["Correo_cliente"], PDO::PARAM_STR);
        $query->bindparam(":Direccion_cliente", $datos["Direccion_cliente"], PDO::PARAM_STR);
       
        $query->bindparam(":Id_cliente", $datos["Id_cliente"], PDO::PARAM_INT);
        return $query->execute();
        $query->close();
    }
    public function eliminarDatos($id){
        $sql="DELETE from cliente where Id_cliente=:Id_cliente";
        $query=Conexion::conectar()->prepare($sql);
        $query->bindparam(":Id_cliente", $id, PDO::PARAM_INT);
        return $query->execute();
        $query->close();
    }
}
