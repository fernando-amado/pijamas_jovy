
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
    <form method="post">

<div class="form-flex has-feedback ">
        <label class="texto">Usuario</label>
        <input type="text"  placeholder="Usuario" name="ingUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>


      <div class="form-flex has-feedback">
        <label class="texto">Contraseña</label>
        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      
      </div>


      <div class="row">
       
        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
        
        </div>

      </div>

      <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        
      ?>
</div>
<<<<<<< HEAD
<a style="position:absolute; top:380px; left:50%;" href="vistas/modulos/recuperacion.php " >Recordar contraseña</a>
=======
<a style="position:absolute; top:380px; left:50%;" href="index.php?c=usuarios">Recordar contraseña</a>
>>>>>>> fernando
      </div>
    </div>
  </div>
  


  </div>

</div>
</div>
<<<<<<< HEAD
=======
<?php 
if(isset($_GET["recupera"])){
  if($_GET["recupera"] == "recuperacion" ){

 include "".$_GET["recupera"].".php";
 

}else{

 echo"error";
 

}
}
?>
>>>>>>> fernando
