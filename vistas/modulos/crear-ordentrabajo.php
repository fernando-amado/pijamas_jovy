<<<<<<< HEAD
<style>
  @media (max-width: 600px) {
    .for{
        position:relative;
        left: 0%;
    }
  }
  @media (min-width: 1200px) {
    .for{
        position:relative;
        left: 25%;
    }
  }
</style>

=======
>>>>>>> fernando
<?php

if($_SESSION["perfil"] == "Especial"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
<<<<<<< HEAD
      Registrar orden de trabajo
=======
      Crear Orden trabajo
>>>>>>> fernando
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
<<<<<<< HEAD
      <li class="active">Crear Ordentrabajo</li>
=======
      <li class="active">Crear Orden</li>
>>>>>>> fernando
    
    </ol>

  </section>

  <section class="content">

    <div class="row">

      <!--=====================================
      EL FORMULARIO
      ======================================-->
      
<<<<<<< HEAD
      <div class="col-lg-6 col-xs-10 for" >
=======
      <div class="col-lg-5 col-xs-12">
>>>>>>> fernando
        
        <div class="box ">
          
          <div class="box-header with-border"></div>

          <form role="form" method="post" class="formularioMaterial">

            <div class="box-body">
  
              <div class="box">

                <!--=====================================
<<<<<<< HEAD
=======
                ENTRADA DEL VENDEDOR
                ======================================-->
            
                <div class="form-group">
                
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control" id="nuevoUsuario" value="<?php echo $_SESSION["nombre"]; ?>" readonly>

                    <input type="hidden" name="idUsuario" value="<?php echo $_SESSION["id"]; ?>">

                  </div>

                </div> 

                <!--=====================================
>>>>>>> fernando
                ENTRADA DEL CÓDIGO
                ======================================--> 

                <div class="form-group">
                  
                  <div class="input-group">
<<<<<<< HEAD
=======
                    
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
>>>>>>> fernando

                    <?php

                    $item = null;
                    $valor = null;

                    $ordentrabajo = ControladorOrdentrabajo::ctrMostrarOrdentrabajo($item, $valor);

<<<<<<< HEAD
                    if(!$ordentrabajo ){
=======
                    if(!$ordentrabajo){
>>>>>>> fernando

                      echo '<input type="text" class="form-control" id="nuevaOrdentrabajo" name="nuevaOrdentrabajo" value="10001" readonly>';
                  

                    }else{

                      foreach ($ordentrabajo as $key => $value) {
                        
                        
                      
                      }

                      $codigo = $value["codigo"] + 1;



                      echo '<input type="text" class="form-control" id="nuevaOrdentrabajo" name="nuevaOrdentrabajo" value="'.$codigo.'" readonly>';
                  

                    }

                    ?>
                    
                    
                  </div>
                
                </div>
<<<<<<< HEAD

                <!--=====================================
                ENTRADA DEL VENDEDOR
                ======================================-->
            
                <div class="form-group">
                
                  <div class="input-group">

                    <input type="text" class="form-control" id="nuevoUsuario" value="<?php echo $_SESSION["nombre"]; ?>" readonly>

                    <input type="hidden" name="idUsuario" value="<?php echo $_SESSION["id"]; ?>">

                  </div>

                </div> 

                <!-- ENTRADA PARA LA Nombre -->

                         <div class="form-group">
              
              <div class="input-group">

                <input type="number" class="form-control input-lg" name="nuevaCantidadsolicitada" min="0" placeholder="Ingresar Cantidad Solicitada" required>
=======
                <!-- ENTRADA PARA LA Nombre -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaCantidadsolicitada" placeholder="Ingresar cantidad solicitada" required>
>>>>>>> fernando

              </div>

            </div>

<<<<<<< HEAD
             <!-- ENTRADA PARA STOCK -->

             <div class="form-group">
              
              <div class="input-group">

                <input type="number" class="form-control input-lg" name="nuevaCantidadentregada" min="0" placeholder="Ingresar Cantidad Entregada" required>
=======
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaCantidadentregada" placeholder="Ingresar cantidad entregada" required>
>>>>>>> fernando

              </div>

            </div>
<<<<<<< HEAD
             

                <!-- ENTRADA PARA PRECIO VENTA -->

                <div class="form-group">

                      <div class="input-group">

                    <input type="date" class="form-control input-lg" id="nuevaFechaentrega" name="nuevaFechaentrega" required>

                </div>
=======

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="date" class="form-control input-lg" name="nuevaFechaentrega" placeholder="" required>

              </div>
>>>>>>> fernando

            </div>


<<<<<<< HEAD

=======
>>>>>>> fernando
                <!--=====================================
                ENTRADA PARA AGREGAR PRODUCTO
                ======================================--> 

                <div class="form-group row nuevoMaterial">

                

                </div>

                <input type="hidden" id="listaMaterial" name="listaMaterial">

                <!--=====================================
                BOTÓN PARA AGREGAR PRODUCTO
                ======================================-->

<<<<<<< HEAD
                <button type="button" class="btn btn-default hidden-lg btnAgregarProduct">Agregar Material</button>

                </div>


          </div>

          <div class="box-footer">

            <button type="submit" class="btn btn-primary pull-right">Guardar Orden</button>
=======
                <button type="button" class="btn btn-default hidden-lg btnAgregarProduct">Agregar producto</button>

          <div class="box-footer">

            <button type="submit" class="btn btn-primary pull-right">Guardar venta</button>
>>>>>>> fernando

          </div>

        </form>

        <?php

<<<<<<< HEAD
          $guardarOrdentrabajo = new ControladorOrdentrabajo();
          $guardarOrdentrabajo-> ctrCrearOrdentrabajo();
          
        ?>

        </div>
            
      </div>
=======
          $guardarordentrabajo = new ControladorOrdentrabajo();
          $guardarordentrabajo -> ctrCrearOrdentrabajo();
          
        ?>
        </div>

    </div>
>>>>>>> fernando

      <!--=====================================
      LA TABLA DE PRODUCTOS
      ======================================-->

<<<<<<< HEAD
      <div class="col-lg-12 hidden-md hidden-sm hidden-xs" style="position:ralative; top:20px;">
        
        <div class="" style="background:white;" >

          <div class="box-header "></div>
=======
      <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
        
        <div class="box ">

          <div class="box-header with-border"></div>
>>>>>>> fernando

          <div class="box-body">
            
            <table class="table table-bordered table-striped dt-responsive tablaOrden">
              
               <thead>

                 <tr>
                  <th style="width: 10px">#</th>
                  <th>Imagen</th>
                  <th>Código</th>
                  <th>Descripcion</th>
                  <th>Cantidad</th>
                  <th>Acciones</th>
                </tr>

              </thead>

            </table>

          </div>

        </div>


      </div>

    </div>
   
  </section>
<<<<<<< HEAD
  <br><br>
</div>

=======

</div>


</div>
>>>>>>> fernando
