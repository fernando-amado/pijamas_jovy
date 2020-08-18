<?php 

<<<<<<< HEAD
    require_once "../../../modelo/Empleado.php";
    $id=$_POST['id_usuario'];
=======
    require_once "../../../modelo/Usuario.php";
    $id=$_POST['id_cliente'];
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076

    echo Crud::eliminarDatos($id);

 ?>