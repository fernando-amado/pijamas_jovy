<!-- Modal -->
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
          <form class="form2" id="frminsertu" onsubmit="return actualizarDatos()" method="post">
          <div class="title">
          
         <h1>Modificar Cliente</h1><br><br><br>
         
         </div>
            <input type="text" id="Id_cliente" name="Id_cliente" hidden="">
            <br><div class="one-half ">
            <input  type="text" id="nombreu" name="nombreu" required=""><span class="barra"></span>
              <label>Nombre del cliente </label>
            </div>  
            <div class="one-half last ">
              <input type="text" id="apellidou" name="apellidou"  required=""><span class="barra"></span>
              <label>Apellidos del cliente </label>
            </div> 
              <div class="one-half ">
              <input type="text" id="documentou" name="documentou"  required=""><span class="barra"></span>
              <label>Documento </label>
            </div> 
              <div class="one-half ">
              <input type="text" id="telefonou" name="telefonou"  required=""><span class="barra"></span>
              <label>Telefono </label>
            </div>  
            <div class="one-half ">
              <input type="text" id="correou" name="correou"  required=""><span class="barra"></span>
              <label>Correo </label>
            </div>
            <div class="one-half ">
              <input type="text" id="direccionu" name="direccionu"  required=""><span class="barra"></span>
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
