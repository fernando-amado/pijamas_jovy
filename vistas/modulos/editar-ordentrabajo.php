<style>
  @media (max-width: 600px) {
    .fore{
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
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Editar venta
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Crear venta</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="row">

      <!--=====================================
      EL FORMULARIO
      ======================================-->
      
      <div class="col-lg-6 col-xs-12 for">
        
        <div class="box ">
          
          <div class="box-header with-border"></div>

          <form role="form" method="post" class="formularioMaterial">

            <div class="box-body">
  
              <div class="box">

                <?php

                    $item = "id";
                    $valor = $_GET["idOrdentrabajo"];

                    $ordentrabajo = ControladorOrdentrabajo::ctrMostrarOrdentrabajo($item, $valor);

                    $itemUsuario = "id";
                    $valorUsuario = $ordentrabajo["id_usuario"];

                    $usuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

          


                ?>
                
                <!--=====================================
                ENTRADA DEL CÓDIGO
                ======================================--> 

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>

                   <input type="text" class="form-control" id="nuevaOrdentrabajo" name="editarOrdentrabajo" value="<?php echo $ordentrabajo["codigo"]; ?>" readonly>
               
                  </div>
                
                </div>

                <!--=====================================
                ENTRADA DEL VENDEDOR
                ======================================-->
            
                <div class="form-group">
                
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control" id="nuevoUsuario" value="<?php echo $usuario["nombre"]; ?>" readonly>

                    <input type="hidden" name="idUsuario" value="<?php echo $usuario["id"]; ?>">

                  </div>

                </div> 

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>

                   <input type="text" class="form-control" id="editarCantidadsolicitada" name="editarCantidadsolicitada" value="<?php echo $ordentrabajo["cantidad_solicitada"]; ?>" required>
               
                  </div>
                
                </div>

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>

                   <input type="text" class="form-control" id="editarCantidadentregada" name="editarCantidadentregada" value="<?php echo $ordentrabajo["cantidad_entregada"]; ?>" required>
               
                  </div>
                
                </div>

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>

                   <input type="text" class="form-control" id="editarFechaentrega" name="editarFechaentrega" value="<?php echo $ordentrabajo["fecha_entrega"]; ?>" required>
               
                  </div>
                
                </div>



                <!--=====================================
                ENTRADA PARA AGREGAR PRODUCTO
                ======================================--> 

                <div class="form-group row nuevoMaterial">

                <?php

                $listaMaterial = json_decode($ordentrabajo["material"], true);

                foreach ($listaMaterial as $key => $value) {

                  $item = "id";
                  $valor = $value["id"];
                  $orden = "id";

                  $respuesta = ControladorMaterial::ctrMostrarMaterial($item, $valor, $orden);

                  $stockAntiguo =  $respuesta["stock"] + $value["cantidad"];
                  
                  echo '<div class="row" style="padding:5px 15px">
            
                        <div class="col-xs-6" style="padding-right:0px">
            
                          <div class="input-group">
                
                            <span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarMaterial" idMaterial="'.$value["id"].'"><i class="fa fa-times"></i></button></span>

                            <input type="text" class="form-control nuevaNombreMaterial" idMaterial="'.$value["id"].'" name="agregarMaterial" value="'.$value["nombre"].'" readonly required>

                          </div>

                        </div>

                        <div class="col-xs-3">
              
                          <input type="number" class="form-control nuevaCantidadMaterial" name="nuevaCantidadMaterial" min="1" value="'.$value["cantidad"].'" stock="'.$stockAntiguo.'" nuevoStock="'.$value["stock"].'" required>

                        </div>
               
                        </div>

                      </div>';
                }


                ?>

                </div>

                <input type="hidden" id="listaMaterial" name="listaMaterial">

                <!--=====================================
                BOTÓN PARA AGREGAR PRODUCTO
                ======================================-->

                <button type="button" class="btn btn-default hidden-lg btnAgregarProduct">Agregar producto</button>


          <div class="box-footer">

            <button type="submit" class="btn btn-primary pull-right">Guardar cambios</button>

          </div>

        </form>

        <?php

          $editarOrdentrabajo= new ControladorOrdentrabajo();
          $editarOrdentrabajo -> ctrEditarOrdentrabajo();
          
        ?>

        </div>
            
      </div>
              </div>

      <!--=====================================
      LA TABLA DE PRODUCTOS
      ======================================-->

      <div class="col-lg-12 hidden-md hidden-sm hidden-xs" style="position:ralative; top:20px;">
        
        <div class="box ">

          <div class="box-header with-border"></div>

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


<br><br>
</div>
          
