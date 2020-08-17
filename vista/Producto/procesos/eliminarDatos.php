<?php 

    require_once "../crud/crud.php";
    $id=$_POST['Id_producto'];

    echo Crud::eliminarDatos($id);

 ?>