<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Inicio
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>
    
    </ol>

  </section>

  <section class="content">

    <div class="row">
      
    <?php

    if($_SESSION["perfil"] =="Administrador"){

      include "inicio/productos-recientes.php";

    }

    ?>

    </div> <br><br>


          <?php

          if($_SESSION["perfil"] =="Administrador"){
          
             include "inicio/cajas-superiores.php";

         }

          ?>

         

         <div class="col-lg-12">
           
          <?php

          if($_SESSION["perfil"] =="Costurero" || $_SESSION["perfil"] =="Vendedor"){

             echo '<div class="box box-success">

             <div class="box-header">

             <h1>Bienvenid@ ' .$_SESSION["nombre"].'</h1>

             </div>

             </div>';

          }

          ?>

         </div>

     </div>

  </section>
 
</div>
