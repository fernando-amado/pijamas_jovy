<?php

if($_SESSION["perfil"] == "Especial"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

$xml = ControladorVentas::ctrDescargarXML();

if($xml){

  rename($_GET["xml"].".xml", "xml/".$_GET["xml"].".xml");

  echo '<a class="btn btn-block btn-success abrirXML" archivo="xml/'.$_GET["xml"].'.xml" href="ventas">Se ha creado correctamente el archivo XML <span class="fa fa-times pull-right"></span></a>';

}

?>
<div class="content-wrapper">

  <section class="content-header"> 
    
    <h1>
      
      Administrar ventas
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar ventas</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <a href="crear-venta">

          <button class="btn btn-primary">
            
            Agregar venta

          </button>

        </a>

         <button type="button" class="btn btn-default pull-right" id="daterange-btn">
           
            <span>
              <i class="fa fa-calendar"></i> 

              <?php

                if(isset($_GET["fechaInicial"])){

                  echo $_GET["fechaInicial"]." - ".$_GET["fechaFinal"];
                
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
           <th>Código factura</th>
           <th>Cliente</th>
           <th>Vendedor</th>
           <th>Forma de pago</th>
           <th>Total</th> 
           <th>Fecha</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

          if(isset($_GET["fechaInicial"])){

            $fechaInicial = $_GET["fechaInicial"];
            $fechaFinal = $_GET["fechaFinal"];

          }else{

            $fechaInicial = null;
            $fechaFinal = null;

          }

          $respuesta = ControladorVentas::ctrRangoFechasVentas($fechaInicial, $fechaFinal);

          foreach ($respuesta as $key => $value) {
           
           echo '<tr>

                  <td>'.($key+1).'</td>

                  <td>'.$value["codigo"].'</td>';

                  $itemCliente = "id";
                  $valorCliente = $value["id_cliente"];

                  $respuestaCliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

                  echo '<td>'.$respuestaCliente["nombre"].'</td>';

                  $itemUsuario = "id";
                  $valorUsuario = $value["id_vendedor"];

                  $respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                  echo '<td>'.$respuestaUsuario["nombre"].'</td>';

                  echo '<td>'.$value["metodo_pago"].'</td>

                  <td>$ '.number_format($value["total"],2).'</td>

                  <td>'.$value["fecha"].'</td>

                  <td>

                    <div class="btn-group">



                      <button class="btn btn-success btnImprimirTicket" codigoVenta="'.$value["codigo"].'">

                        <i class="fa fa-print">Factura</i>

                      </button>
                        
<<<<<<< HEAD
                      <button class="btn btn-info btnImprimirFactura "  codigoVenta="'.$value["codigo"].'">

                        <i class="fa fa-eye"></i>
=======
                      <button class="btn btn-info"  data-toggle="modal" data-target="#viewModal" codigoVenta="'.$value["codigo"].'">

                        <i class="fa fa-print"></i>PDF
>>>>>>> fernando

                      </button>';

                      if($_SESSION["perfil"] == "Administrador"){

                      echo '<button class="btn btn-warning btnEditarVenta" idVenta="'.$value["id"].'"><i class="fa fa-pencil"></i></button>

                      <button class="btn btn-danger btnEliminarVenta" idVenta="'.$value["id"].'"><i class="fa fa-times"></i></button>';

                    }

                    echo '</div>  

                  </td>

                </tr>';
<<<<<<< HEAD
                  }
=======
            }
>>>>>>> fernando

        ?>
               
        </tbody>

       </table>

<<<<<<< HEAD


=======
>>>>>>> fernando
       <?php

      $eliminarVenta = new ControladorVentas();
      $eliminarVenta -> ctrEliminarVenta();

      ?>
<<<<<<< HEAD

<div class="modal fade" id="viewModal">
=======
       

      </div>
      <div class="modal fade" id="viewModal">
>>>>>>> fernando
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-info text-white">
          <h5 class="modal-title">Resultado Media Aritmatica</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
<<<<<<< HEAD
        <div class="box">

<?php

    $item = "codigo";
    $valor = $_GET["codigoVenta"];

    $venta = ControladorVentas::ctrMostrarVentas($item, $valor);

    $itemUsuario = "id";
    $valorUsuario = $venta["id_vendedor"];

    $vendedor = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

    $itemCliente = "id";
    $valorCliente = $venta["id_cliente"];

    $cliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);




?>

<!--=====================================
ENTRADA DEL VENDEDOR
======================================-->

