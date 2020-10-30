<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pijamas jovy|
        Recuperacion de contraseña; ?>
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
     <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
<link rel="stylesheet" href="vistas/dist/css/estilos.css">
<link rel="stylesheet" href="vistas/dist/css/styles.css">
<!-- AdminLTE Skins -->
<link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.css">
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
            <form method="POST" action="?c=usuarios&a=sendRecoveryCode">
            <div class="form-flex has-feedback ">
        <label class="texto">Correo</label>
                <input type="email" id="txtCorreoElectronico" name="txtCorreoElectronico" placeholder="Correo Electrónico">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

</div>
<div class="row">
       
       <div class="col-xs-4">
                    <input class="btn btn-primary " type="submit" value="Enviar Contraseña">
                </div>
                </div>

      
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                
            </div>

        </div>
    </div>
    </div>
<a style="position:absolute; top:380px; left:62%;"  href="<?php echo URL; ?>login">Volver a iniciar sesión</a>
      </div>
    </div>
  </div>
  


  </div>

</div>
</div>

    <script>
        var url = "<?php echo URL; ?>";
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