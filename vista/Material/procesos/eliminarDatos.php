<?php 

<<<<<<< HEAD
    require_once "../../../modelo/Material.php";
    $id=$_POST['Id_material'];
=======
    require_once "../../../modelo/Cliente.php";
    $id=$_POST['Id_cliente'];
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076

    echo Crud::eliminarDatos($id);

 ?>