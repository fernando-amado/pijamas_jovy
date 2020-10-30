<?php

if($_SESSION["perfil"] == "Vendedor"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar Materiales 
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>
      
      <li class="active">Administrar Materiales</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarMaterial">
          
          Agregar Material

        </button>

      </div>
      <div class="well well-sm text-right" style="position:absolute; top: 0px; left:35%;">
					            <a class=" btn btn-dark" href="vistas/reportes/material.php" target="_blank"> Generar reporte </a>
					            <a class=" btn btn-info" href="vistas/reportes/material.php" download="reporteus">Descargar reporte </a>
				            </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablaMaterial" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Imagen</th>
           <th>Código</th>
           <th>Nombre del material</th>
           <th>Tipo material</th>
           <th>Cantidad</th>
           <th>Agregado</th>
           <th>Acciones</th>
           
         </tr> 

        </thead>      

       </table>

       <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->

<div id="modalAgregarMaterial" class="modal fade" role="dialog">
  
  <div class="modal-dialog"  style="width: 450px;">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" >

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Material</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">

              <input type="file" class="nuevaImagen" name="nuevaImagen" style="width: 102px; background:#000; position: absolute; top:215px; left: 39%;">

              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="200px" style="position:relative; left:27%; top:-10px;">

            </div>

          </div>


            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">
              
              <div class="input-group">

                <select class="form-control input-lg" id="nuevoTipomaterial" name="nuevoTipomaterial" required>
                  
                  <option value="">Selecionar Tipo de material</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $tipomaterial = ControladorTipomaterial::ctrMostrarTipomaterial($item, $valor);

                  foreach ($tipomaterial as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["tipomaterial"].'</option>';
                  }

                  ?>
  
                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL CÓDIGO -->
            
            <div class="form-group">
              
              <div class="input-group">

                <input type="text" class="form-control input-lg" id="nuevoCodigo" name="nuevoCodigo" placeholder="Ingresar código" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DESCRIPCIÓN -->

             <div class="form-group">
              
              <div class="input-group">

                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>

              </div>

            </div>

             <!-- ENTRADA PARA STOCK -->

             <div class="form-group">
              
              <div class="input-group">

                <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Cantidad" required>

              </div>

            </div>


        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar producto</button>

        </div>

      </form>

        <?php

          $crearMaterial = new ControladorMaterial();
          $crearMaterial -> ctrCrearMaterial();

        ?>  

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->

<div id="modalEditarMaterial" class="modal fade" role="dialog">
  
  <div class="modal-dialog" style="width: 450px;">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">
            
            <!-- ENTRADA PARA SUBIR FOTO -->

            <div class="form-group">

              <input type="file" class="nuevaImagen" name="editarImagen" style="width: 102px; background:#000; position: absolute; top:215px; left: 39%;">

              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="200px" style="position:relative; left:27%; top:-10px;">

              <input type="hidden" name="imagenActual" id="imagenActual">

            </div>

          </div>


            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">
              
              <div class="input-group">

                <select class="form-control input-lg"  name="editarTipomaterial" readonly required>
                  
                  <option id="editarTipomaterial"></option>
                  
                  <?php

                  $item = null;
                  $valor = null;

                  $tipomaterial = ControladorTipomaterial::ctrMostrarTipomaterial($item, $valor);

                  foreach ($tipomaterial as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["tipomaterial"].'</option>';
                  }

                  ?>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL CÓDIGO -->
            
            <div class="form-group">
              
              <div class="input-group">

                <input type="text" class="form-control input-lg" id="editarCodigo" name="editarCodigo" readonly required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DESCRIPCIÓN -->

             <div class="form-group">
              
              <div class="input-group"> 

                <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" required>

              </div>

            </div>

             <!-- ENTRADA PARA STOCK -->

             <div class="form-group">
              
              <div class="input-group">

                <input type="number" class="form-control input-lg" id="editarStock" name="editarStock" min="0" required>

              </div>

            </div>


        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>

        <?php

          $editarMaterial = new ControladorMaterial();
          $editarMaterial -> ctrEditarMaterial();

        ?>      

    </div>

  </div>

</div>

<?php

  $eliminarMaterial = new ControladorMaterial();
  $eliminarMaterial -> ctrEliminarMaterial();

?>      



