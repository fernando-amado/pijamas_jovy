<?php

namespace Modelos;
require_once "conexion.php";
use \Modelos\Conexion;
use \Exception, \PDOException;
use PDO;
use Libs\Helper;

class ModeloUsuarios extends Conexion{

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarUsuarios($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	static public function mdlIngresarUsuario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, usuario, password, perfil, foto) VALUES (:nombre, :usuario, :password, :perfil, :foto)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

	/*=============================================
	EDITAR USUARIO
	=============================================*/

	static public function mdlEditarUsuario($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, password = :password, perfil = :perfil, foto = :foto WHERE usuario = :usuario");

		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt -> bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt -> bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
		$stmt -> bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR USUARIO
	=============================================*/

	static public function mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	BORRAR USUARIO
	=============================================*/

	static public function mdlBorrarUsuario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;


	}

	/*=============================================
	VERIFICACION DE CORREO
	=============================================*/
	static public function getUserWithEmail($p_correo)
    {
		$stmt = Conexion::conectar()->prepare("SELECT id, nombre, usuario,correo, password , perfil,foto, estado,ultimo_login, Ordenes,  fecha, codigo, fechaRecuperacion FROM usuarios WHERE correo= :p_correo LIMIT 1");
    
        $parameters = array(':p_correo' => $p_correo);

        try {
			
            $query = $stmt;
            $query->execute($parameters);
            return ($query->rowcount() ? $query->fetch() : false);

        } catch (PDOException $e) {

            $logModel = new Log();
            $sql = Helper::debugPDO($stmt, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;

        } catch (Exception $e) {
            
            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;
        }
	}

	/**
     * Obtener una persona por el código generado para el cambio de contraseña
     * @param string $p_codigo
     */
    public function getUserWithCode($p_codigo)
    {
        $sql = "SELECT id, nombre, usuario,correo, password , perfil,foto, estado,ultimo_login, Ordenes,  fecha, codigo, fechaRecuperacion FROM usuario WHERE codigo = :p_codigo LIMIT 1";
        $parameters = array(':p_codigo' => $p_codigo);

        try {

            $query = $this->db->prepare($sql);
            $query->execute($parameters);
            return ($query->rowcount() ? $query->fetch() : false);

        } catch (PDOException $e) {

            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;

        } catch (Exception $e) {
            
            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;
        }
	}
	
	
	/*=============================================
	ACTUALIACION DE CODIGO Y FECHA DE RECUPERACION
	=============================================*/
	public function recoverPassword($p_correo, $p_codigo, $p_fechaRecuperacion)
    {
        $stmt = Conexion::conectar()->prepare( "UPDATE usuarios SET codigo = :p_codigo, fechaRecuperacion = :p_fechaRecuperacion WHERE correo = :p_correo");
        $parameters = array(
            ':p_correo' => $p_correo,
            ':p_codigo' => $p_codigo,
            ':p_fechaRecuperacion' => $p_fechaRecuperacion
        );

        try {

            $query = $stmt;
            return $query->execute($parameters);

        } catch (PDOException $e) {

            $logModel = new Log();
            $sql = Helper::debugPDO($stmt, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;

        } catch (Exception $e) {
            
            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;
        }
	}
	 /**
     * Cambiar la contraseña desde la recuperación de la cuenta
     * @param string $p_idUsuario Id Usuario
     * @param string $p_contrasena Contraseña
     */
    public function updatePasswordFromRecover($p_id, $p_password)
    {
        $stmt = Conexion::conectar()->prepare("UPDATE usuarios SET password = :p_password, codigo = NULL, fechaRecuperacion = NULL WHERE id = :p_id");
        $parameters = array(
            ':p_password' => $p_password,
            ':p_id' => $p_id
        );

        try {

            $query = $stmt;
            return $query->execute($parameters);

        } catch (PDOException $e) {

            $logModel = new Log();
            $sql = Helper::debugPDO($stmt, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;

        } catch (Exception $e) {
            
            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;
        }
    }

}