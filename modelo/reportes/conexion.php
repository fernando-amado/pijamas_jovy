<?php 

   class Conexion{
   	  public function conectar(){
   	  	  $conexion= new PDO("mysql:host=localhost;dbname=pijamas_jovy","root","");
   	  	  return $conexion;
   	  }
   }
 $mysqli = new mysqli ("localhost","root","","pijamas_jovy");
 ?>
