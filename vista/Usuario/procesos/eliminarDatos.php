<?php 

    require_once "../../../modelo/Usuario.php";
    $id=$_POST['id_cliente'];

    echo Crud::eliminarDatos($id);

 ?>