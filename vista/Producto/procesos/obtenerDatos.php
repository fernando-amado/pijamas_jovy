<?php 

    require_once "../../../modelo/Producto.php";
    $id=$_POST['Id_producto'];

    echo json_encode(Crud::obtenerDatos($id));

 ?>