<?php 

    require_once "../../../modelo/Producto.php";
    $id=$_POST['Id_producto'];

    echo Crud::eliminarDatos($id);

 ?>