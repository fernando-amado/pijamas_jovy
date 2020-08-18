<?php 
   class conexion{
   	  public function conectar(){
   	  	  $conexion= new PDO("mysql:host=localhost;dbname=pijamas_jovy","root","");
   	  	  return $conexion;
   	  }
   }
