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


  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
          
          Agregar producto &nbsp; <i class="fa fa-plus-circle"></i>

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
         
        <thead>
        <div class="well well-sm text-right" style="position:absolute; top: 0px; left:40%;">
					            <a class=" btn btn-dark" href="vistas/reportes/producto.php" target="_blank"> Generar reporte </a>
					            <a class=" btn btn-primary" href="vistas/reportes/producto .php" download="reporteus">Descargar reporte </a>
				            </div>

         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Código de Referencia</th>
           <th>Imagen</th>
           <th>Nombre</th>
           <th>Categoría</th>
           <th>Cantidad</th>
           <th>Precio de venta</th> 
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
  
  <div class="modal-dialog"  style="width: 450px;">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" >
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
            <label for="file-upload" class="subir">
             <i class="fas fa-cloud-upload-alt"></i> Subir archivo
           </label>
              <input type="file" id="file-upload" onchange='cambiar()' class="nuevaImagen" name="nuevaImagen" style="display: none;">

              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px" style="position:relative; left:-5%; top:-15px;">

            </div>

          </div>

            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">
              <p>Categoria  </p>
              <div class="input-group">

                <select class="form-control " id="nuevaCategoria" name="nuevaCategoria" required>
                  
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
              <p>Codigo de Referencia</p>
              <div class="input-group">

                <input type="text" class="form-control " id="nuevoCodigo" name="nuevoCodigo" placeholder="Ingresar código" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA Nombre -->

             <div class="form-group">
              <p>Nombre del Producto</p>
              <div class="input-group">

                <input type="text" class="form-control " name="nuevaDescripcion" placeholder="Ingresar nombre de la Pijams" required>

              </div>

            </div>

             <!-- ENTRADA PARA STOCK -->

             <div class="form-group">
              <p>Cantidad</p>
              <div class="input-group">

                <input type="number" class="form-control " name="nuevoStock" min="0" placeholder="Ingresar Cantidad" required>

              </div>

            </div>

             

                <!-- ENTRADA PARA PRECIO VENTA -->

                <div class="form-group">
                <p>Precio de Venta</p>
                      <div class="input-group">

                    <input type="number" class="form-control  PrecioProducto" id="nuevoPrecioVenta" name="nuevoPrecioVenta" step="any" min="0" placeholder="Precio de venta" required>

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
  
  <div class="modal-dialog" style="width: 450px;">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" >

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
            <label for="file-upload" class="subir">
             <i class="fas fa-cloud-upload-alt"></i> Subir archivo
           </label>
              <input type="file" class="nuevaImagen" id="file-upload" onchange='cambiar()' name="editarImagen" style="display: none;">

              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="190px" style="position:relative; left:-5%; top:-15px;">

              <input type="hidden" name="imagenActual" id="imagenActual">

          </div>

        </div>


            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">
              <p>Categoria</p>
              <div class="input-group">

                <select class="form-control "  name="editarCategoria"  required>
                  
                  <option id="editarCategoria"></option>

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
              <p>Codigo de Referencia</p>
              <div class="input-group">

                <input type="text" class="form-control " id="editarCodigo" name="editarCodigo"  required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DESCRIPCIÓN -->

             <div class="form-group">
              <p>Nombre del Producto</p>
              <div class="input-group">

                <input type="text" class="form-control " id="editarDescripcion" name="editarDescripcion" required>

              </div>

            </div>

             <!-- ENTRADA PARA STOCK -->

             <div class="form-group">
              <p>Cantidad</p>
              <div class="input-group">

                <input type="number" class="form-control " id="editarStock" name="editarStock" min="0" required>

              </div>

            </div>

             <!-- ENTRADA PARA PRECIO Venta  -->

             <div class="form-group">
                <p>Precio de Venta</p>
                  <div class="input-group">

                    <input type="number" class="form-control  PrecioProducto" id="editarPrecioVenta" name="editarPrecioVenta" step="any" min="0" required>

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

function cambiar(){
    var pdrs = document.getElementById('file-upload').files[0].name;
    document.getElementById('info').innerHTML = pdrs;
}
</script>


