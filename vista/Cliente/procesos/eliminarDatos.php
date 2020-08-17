<?php 

    require_once "../../../modelo/Cliente.php";
    $id=$_POST['Id_cliente'];

    echo Crud::eliminarDatos($id);

 ?>