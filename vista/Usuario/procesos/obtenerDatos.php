<?php 

    require_once "../../../modelo/Empleado.php";
    $id=$_POST['id_usuario'];

    echo json_encode(Crud::obtenerDatos($id));

 ?>