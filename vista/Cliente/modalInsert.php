
<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        
  
      </div>
      
          <form class="form2" id="frminsert" onsubmit="return insertarDatos()" method="post">
          <div class="title">
          
         <h1>Registro Cliente</h1><br><br><br>
         
         </div>  
          <br><div class="one-half ">
            <input  type="text" id="nombre" name="nombre" required=""><span class="barra"></span>
              <label>Nombre del cliente </label>
            </div>  
            <div class="one-half last ">
              <input type="text" id="apellido" name="apellido"  required=""><span class="barra"></span>
              <label>Apellidos del cliente </label>
            </div> 
              <div class="one-half ">
              <input type="text" id="documento" name="documento"  required=""><span class="barra"></span>
              <label>Documento </label>
            </div> 
              <div class="one-half ">
              <input type="text" id="telefono" name="telefono"  required=""><span class="barra"></span>
              <label>Telefono </label>
            </div>  
            <div class="one-half ">
              <input type="text" id="correo" name="correo"  required=""><span class="barra"></span>
              <label>Correo </label>
            </div>
            <div class="one-half ">
              <input type="text" id="direccion" name="direccion"  required=""><span class="barra"></span>
              <label>Dirección </label>
            </div>
              <input type="reset" class="reset2" value="Reset">
               <input type="submit" value="Guardar" class="boton3">
               <div class="close">
               <button type="button"  class="btn btn-primary" data-dismiss="modal">X</button>
               </div>
          </form>
      </div>
      
        

      </div>
    </div>
  </div>
</div>
