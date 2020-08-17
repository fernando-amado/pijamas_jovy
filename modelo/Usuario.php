<?php 
include_once 'Conexion.php';
require_once "../../../controlador/Conexion.php";
/**
 * 
 */
class Crud extends Conexion
{
	
	var $objetos;
	public function __construct(){
		$db = new Conexion();
		$this->acceso =$db->pdo;
	}
	function Loguearse($correo,$pass){
		$sql="SELECT * FROM usuario inner join rol on rol=id_rol
		where correo_us=:correo and contrasena=:pass ";
		$query= $this->acceso->prepare($sql);
		$query->execute(array(':correo'=>$correo,':pass'=>$pass));
		$this->objetos=$query->fetchall();
		return $this->objetos;
	}
	function obtener_datos($id){
		$sql="SELECT * FROM usuario join rol on rol=id_rol AND id_usuario=:id";
		$query= $this->acceso->prepare($sql);
		$query->execute(array(':id'=>$id));
		$this->objetos=$query->fetchall();
		return $this->objetos;
	}
	public function mostrarDatos(){
		$sql="SELECT id_us,
					nombre_us,
					apellidos_us,
					documento_us,
					telefono_us,
					correo_us,
					direccion_us,
					rol_us
			from usuario";
		$query=Conexion::conectar()->prepare($sql);
		$query->execute();
		return $query->fetchAll();
		$query->close();
	}

	public function insertarDatos($datos){
		$sql="INSERT into usuario ( nombre_us, apellidos_us, documento_us, telefono_us, correo_us, direccion_us)
						values ( :nombres_us, :apellidos_us, :documento_us, :telefono_us, :correo_us, :direccion_us)";
		$query=Conexion::conectar()->prepare($sql);
		$query->bindparam(":nombre_us", $datos["nombre_us"], PDO::PARAM_STR);
		$query->bindparam(":apellidos_us", $datos["apellidos_us"], PDO::PARAM_STR);
		$query->bindparam(":documento_us", $datos["documento_us"], PDO::PARAM_STR);
		$query->bindparam(":telefono_us", $datos["telefono_us"], PDO::PARAM_STR);
		$query->bindparam(":correo_us", $datos["correo_us"], PDO::PARAM_STR);
		$query->bindparam(":direccion_us", $datos["direccion_us"], PDO::PARAM_STR);
		

		return $query->execute();

		$query->close();
	}

	public function obtenerDatos($id){
		$sql="SELECT id_usuario,
					nombre_us,
					apellidos_us,
					documento_us,
					telefono_us,
					Correo_us,
					direccion_us
				  
			from usuario where id_usuario=:id_usuario";
		$query=Conexion::conectar()->prepare($sql);
		$query->bindparam(":id_usuario", $id, PDO::PARAM_INT);
		$query->execute();
		return $query->fetch();
		$query->close();
	}
	public function actualizarDatos($datos){
		$sql="UPDATE usuario set nombre_us = :nombre_us,
								apellidos_us = :apellidos_us,
								documento_us = :documento_us,
								telefono_us = :telefono_us,
								Correo_us = :Correo_us,
								direccion_us = :direccion_us
							  
					where id_cliente=:id_usuario";
		$query=Conexion::conectar()->prepare($sql);

		$query->bindparam(":nombre_us", $datos["nombre_us"], PDO::PARAM_STR);
		$query->bindparam(":apellidos_us", $datos["apellidos_us"], PDO::PARAM_STR);
		$query->bindparam(":documento_us", $datos["documento_us"], PDO::PARAM_STR);
		$query->bindparam(":telefono_us", $datos["telefono_us"], PDO::PARAM_STR);
		$query->bindparam(":Correo_us", $datos["Correo_us"], PDO::PARAM_STR);
		$query->bindparam(":direccion_us", $datos["direccion_us"], PDO::PARAM_STR);
	   
		$query->bindparam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);

		return $query->execute();


		$query->close();
	}

	public function eliminarDatos($id){
		$sql="DELETE from usuario where id_cliente=:id_usuario";
		$query=Conexion::conectar()->prepare($sql);
		$query->bindparam(":id_usuario", $id, PDO::PARAM_INT);
		return $query->execute();
		$query->close();
	}

}

 ?>