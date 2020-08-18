<?php 

    require_once "../../../modelo/Material.php";
    $id=$_POST['Id_material'];

    echo Crud::eliminarDatos($id);

 ?>