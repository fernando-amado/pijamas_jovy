<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="icon" href="img/icono.png">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Iniciar Sesión</title>
    <?php 


session_start();
if(!empty($_SESSION['id_rol'])){
	header('Location:controlador/LoginController.php');
}
else{
session_destroy();

 ?>
</head>
<body>
    <!-- FONDO -->
    <div class="fond-pink">
    </div>
    <div class="fond-blue">
    </div>

    <!-- LOGIN -->
    <header>
        <div class="container">
            <div class="container-flex">

                <!-- CAJA 1 -->
                <div class="caja1">
                    <div class="checked-flex">
                        <input type="checkbox" class="checked-color" id="check">
                        <p>Sitio web</p>
                    </div>
                    <div class="caja1-titulo">
                        <h1>Pijamas jovy</h1>
                    </div>
                    <div class="selectForm">
                        <div class="select-i">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                </div>

                <!-- CAJA 2 -->
                <div class="caja2">
                    <form action="controlador/loginController.php" method="post" id="Form">
                        <div class="form-flex">
                            <label for="nombre" class="texto">Correo Electronico</label>
                            <input type="text" id="nombre" name="user" placeholder="Correo Electronico" required>
                        </div>

                        <div class="form-flex">
                            <label for="contra" class="texto">Contraseña</label>
                            <input type="password" id="contra" name="pass" placeholder="Contraseña" required>
                        </div>
                        

                        

                        <input type="submit" value="Iniciar Sesión" class="boton">
                    </form>
                </div>
            </div>
        </div>
    </header>


    <!-- URL JAVASCRIPT -->
    <script src="js/login.js"></script>
</body>


</html>
<?php 	
}
?>