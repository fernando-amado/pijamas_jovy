<?php 

    require_once "../../../modelo/Empleado.php";

    $datos=array(
            'nombre_us' => $_POST['nombre'],
<<<<<<< HEAD
            'apellido_us' => $_POST['apellido'], 
=======
            'apellidos_us' => $_POST['apellido'], 
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
            'documento_us' => $_POST['documento'], 
            'telefono_us' => $_POST['telefono'],
            'correo_us' => $_POST['correo'],
            'direccion_us' => $_POST['direccion'],
            'rol' => $_POST['rol'], 
                 );

    echo Crud::insertarDatos($datos);

 ?>