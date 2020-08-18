<!-- Modal -->
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  </div>
  <form class="form2" id="frminsertu" onsubmit="return actualizarDatos()" method="post">
    <div class="title">
      <h1>Modificar Producto</h1><br><br><br>
    </div>
    <input type="text" id="Id_producto" name="Id_producto" hidden="">
    <br>
    <div class="one-half ">
      <input type="text" id="productou" name="productou" required=""><span class="barra"></span>
      <label>Nombre del producto</label>
    </div>
    <div class="one-half last">
      <input type="text" id="preciou" name="preciou" required=""><span class="barra"></span>
      <label>Precio del producto</label>
    </div>
    <div class="one-half ">
      <input type="text" id="cantidadu" name="cantidadu" required=""><span class="barra"></span>
      <label>Cantidad de articulos</label>
    </div>
    <div class="one-half last">
      <input type="text" id="tallau" name="tallau" required=""><span class="barra"></span>
      <label>Tallas</label>
    </div>
    <div class="one-half ">
      <input type="text" id="ordentrabajou" name="ordentrabajou" required=""><span class="barra"></span>
      <label>Orden Trabajo</label>
    </div>
    <div class="one-half last">
      <input type="text" id="pedidou" name="pedidou" required=""><span class="barra"></span>
      <label>Pedido</label>
    </div>
    <input type="reset" class="reset2" value="Reset">
    <input type="submit" value="Guardar" class="boton3">
    <div class="close">
      <button type="button" class="btn btn-primary" data-dismiss="modal">X</button>
    </div>
  </form>
</div>
</div>
</div>
</div>
</div>