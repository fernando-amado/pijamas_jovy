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
      
      Ordenes de Trabajo
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Ordenes de trabajo</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
<<<<<<< HEAD
      <a href="crear-ordentrabajo">

<button class="btn btn-primary">
  
  Agregar Orden

</button>

</a>

         <button type="button" class="btn btn-default pull-right" id="date-btn">
=======

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarOrdentrabajo">
            
            Agregar venta

          </button>

         <button type="button" class="btn btn-default pull-right" id="daterang-btn">
>>>>>>> fernando
           
            <span>
              <i class="fa fa-calendar"></i> 

              <?php

<<<<<<< HEAD
                if(isset($_GET["fechaIni"])){

                  echo $_GET["fechaIni"]." - ".$_GET["fechaFin"];
=======
                if(isset($_GET["fechaInicial"])){

                  echo $_GET["fechaInicial"]." - ".$_GET["fechaFinal"];
>>>>>>> fernando
                
                }else{
                 
                  echo 'Rango de fecha';

                }

              ?>
            </span>

            <i class="fa fa-caret-down"></i>

         </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Código</th>
           <th>Usuario</th>
           <th>Cantidad Solicitada</th>
           <th>Cantidad Entregada</th>
           <th>Fecha de entrega</th> 
           <th>Fecha</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

<<<<<<< HEAD
          if(isset($_GET["fechaIni"])){

            $fechaIni = $_GET["fechaIni"];
            $fechaFin = $_GET["fechaFin"];

          }else{

            $fechaIni = null;
            $fechaFin = null;

          }

          $respuesta = ControladorOrdentrabajo::ctrRangoFechasOrdentrabajo($fechaIni, $fechaFin);
=======
          if(isset($_GET["fechaInicial"])){

            $fechaInicial = $_GET["fechaInicial"];
            $fechaFinal = $_GET["fechaFinal"];

          }else{

            $fechaInicial = null;
            $fechaFinal = null;

          }

          $respuesta = ControladorOrdentrabajo::ctrRangoFechasOrdentrabajo($fechaInicial, $fechaFinal);
>>>>>>> fernando

          foreach ($respuesta as $key => $value) {
           
           echo '<tr>

                  <td>'.($key+1).'</td>

                  <td>'.$value["codigo"].'</td>';

                  $itemUsuario = "id";
                  $valorUsuario = $value["id_usuario"];

                  $respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                  echo '<td>'.$respuestaUsuario["nombre"].'</td>';

                  echo '<td>'.$value["cantidad_solicitada"].'</td>';

                  echo '<td>'.$value["cantidad_entregada"].'</td>

                  <td>  '.$value["fecha_entrega"].'</td>

                  <td>'.$value["fecha"].'</td>

                  <td>

                    <div class="btn-group">

<<<<<<< HEAD
                        
                      <button class="btn btn-info btnDetalle" idOrdentrabajo="'.$value["id"].'">

                        <i class="fa fa-eye"></i>
=======


                      <button class="btn btn-success btnImprimirTicket" codigoOrdentrabajo="'.$value["codigo"].'">

                        <i class="fa fa-print">Factura</i>

                      </button>
                        
                      <button class="btn btn-info btnImprimirFactura" codigoOrdentrabajo="'.$value["codigo"].'">

                        <i class="fa fa-print"></i>PDF
>>>>>>> fernando

                      </button>';

                      if($_SESSION["perfil"] == "Administrador"){

                      echo '<button class="btn btn-warning btnEditarOrdentrabajo" idOrdentrabajo="'.$value["id"].'"><i class="fa fa-pencil"></i></button>

                      <button class="btn btn-danger btnEliminarOrdentrabajo" idOrdentrabajo="'.$value["id"].'"><i class="fa fa-times"></i></button>';

                    }

                    echo '</div>  

                  </td>

                </tr>';
            }

        ?>
               
        </tbody>

       </table>

<<<<<<< HEAD
    </div>




<?php

$eliminarOrdentrabajo = new ControladorOrdentrabajo();
$eliminarOrdentrabajo -> ctrEliminarOrdentrabajo();
=======
       <!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->

<div id="modalAgregarOrdentrabajo" class="modal fade" role="dialog">
  
  <div class="modal-dialog"  style="width: 500px;">

    <div class="modal-content">

      <form role="form" method="post" class="formularioMaterial" enctype="multipart/form-data">

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

            <!-- ENTRADA PARA EL CODIGO DE LA ORDEN -->

            <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>

                    <?php

                    $item = null;
                    $valor = null;

                    $ordentrabajo = ControladorOrdentrabajo::ctrMostrarOrdentrabajo($item, $valor);

                    if(!$ordentrabajo){

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

            <!-- ENTRADA PARA EL USUARIO-->
            
            <div class="form-group">
                
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control" id="nuevoUsuario" value="<?php echo $_SESSION["nombre"]; ?>" readonly>

                    <input type="hidden" name="idUsuario" value="<?php echo $_SESSION["id"]; ?>">

                  </div>

                </div> 

            <!-- ENTRADA PARA LA Nombre -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevaCantidadsolicitada" min="0" placeholder="Ingresar Cantidad Solicitada" required>

              </div>

            </div>

             <!-- ENTRADA PARA STOCK -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevaCantidadentregada" min="0" placeholder="Cantidad Entregada" required>

              </div>

            </div>
             

                <!-- ENTRADA PARA PRECIO VENTA -->

                <div class="form-group">

                      <div class="input-group">
  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                    <input type="date" class="form-control input-lg" id="nuevaFechaentrega" name="nuevaFechaentrega" required>

                </div>

            </div>

            <!-- ENTRADA PARA STOCK -->
            <div class="form-group row nuevoMaterial">

                

            </div>

            <input type="hidden" id="listaMaterial" name="listaMaterial">



             <button type="button" class="btn btn-dark btnAgregarProduct">Agregar producto</button>

            <hr>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary pull-right">Guardar venta</button>

        </div>

      </form>

       
        
      <?php

            $guardarOrdentrabajo = new ControladorOrdentrabajo();
            $guardarOrdentrabajo -> ctrCrearOrdentrabajo();
>>>>>>> fernando

?>

    </div>

<<<<<<< HEAD
=======
  </div>

</div>

       

      </div>

    </div>

>>>>>>> fernando
  </section>

</div>




