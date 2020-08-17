<?php 

    require_once "../../../modelo/Cliente.php";
    $id=$_POST['Id_cliente'];

    echo json_encode(Crud::obtenerDatos($id));

 ?>