<div class="form-group">

  <div class="input-group">
    
    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

    <input type="text" class="form-control" id="nuevoVendedor" value="<?php echo $vendedor["nombre"]; ?>" readonly>

    <input type="hidden" name="idVendedor" value="<?php echo $vendedor["id"]; ?>">

  </div>

</div> 

<!--=====================================
ENTRADA DEL CÓDIGO
======================================--> 

<div class="form-group">
  
  <div class="input-group">
    
    <span class="input-group-addon"><i class="fa fa-key"></i></span>

   <input type="text" class="form-control" id="nuevaVenta" name="editarVenta" value="<?php echo $venta["codigo"]; ?>" readonly>

  </div>

</div>

<!--=====================================
ENTRADA DEL CLIENTE
======================================--> 

<div class="form-group">
  
  <div class="input-group">
    
    <span class="input-group-addon"><i class="fa fa-users"></i></span>
    
    <input type="text" class="form-control" id="nuevaVenta" name="editarVenta" value="<?php echo $cliente["nombre"]; ?>" readonly>

  
  </div>

</div>

<!--=====================================
ENTRADA PARA AGREGAR PRODUCTO
======================================--> 

<div class="form-group row nuevoProducto">

<?php

$listaProducto = json_decode($venta["productos"], true);

foreach ($listaProducto as $key => $value) {

  $item = "id";
  $valor = $value["id"];
  $orden = "codigo";

  $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

  $stockAntiguo = $respuesta["stock"] + $value["cantidad"];
  
  echo '<div class="row" style="padding:5px 15px">

        <div class="col-xs-6" style="padding-right:0px">

          <div class="input-group">

           

            <input type="text" class="form-control nuevaDescripcionProducto" idProducto="'.$value["id"].'" name="agregarProducto" value="'.$value["descripcion"].'" readonly required>

          </div>

        </div>

        <div class="col-xs-3">

          <input type="number" class="form-control nuevaCantidadProducto" name="nuevaCantidadProducto" min="1" value="'.$value["cantidad"].'" stock="'.$stockAntiguo.'" nuevoStock="'.$value["stock"].'" readonly>

        </div>

        <div class="col-xs-3 ingresoPrecio" style="padding-left:0px">

          <div class="input-group">
    
            <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
   
            <input type="text" class="form-control nuevoPrecioProducto" precioReal="'.$respuesta["precio_venta"].'" name="nuevoPrecioProducto" value="'.$value["total"].'" readonly required>

          </div>

        </div>

      </div>';
}


?>

</div>

<input type="hidden" id="listaProductos" name="listaProductos">


  <!--=====================================
  ENTRADA TOTAL
  ======================================-->
  
  <div class="form-group">
  
  <div class="input-group">
    
    <span class="input-group-addon"><i class="fa fa-key"></i></span>

   <input type="text" class="form-control" id="nuevaVenta" name="editarVenta" value="<?php echo $venta["total"]; ?>" readonly>

  </div>

</div>

<!--=====================================
ENTRADA MÉTODO DE PAGO
======================================-->

<div class="form-group">
  
  <div class="input-group">
    
    <span class="input-group-addon"><i class="fa fa-key"></i></span>

   <input type="text" class="form-control" id="nuevaVenta" name="editarVenta" value="<?php echo $venta["metodo_pago"]; ?>" readonly>

  </div>

</div>


</div>

<div class="box-footer">


</div>

</form>

      </div>
    </div>
  </div>

      </div>
=======
        <?php
        

$itemVenta = "codigo";
$valorVenta = "codigo";

$respuestaVenta = ControladorVentas::ctrMostrarVentas($itemVenta, $valorVenta); 

$productos = json_decode($respuestaVenta["productos"], true);

foreach ($productos as $key => $item) {

  $itemProducto = "descripcion";
  $valorProducto = $item["descripcion"];
  $orden = null;
  
  $respuestaProducto = ControladorProductos::ctrMostrarProductos($itemProducto, $valorProducto, $orden);
  
  $valorUnitario = number_format($respuestaProducto["precio_venta"], 2);
  
  $precioTotal = number_format($item["total"], 2); 

                ?>
          <div class="row">
            <div class="col-sm-5 col-xs-6 tital " >
            </div>
            <div class="col-sm-7 col-xs-6 ">
           <?php echo ' <td style="border: 1px solid #666; color:#333; background-color:white; width:260px; text-align:center">'.$item[descripcion].'</td>';?>
            </div>          
          </div>
          <br>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
>>>>>>> fernando

    </div>


<<<<<<< HEAD
=======
  </section>

>>>>>>> fernando
</div>




