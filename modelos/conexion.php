<?php
<<<<<<< HEAD
=======
namespace Modelos;
use PDO;

>>>>>>> fernando

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=jovypijamas",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}