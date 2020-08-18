<?php 
include_once 'Conexion.php';
/**
 * 
 */
class Usuario
{
	public $id;
	public $nombre_us;
	public $apellido_us;
	public $documento_us;
	public $rol;
	
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
	
}
