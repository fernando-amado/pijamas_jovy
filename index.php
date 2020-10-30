<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/ventas.controlador.php";
require_once "controladores/tipomaterial.controlador.php";
require_once "controladores/material.controlador.php";
require_once "controladores/ordentrabajo.controlador.php";


require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/ventas.modelo.php";
require_once "modelos/tipomaterial.modelo.php";
require_once "modelos/material.modelo.php";
require_once "modelos/ordentrabajo.modelo.php";
require_once "extensiones/vendor/autoload.php";
<<<<<<< HEAD

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
=======
require_once "config/config.php";



$controller = 'plantilla';


// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c']))
{
    require_once "controladores/$controller.controlador.php";
    $controller = 'Controlador'. ucwords($controller) ;
    $controller = new $controller;
    $controller->ctrPlantilla();    
}
else
{
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    // Instanciamos el controlador
    require_once "controladores/$controller.controlador.php";
    $controller =  'Controlador'.ucwords($controller) ;
    $controller = new $controller;
    
    // Llama la accion
    call_user_func( array($controller, $accion ) );
}
>>>>>>> fernando
