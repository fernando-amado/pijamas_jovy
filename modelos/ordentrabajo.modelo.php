<?php

require_once "conexion.php";
<<<<<<< HEAD

class ModeloOrdentrabajo{

	/*=============================================
	MOSTRAR ORDEN DE TRABAJO
=======
use \Modelos\Conexion;
class ModeloOrdentrabajo extends Conexion{

	/*=============================================
	MOSTRAR VENTAS
>>>>>>> fernando
	=============================================*/

	static public function mdlMostrarOrdentrabajo($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id ASC");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id ASC");

			$stmt -> execute();

			return $stmt -> fetchAll(); 

		}
		
		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
<<<<<<< HEAD
	REGISTRO DE ORDEN DE TRABAJO
=======
	REGISTRO DE VENTA
>>>>>>> fernando
	=============================================*/

	static public function mdlIngresarOrdentrabajo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo, id_usuario, cantidad_solicitada, cantidad_entregada, fecha_entrega, material) VALUES (:codigo, :id_usuario, :cantidad_solicitada, :cantidad_entregada, :fecha_entrega, :material)");

		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);
		$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);
<<<<<<< HEAD
		$stmt->bindParam(":cantidad_solicitada", $datos["cantidad_solicitada"], PDO::PARAM_STR);
=======
		$stmt->bindParam(":cantidad_solicitada", $datos["cantidad_solicitada"], PDO::PARAM_INT);
>>>>>>> fernando
		$stmt->bindParam(":cantidad_entregada", $datos["cantidad_entregada"], PDO::PARAM_STR);
	
		$stmt->bindParam(":fecha_entrega", $datos["fecha_entrega"], PDO::PARAM_STR);
		$stmt->bindParam(":material", $datos["material"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	EDITAR VENTA
	=============================================*/

	static public function mdlEditarOrdentrabajo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  id_usuario = :id_usuario, cantidad_solicitada = :cantidad_solicitada, cantidad_entregada = :cantidad_entregada,  fecha_entrega= :fecha_entrega, material = :material WHERE codigo = :codigo");

<<<<<<< HEAD
		$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);
		$stmt->bindParam(":cantidad_solicitada", $datos["cantidad_solicitada"], PDO::PARAM_STR);
=======
		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);
		$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);
		$stmt->bindParam(":cantidad_solicitada", $datos["cantidad_solicitada"], PDO::PARAM_INT);
>>>>>>> fernando
		$stmt->bindParam(":cantidad_entregada", $datos["cantidad_entregada"], PDO::PARAM_STR);

		$stmt->bindParam(":fecha_entrega", $datos["fecha_entrega"], PDO::PARAM_STR);
		$stmt->bindParam(":material", $datos["material"], PDO::PARAM_STR);
<<<<<<< HEAD
		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);
=======
>>>>>>> fernando

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
<<<<<<< HEAD
	ELIMINAR ORDEN TRABAJO
=======
	ELIMINAR VENTA
>>>>>>> fernando
	=============================================*/

	static public function mdlEliminarOrdentrabajo($tabla, $datos){

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
	RANGO FECHAS
	=============================================*/	

<<<<<<< HEAD
	static public function mdlRangoFechasOrdentrabajo($tabla, $fechaIni, $fechaFin){

		if($fechaIni == null){
=======
	static public function mdlRangoFechasOrdentrabajo($tabla, $fechaInicial, $fechaFinal){

		if($fechaInicial == null){
>>>>>>> fernando

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id ASC");

			$stmt -> execute();

			return $stmt -> fetchAll();	 


<<<<<<< HEAD
		}else if($fechaIni == $fechaFin){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecha like '%$fechaFin%'");

			$stmt -> bindParam(":fecha", $fechaFin, PDO::PARAM_STR);
=======
		}else if($fechaInicial == $fechaFinal){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecha like '%$fechaFinal%'");

			$stmt -> bindParam(":fecha", $fechaFinal, PDO::PARAM_STR);
>>>>>>> fernando

			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

<<<<<<< HEAD
			$fechaAct = new DateTime();
			$fechaAct ->add(new DateInterval("P1D"));
			$fechaActMasUno = $fechaAct->format("Y-m-d");

			$fechaFin2 = new DateTime($fechaFin);
			$fechaFin2 ->add(new DateInterval("P1D"));
			$fechaFinMasUno = $fechaFin2->format("Y-m-d");

			if($fechaFinMasUno == $fechaActMasUno){

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecha BETWEEN '$fechaIni' AND '$fechaFinMasUno'");
=======
			$fechaActual = new DateTime();
			$fechaActual ->add(new DateInterval("P1D"));
			$fechaActualMasUno = $fechaActual->format("Y-m-d");

			$fechaFinal2 = new DateTime($fechaFinal);
			$fechaFinal2 ->add(new DateInterval("P1D"));
			$fechaFinalMasUno = $fechaFinal2->format("Y-m-d");

			if($fechaFinalMasUno == $fechaActualMasUno){

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecha BETWEEN '$fechaInicial' AND '$fechaFinalMasUno'");
>>>>>>> fernando

			}else{


<<<<<<< HEAD
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecha BETWEEN '$fechaIni' AND '$fechaFin'");
=======
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecha BETWEEN '$fechaInicial' AND '$fechaFinal'");
>>>>>>> fernando

			}
		
			$stmt -> execute();

			return $stmt -> fetchAll();

		}

	}
<<<<<<< HEAD
=======


>>>>>>> fernando
	
}