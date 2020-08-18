<?php 

    require_once "../../../modelo/Empleado.php";
    $id=$_POST['id_usuario'];

    echo Crud::eliminarDatos($id);

 ?>