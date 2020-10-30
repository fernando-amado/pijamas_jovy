<?php

if($_SESSION["perfil"] == "Especial" || $_SESSION["perfil"] == "Vendedor"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar usuarios
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>
      
      <li class="active">Administrar usuarios</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
          
          Agregar usuario

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Usuario</th>
<<<<<<< HEAD
           <th>Correo Electronico</th>
=======
>>>>>>> fernando
           <th>Foto</th>
           <th>Perfil</th>
           <th>Estado</th>
           <th>Último login</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

        $item = null;
        $valor = null;

        $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

       foreach ($usuarios as $key => $value){
         
          echo ' <tr>
                  <td>'.($key+1).'</td>
                  <td>'.$value["nombre"].'</td>
<<<<<<< HEAD
                  <td>'.$value["usuario"].'</td>
                  <td>'.$value["correo"].'</td>';
=======
                  <td>'.$value["usuario"].'</td>';
>>>>>>> fernando

                  if($value["foto"] != ""){

                    echo '<td><img src="'.$value["foto"].'" class="img-thumbnail" width="70px"></td>';

                  }else{

                    echo '<td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>';

                  }

                  echo '<td>'.$value["perfil"].'</td>';

                  if($value["estado"] != 0){

                    echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';

                  }else{

                    echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Desactivado</button></td>';

                  }             

                  echo '<td>'.$value["ultimo_login"].'</td>
                  <td>

                    <div class="btn-group">
                        
                      <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>

                      <button class="btn btn-danger btnEliminarUsuario" idUsuario="'.$value["id"].'" fotoUsuario="'.$value["foto"].'" usuario="'.$value["usuario"].'"><i class="fa fa-times"></i></button>

                    </div>  

                  </td>

                </tr>';
        }


        ?> 

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR USUARIO
======================================-->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  
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

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title" >Agregar usuario</h4>
=======
        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar usuario</h4>
>>>>>>> fernando

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">
            
            <!-- ENTRADA PARA SUBIR FOTO -->

            <div class="form-group">

              <input type="file" class=" nuevaFoto" name="nuevaFoto" style="width: 102px; background:#000; position: absolute; top:215px; left: 40%;">

<<<<<<< HEAD
              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="200px" style="position:relative; left:24%; top:-10px;" >
=======
              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="200px" style="position:relative; left:27%; top:-10px;" >
>>>>>>> fernando

            </div>

          </div>  

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
<<<<<<< HEAD
=======
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 
>>>>>>> fernando

                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
              
              <div class="input-group">
<<<<<<< HEAD

                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar usuario" id="nuevoUsuario" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CORREO -->

            <div class="form-group">
              
              <div class="input-group">

                <input type="text" class="form-control input-lg" name="nuevoCorreo" placeholder="Ingresar correo electronico" id="nuevoCorreo" required>
=======
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar usuario" id="nuevoUsuario" required>
>>>>>>> fernando

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="form-group">
              
              <div class="input-group">
<<<<<<< HEAD
=======
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 
>>>>>>> fernando

                <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
<<<<<<< HEAD
              <div class="input-group"> 
=======
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 
>>>>>>> fernando

                <select class="form-control input-lg" name="nuevoPerfil">
                  
                  <option value="">Selecionar perfil</option>

                  <option value="Administrador">Administrador</option>

                  <option value="Costurero">Costurero</option>

                  <option value="Vendedor">Vendedor</option>

                </select>

              </div>

            </div>


        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar usuario</button>

        </div>

        <?php

          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR USUARIO
======================================-->

<div id="modalEditarUsuario" class="modal fade" role="dialog">
  
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

          <h4 class="modal-title">Editar usuario</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">
            
            <!-- ENTRADA PARA SUBIR FOTO -->

            <div class="form-group">

              <input type="file" class="nuevaFoto" name="editarFoto" style="width: 102px; background:#000; position: absolute; top:215px; left: 40%;">

<<<<<<< HEAD
              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizarEditar" width="200px" style="position:relative; left:24%; top:-10px;">
=======
              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizarEditar" width="200px" style="position:relative; left:27%; top:-10px;">
>>>>>>> fernando

              <input type="hidden" name="fotoActual" id="fotoActual">

            </div>

          </div>

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
<<<<<<< HEAD
=======
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 
>>>>>>> fernando

                <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" value="" required>

              </div>

            </div>
<<<<<<< HEAD
            
=======
>>>>>>> fernando

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
              
              <div class="input-group">
<<<<<<< HEAD
=======
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 
>>>>>>> fernando

                <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario" value="" readonly>

              </div>

            </div>

<<<<<<< HEAD
            <!-- ENTRADA PARA EL CORREO -->

            <div class="form-group">
              
              <div class="input-group">

                <input type="email" class="form-control input-lg" id="editarCorreo" name="editarCorreo" value="" required>
=======
            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Escriba la nueva contraseña">

                <input type="hidden" id="passwordActual" name="passwordActual">
>>>>>>> fernando

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
              <div class="input-group">
<<<<<<< HEAD
=======
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 
>>>>>>> fernando

                <select class="form-control input-lg" name="editarPerfil">
                  
                  <option value="" id="editarPerfil"></option>

                  <option value="Administrador">Administrador</option>

                  <option value="Costurero">Costurero</option>

                  <option value="Vendedor">Vendedor</option>

                </select>

              </div>

            </div>


        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar usuario</button>

        </div>

     <?php

          $editarUsuario = new ControladorUsuarios();
          $editarUsuario -> ctrEditarUsuario();

        ?> 

      </form>

    </div>

  </div>

</div>

<?php

  $borrarUsuario = new ControladorUsuarios();
  $borrarUsuario -> ctrBorrarUsuario();

?> 


