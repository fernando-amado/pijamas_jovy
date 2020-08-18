<?php 

    require_once "../../../modelo/Empleado.php";

    $datos=array(
            'nombre_us' => $_POST['nombreu'],
            'apellido_us' => $_POST['apellidou'], 
            'documento_us' => $_POST['documentou'], 
            'telefono_us' => $_POST['telefonou'],
            'correo_us' => $_POST['correou'], 
            'direccion_us' => $_POST['direccionu'],
            'rol' => $_POST['rolu'],   
            
            'id_usuario' => $_POST['id_usuario']      
                 );

    echo Crud::actualizarDatos($datos);

 ?>