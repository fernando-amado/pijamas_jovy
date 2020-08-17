<?php 

    require_once "../../../modelo/Empleado.php";

    $datos=array(
            'nombre_us' => $_POST['nombre'],
            'apellidos_us' => $_POST['apellido'], 
            'documento_us' => $_POST['documento'], 
            'telefono_us' => $_POST['telefono'],
            'correo_us' => $_POST['correo'],
            'direccion_us' => $_POST['direccion'],
            'rol' => $_POST['rol'], 
                 );

    echo Crud::insertarDatos($datos);

 ?>