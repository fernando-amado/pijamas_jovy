<?php
namespace Modelos;
use PDO;


class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=jovypijamas",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}