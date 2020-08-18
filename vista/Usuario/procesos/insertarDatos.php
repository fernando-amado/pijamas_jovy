<?php 

    require_once "../../../modelo/Empleado.php";

    $datos=array(
            'nombre_us' => $_POST['nombre'],
            'apellido_us' => $_POST['apellido'], 
            'documento_us' => $_POST['documento'], 
            'telefono_us' => $_POST['telefono'],
            'correo_us' => $_POST['correo'],
            'direccion_us' => $_POST['direccion'],
            'contrasena' => $_POST['contraseña'],
            'rol' => $_POST['rol'], 
                 );

    echo Crud::insertarDatos($datos);

 ?>