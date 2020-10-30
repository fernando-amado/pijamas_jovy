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
      
      Administrar productos
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>
      
      <li class="active">Administrar productos</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
          
          Agregar producto

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
         
        <thead>
        <div class="well well-sm text-right" style="position:absolute; top: 0px; left:35%;">
					            <a class=" btn btn-dark" href="vistas/reportes/producto.php" target="_blank"> Generar reporte </a>
					            <a class=" btn btn-info" href="vistas/reportes/producto .php" download="reporteus">Descargar reporte </a>
				            </div>

         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Imagen</th>
           <th>Código</th>
           <th>Nombre</th>
           <th>Categoría</th>
           <th>Cantidad</th>
           <th>Precio de venta</th>
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

<div id="modalAgregarProducto" class="modal fade" role="dialog">
  
<<<<<<< HEAD
  <div class="modal-dialog"  style="width: 450px;">
=======
  <div class="modal-dialog"  style="width: 500px;">
>>>>>>> fernando

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA SUBIR FOTO -->

            <div class="form-group">

              <input type="file" class="nuevaImagen" name="nuevaImagen" style="width: 102px; background:#000; position: relative; top:195px; left: 39%;">

              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="190px" style="height:180px; position:relative; left:27%; top:-10px;">

            </div>

          </div>

            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">
              
              <div class="input-group">
<<<<<<< HEAD
=======
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 
>>>>>>> fernando

                <select class="form-control input-lg" id="nuevaCategoria" name="nuevaCategoria" required>
                  
                  <option value="">Selecionar categoría</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                  foreach ($categorias as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
                  }

                  ?>
  
                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL CÓDIGO -->
            
            <div class="form-group">
              
              <div class="input-group">
<<<<<<< HEAD
=======
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 
>>>>>>> fernando

                <input type="text" class="form-control input-lg" id="nuevoCodigo" name="nuevoCodigo" placeholder="Ingresar código" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA Nombre -->

             <div class="form-group">
              
              <div class="input-group">
<<<<<<< HEAD
=======
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 
>>>>>>> fernando

                <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar nombre" required>

              </div>

            </div>

             <!-- ENTRADA PARA STOCK -->

             <div class="form-group">
              
              <div class="input-group">
<<<<<<< HEAD
=======
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 
>>>>>>> fernando

                <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Cantidad" required>

              </div>

            </div>

             

                <!-- ENTRADA PARA PRECIO VENTA -->

                <div class="form-group">

                      <div class="input-group">
<<<<<<< HEAD
=======
  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 
>>>>>>> fernando

                    <input type="number" class="form-control input-lg" id="nuevoPrecioVenta" name="nuevoPrecioVenta" step="any" min="0" placeholder="Precio de venta" required>

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

          $crearProducto = new ControladorProductos();
          $crearProducto -> ctrCrearProducto();

        ?>  

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->

<div id="modalEditarProducto" class="modal fade" role="dialog">
  
<<<<<<< HEAD
  <div class="modal-dialog" style="width: 450px;">
=======
  <div class="modal-dialog" style="width: 500px;">
>>>>>>> fernando

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

<<<<<<< HEAD
        <div class="modal-header" >
=======
        <div class="modal-header" style="background:#3c8dbc; color:white">
>>>>>>> fernando

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

              <input type="file" class="nuevaImagen" name="editarImagen" style="width: 102px; background:#fff; position: relative; top:195px; left: 39%;">

              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="190px" style="height:180px; position:relative; left:27%; top:-10px;">

              <input type="hidden" name="imagenActual" id="imagenActual">

          </div>

        </div>


            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">
              
              <div class="input-group">
<<<<<<< HEAD
=======
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 
>>>>>>> fernando

                <select class="form-control input-lg"  name="editarCategoria" readonly required>
                  
                  <option id="editarCategoria"></option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL CÓDIGO -->
            
            <div class="form-group">
              
              <div class="input-group">
<<<<<<< HEAD
=======
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 
>>>>>>> fernando

                <input type="text" class="form-control input-lg" id="editarCodigo" name="editarCodigo" readonly required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DESCRIPCIÓN -->

             <div class="form-group">
              
              <div class="input-group">
<<<<<<< HEAD
=======
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 
>>>>>>> fernando

                <input type="text" class="form-control input-lg" id="editarDescripcion" name="editarDescripcion" required>

              </div>

            </div>

             <!-- ENTRADA PARA STOCK -->

             <div class="form-group">
              
              <div class="input-group">
<<<<<<< HEAD
=======
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 
>>>>>>> fernando

                <input type="number" class="form-control input-lg" id="editarStock" name="editarStock" min="0" required>

              </div>

            </div>

             <!-- ENTRADA PARA PRECIO Venta  -->

             <div class="form-group">
                
                  <div class="input-group">
<<<<<<< HEAD
=======
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 
>>>>>>> fernando

                    <input type="number" class="form-control input-lg" id="editarPrecioVenta" name="editarPrecioVenta" step="any" min="0" required>

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

          $editarProducto = new ControladorProductos();
          $editarProducto -> ctrEditarProducto();

        ?>      

    </div>

  </div>

</div>

<?php

  $eliminarProducto = new ControladorProductos();
  $eliminarProducto -> ctrEliminarProducto();

?>      

<script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});
</script>


