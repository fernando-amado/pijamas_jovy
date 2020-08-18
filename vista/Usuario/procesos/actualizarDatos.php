<?php 

    require_once "../../../modelo/Empleado.php";

    $datos=array(
            'nombre_us' => $_POST['nombreu'],
<<<<<<< HEAD
            'apellido_us' => $_POST['apellidou'], 
=======
            'apellidos_us' => $_POST['apellidou'], 
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
            'documento_us' => $_POST['documentou'], 
            'telefono_us' => $_POST['telefonou'],
            'correo_us' => $_POST['correou'], 
            'direccion_us' => $_POST['direccionu'],
<<<<<<< HEAD
            'rol' => $_POST['rolu'],   
=======
            'rol' => $_POST['direccionu'],   
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
            
            'id_usuario' => $_POST['id_usuario']      
                 );

    echo Crud::actualizarDatos($datos);

 ?>