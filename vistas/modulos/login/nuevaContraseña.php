<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pijamas jovy|

    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="../../../../bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
<link rel="stylesheet" href="../../../dist/css/estilos.css">
<link rel="stylesheet" href="../../dist/css/styles.css">
<!-- AdminLTE Skins -->
<link rel="stylesheet" href="../../ist/css/skins/_all-skins.css">
<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body>

<div class="fond-pink">
    </div>
    <div class="fond-blue">
    </div>

    <!-- LOGIN -->
<div class="container">
 <div class="container-flex">

                <!-- CAJA 1 -->
                <div class="caja1">
                  <div class="checked-flex">
                      <input type="checkbox" class="checked-color" id="check">
                 </div>
                  <div class="caja1-titulo">
                  <img style="width:250px; position:relative; right:8px;" src="vistas/img/plantilla/1.png" >
                  </div>
                  <div class="selectForm">
                  <div class="select-i">
                      <i class="fas fa-chevron-right"></i>
                 </div>
            </div>
  </div>
  <div class="caja2">

            <!-- Login Form -->
            <form method="POST" action="../../../../index.php?c=usuarios&a=updatePasswordWithCode">
                <input type="hidden" id="txtIdUsuario" name="txtIdUsuario" placeholder="Código del Usuario" value="<?php echo $user->idUsuario; ?>">
                
                <div class="form-flex has-feedback ">
        <label class="texto">Nueva Contraseña</label>
                <input type="password" id="txtContrasena" name="txtContrasena" placeholder="Nueva Contraseña">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>
      <div class="form-flex has-feedback">
        <label class="texto">Repetir Contraseña</label>
                <input type="password" id="txtRepetirContrasena" name="txtRepetirContrasena" placeholder="Repetir Contraseña">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

</div>
<div class="row">
       
       <div class="col-xs-4">
                    <input id="btnGuardar" name="btnGuardar" type="submit" value="Cambiar Contraseña" onclick="return comparePassword();">
                </div>
                </div>

            </form>

<a style="position:absolute; top:380px; left:50%;" href="<?php echo URL; ?>/login">Volver a iniciar sesión</a>
      </div>
    </div>
  </div>
  


 




    <script>
        var url = "<?php echo URL; ?>";

         function comparePassword(){
                var contrasena = document.getElementById('txtContrasena').value;
                var repetirContrasena = document.getElementById('txtRepetirContrasena').value;

                if(contrasena != repetirContrasena){
                    alert('Las contraseñas no coinciden.');
                    return false;
                }else{
                    return true;
                }

            }

    </script>

    <script src="<?php echo URL; ?>login_libs/jquery.min.js"></script>
    <script src="<?php echo URL; ?>login_libs/bootstrap.min.js"></script>

    <?php if(isset($mensaje)){ ?>

        <script>
            
            window.onload = function(){
                alert('<?php echo $mensaje; ?>');
            }

        </script>

    <?php } ?>

</body>

</html>