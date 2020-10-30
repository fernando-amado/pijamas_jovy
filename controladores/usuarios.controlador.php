<?php

<<<<<<< HEAD
class ControladorUsuarios{
=======
use Modelos\ModeloUsuarios;
use Libs\Helper;
use Core\Controller;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'Core/Controller.php';
require 'libs/helper.php';

class ControladorUsuarios extends Controller{

	 //Llamado plantilla principal
	 public function Index(){
        
        require_once 'vistas/modulos/login/recuperacion.php';
        
    }
>>>>>>> fernando

	/*=============================================
	INGRESO DE USUARIO
	=============================================*/

	static public function ctrIngresoUsuario(){

		if(isset($_POST["ingUsuario"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"])){

			   	$encriptar = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$tabla = "usuarios";

				$item = "usuario";
				$valor = $_POST["ingUsuario"];

				$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

				if($respuesta["usuario"] == $valor && $respuesta["password"] == $encriptar){

					if($respuesta["estado"] == 1){

						$_SESSION["iniciarSesion"] = "ok";
						$_SESSION["id"] = $respuesta["id"];
						$_SESSION["nombre"] = $respuesta["nombre"];
						$_SESSION["usuario"] = $respuesta["usuario"];
						$_SESSION["foto"] = $respuesta["foto"];
						$_SESSION["perfil"] = $respuesta["perfil"];

						/*=============================================
						REGISTRAR FECHA PARA SABER EL ÚLTIMO LOGIN
						=============================================*/

						date_default_timezone_set('America/Bogota');

						$fecha = date('Y-m-d');
						$hora = date('H:i:s');

						$fechaActual = $fecha.' '.$hora;

						$item1 = "ultimo_login";
						$valor1 = $fechaActual;

						$item2 = "id";
						$valor2 = $respuesta["id"];

						$ultimoLogin = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

						if($ultimoLogin == "ok"){

							echo '<script>

								window.location = "inicio";

							</script>';

						}				
						
					}else{

						echo '<br>
							<div class="alert alert-danger">El usuario aún no está activado</div>';

					}		

				}else{

					echo '<script>

					swal({
						  type: "error",
						  title: "Ocurrio un error al ingresar",
						  text: "Usuario / Contraseña , Son incorrectas",
						  showConfirmButton: false,
						  timer: 2300
						  })
	
					</script>';

				}

			}	

		}

	}

	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	static public function ctrCrearUsuario(){

		if(isset($_POST["nuevoUsuario"])){

<<<<<<< HEAD
			if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
=======
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
>>>>>>> fernando
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuario"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])){

			   	/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				$ruta = "";

				if(isset($_FILES["nuevaFoto"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "vistas/img/usuarios/".$_POST["nuevoUsuario"];

					mkdir($directorio, 0755);

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["nuevaFoto"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}

				$tabla = "usuarios";

				$encriptar = crypt($_POST["nuevoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$datos = array("nombre" => $_POST["nuevoNombre"],
<<<<<<< HEAD
							   "usuario" => $_POST["nuevoUsuario"],
							   "correo" => $_POST["nuevoCorreo"],
=======
					           "usuario" => $_POST["nuevoUsuario"],
>>>>>>> fernando
					           "password" => $encriptar,
					           "perfil" => $_POST["nuevoPerfil"],
					           "foto"=>$ruta);

				$respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);
<<<<<<< HEAD


=======
			
>>>>>>> fernando
				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El usuario ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "usuarios";

						}

					});
				

					</script>';


				}	


			}else{

				echo '<script>

					swal({

						type: "error",
<<<<<<< HEAD
						title: "¡Hay campos que no coinciden con el formato!",
=======
						title: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
>>>>>>> fernando
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "usuarios";

						}

					});
				

				</script>';

			}


		}


	}

	/*=============================================
<<<<<<< HEAD
=======
	Plantilla
	=============================================*/

	public function template()
    {
        $this->render('login/template.php', 'Registrar Usuario', null, false);
	}
	/*=============================================
	Enviar Correo Datos
	=============================================*/

	public function sendMail($correoElectronico, $nombre, $codigo)
    {
		require  'vendor/autoload.php';
        $template = file_get_contents('vistas/modulos/login/template.php');
        $template = str_replace("{{name}}", $nombre, $template);
        $template = str_replace("{{action_url_2}}", '<b>http:'.URL.'/vistas/modulos/login/nuevaContraseña.php/'.$codigo.'</b>', $template);
        $template = str_replace("{{action_url_1}}", 'http:'.URL.'/vistas/modulos/login/nuevaContraseña.php/'.$codigo, $template);
        $template = str_replace("{{year}}", date('Y'), $template);
        $template = str_replace("{{operating_system}}", Helper::getOS(), $template);
        $template = str_replace("{{browser_name}}", Helper::getBrowser(), $template);

        $mail = new PHPMailer(true);
        $mail->CharSet = "UTF-8";

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';  //gmail SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'luisfernandoamado148@gmail.com';   //username
            $mail->Password = 'fercho1000574148';   //password
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;                    //smtp port

            $mail->setFrom('phpminitest@gmail.com', 'Pijamas Jovy');
            $mail->addAddress($correoElectronico, $nombre);

            $mail->isHTML(true);

            $mail->Subject = 'Recuperación de contraseña - Pijamas jovy';
            $mail->Body    = $template;

            if (!$mail->send()) {
                return false;
            } else {
                return true;
            }
        } catch (Exception $e) {
            return false;
            // echo 'Message could not be sent.';
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
	}


	/*=============================================
	Envio de correo  con codigo
	=============================================*/
	
	public function sendRecoveryCode()
    {
        if (isset($_POST["txtCorreoElectronico"]) && trim($_POST["txtCorreoElectronico"] != '')) {
            $correoElectronico = $_POST['txtCorreoElectronico'];
            $codigo = $this->createRandomCode();
            $fechaRecuperacion = date("Y-m-d H:i:s", strtotime('+24 hours'));
            $userModel = new ModeloUsuarios();
            $user = $userModel->getUserWithEmail($correoElectronico);

            if ($user === false) {
                $mensaje = 'El correo electrónico no se encuentra registrado en el sistema.';
                $this->render('modulos/login/recuperacion', 'Recuperar Contraseña', array('mensaje' => $mensaje), false);
            } else {
                $respuesta = $userModel->recoverPassword($correoElectronico, $codigo, $fechaRecuperacion);
            
                if ($respuesta) {
                    $this->sendMail($correoElectronico, $user->usuario, $codigo);
                    
                    $mensaje = 'Se ha enviado un correo electrónico con las instrucciones para el cambio de tu contraseña. Por favor verifica la información enviada.';
                    $this->render('modulos/login/recuperacion', 'Recuperar Contraseña', array('mensaje' => $mensaje), false);
                } else {
                    $mensaje = 'No se recuperar la cuenta. Si los errores persisten comuniquese con el administrador del sitio.';
                    $this->render('modulos/login/recuperacion', 'Recuperar Contraseña', array('mensaje' => $mensaje), false);
                }
            }
        } else {
            $mensaje = 'El campo de correo electrónico es requerido.';
            $this->render('modulos/login/recuperacion', 'Recuperar Contraseña', array('mensaje' => $mensaje), false);
        }
	}

	/*=============================================
	Restriccion de codigo
	=============================================*/
	
	public function newPassword($code = null)
    {
        if (isset($code)) {
            // Instance new Model (Song)
            $userModel = new ModeloUsuarios();
            // do deleteSong() in model/model.php
            $user = $userModel->getUserWithCode($code);

            if ($user === false) {
                $mensaje = 'El código de recuperación de contraseña no es valido. Por favor intenta de nuevo.';
                $this->render('vistas/modulos/login/login/recuperar.php', 'Recuperar Contraseña', array('mensaje' => $mensaje), false);
            } else {
                $current = date("Y-m-d H:i:s");

                if (strtotime($current) > strtotime($user->fechaRecuperacion)) {
                    $mensaje = 'El código de recuperación de contraseña ha expirado. Por favor intenta de nuevo.';
                    $this->render('vistas/modulos/login/login/recuperar.php', 'Recuperar Contraseña', array('mensaje' => $mensaje), false);
                } else {
                    $this->render('vistas/modulos/login/login/recuperar.php', 'Nueva Contraseña', array('user' =>  $user), false);
                }
            }
        } else {
            header('location: ' . URL);
        }
	}

	/*=============================================
	VERIFICACION DE CONTRASEÑA
	=============================================*/
	
	public function updatePasswordWithCode()
    {
        if (isset($_POST['btnGuardar'])) {
            $idUsuario = $_POST['txtIdUsuario'];
            $contrasena = $_POST['txtContrasena'];
            $repetirContrasena = $_POST['txtRepetirContrasena'];

            if ($contrasena != $repetirContrasena) {

                $user = new stdClass();
                $user->idUsuario = $idUsuario;

                $mensaje = 'Las contraseñas no coinciden. Por favor, verifique la información.';
                $this->render('/modulos/login/nuevaContraseña', 'Registrar Usuario', array('user' => $user, 'mensaje' => $mensaje), false);
                return;

            } else {
                $userModel = new ModeloUsuarios();

                $contrasena = password_hash($_POST['txtContrasena'], PASSWORD_BCRYPT);

                $resultado = $userModel->updatePasswordFromRecover($idUsuario, $contrasena);
                if ($resultado != false) {
                    
                    $mensaje = 'Su contraseña ha sido cambiada con éxito.';
                    $this->render('login', 'Iniciar Sesion', array('mensaje' => $mensaje), false);
                    return;

                } else {
                    $user = new stdClass();
                    $user->idUsuario = $idUsuario;
                    $mensaje = 'Ocurrio un error al intentar cambiar la contraseña. Por favor, verifique la información.';
                    $this->render('modulos/login/nuevaContraseña', 'Registrar Usuario', array('usuario' => $user, 'mensaje' => $mensaje), false);
                    return;
                }
            }
        }else{
            header('location:'.URL);
        }
        
    }

	
	/*=============================================
	CREAR CODIGO ALEATORIO
	=============================================*/
	
	public function createRandomCode()
    {
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz0123456789";
        srand((double)microtime()*1000000);
        $i = 0;
        $pass = '' ;
    
        while ($i <= 7) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }
    
        return time().$pass;
    }

	/*=============================================
>>>>>>> fernando
	MOSTRAR USUARIO
	=============================================*/

	static public function ctrMostrarUsuarios($item, $valor){

		$tabla = "usuarios";

		$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	EDITAR USUARIO
	=============================================*/

	static public function ctrEditarUsuario(){

		if(isset($_POST["editarUsuario"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"])){

				/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				$ruta = $_POST["fotoActual"];

				if(isset($_FILES["editarFoto"]["tmp_name"]) && !empty($_FILES["editarFoto"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["editarFoto"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "vistas/img/usuarios/".$_POST["editarUsuario"];

					/*=============================================
					PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
					=============================================*/

					if(!empty($_POST["fotoActual"])){

						unlink($_POST["fotoActual"]);

					}else{

						mkdir($directorio, 0755);

					}	

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["editarFoto"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/usuarios/".$_POST["editarUsuario"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["editarFoto"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["editarFoto"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/usuarios/".$_POST["editarUsuario"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["editarFoto"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}

				$tabla = "usuarios";

<<<<<<< HEAD

				$datos = array("nombre" => $_POST["editarNombre"],
							   "usuario" => $_POST["editarUsuario"],
							   "correo" => $_POST["editarCorreo"],
=======
				if($_POST["editarPassword"] != ""){

					if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarPassword"])){

						$encriptar = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

					}else{

						echo'<script>

								swal({
									  type: "error",
									  title: "¡La contraseña no puede ir vacía o llevar caracteres especiales!",
									  showConfirmButton: true,
									  confirmButtonText: "Cerrar"
									  }).then(function(result) {
										if (result.value) {

										window.location = "usuarios";

										}
									})

						  	</script>';

						  	return;

					}

				}else{

					$encriptar = $_POST["passwordActual"];

				}

				$datos = array("nombre" => $_POST["editarNombre"],
							   "usuario" => $_POST["editarUsuario"],
							   "password" => $encriptar,
>>>>>>> fernando
							   "perfil" => $_POST["editarPerfil"],
							   "foto" => $ruta);

				$respuesta = ModeloUsuarios::mdlEditarUsuario($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El usuario ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result) {
									if (result.value) {

									window.location = "usuarios";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
<<<<<<< HEAD
						  title: "¡¡Hay campos que no coinciden con el formato!!",
=======
						  title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
>>>>>>> fernando
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result) {
							if (result.value) {

							window.location = "usuarios";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR USUARIO
	=============================================*/

	static public function ctrBorrarUsuario(){

		if(isset($_GET["idUsuario"])){

			$tabla ="usuarios";
			$datos = $_GET["idUsuario"];

			if($_GET["fotoUsuario"] != ""){

				unlink($_GET["fotoUsuario"]);
				rmdir('vistas/img/usuarios/'.$_GET["usuario"]);

			}

			$respuesta = ModeloUsuarios::mdlBorrarUsuario($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El usuario ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result) {
								if (result.value) {

								window.location = "usuarios";

								}
							})

				</script>';

			}		

		}

	}


}
	


