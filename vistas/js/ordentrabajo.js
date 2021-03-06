/*=============================================
CARGAR LA TABLA DINÁMICA DE VENTAS
=============================================*/

// $.ajax({

// 	url: "ajax/datatable-ordentrabajo.ajax.php",
// 	success:function(respuesta){
		
// 		console.log("respuesta", respuesta);

// 	}

// })// 

$('.tablaOrden').DataTable( {
    "ajax": "ajax/datatable-ordentrabajo.ajax.php",
    "deferRender": true,
	"retrieve": true,
	"processing": true,
	 "language": {

			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
			"sFirst":    "Primero",
			"sLast":     "Último",
			"sNext":     "Siguiente",
			"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}

	}

} );

/*=============================================
AGREGANDO PRODUCTOS A LA VENTA DESDE LA TABLA
=============================================*/

$(".tablaOrden tbody").on("click", "button.agregarMaterial", function(){

		var idMaterial = $(this).attr("idMaterial");

		$(this).removeClass("btn-primary agregarMaterial");

		$(this).addClass("btn-default");

		var datos = new FormData();
		datos.append("idMaterial", idMaterial);

     $.ajax({

     	url:"ajax/material.ajax.php",
      	method: "POST",
      	data: datos,
      	cache: false,
      	contentType: false,
      	processData: false,
      	dataType:"json",
      	success:function(respuesta){

      	    var nombre = respuesta["nombre"];
          	var stock = respuesta["stock"];

          	/*=============================================
          	EVITAR AGREGAR PRODUTO CUANDO EL STOCK ESTÁ EN CERO
          	=============================================*/

          	if(stock == 0){

      			swal({
			      title: "No hay stock disponible",
			      type: "error",
			      confirmButtonText: "¡Cerrar!"
			    });

			    $("button[idMaterial='"+idMaterial+"']").addClass("btn-primary agregarMaterial");

			    return;

          	}

<<<<<<< HEAD
			  $(".nuevoMaterial").append(

				'<div class="row" style="padding:5px 15px">'+
  
				'<!-- Descripción del producto -->'+
				
				'<div class="col-xs-6" style="padding-right:0px">'+
				
				  '<div class="input-group">'+
					
					'<span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarMaterial" idMaterial="'+idMaterial+'"><i class="fa fa-times"></i></button></span>'+
  
					'<input type="text" class="form-control nuevaNombreMaterial" idMaterial="'+idMaterial+'" name="agregarMaterial" value="'+nombre+'" readonly required>'+
  
				  '</div>'+
  
				'</div>'+
  
				'<!-- Cantidad del material -->'+
  
				'<div class="col-xs-3">'+
				  
				   '<input type="number" class="form-control nuevaCantidadMaterial" name="nuevaCantidadMaterial" min="1" value="1" stock="'+stock+'" nuevoStock="'+Number(stock-1)+'" required>'+
  
				'</div>' +
				   
				'</div>'+
  
			  '</div>') 
  
  
  
			  // AGRUPAR PRODUCTOS EN FORMATO JSON
  
			  listarProductos()
  
  
			  localStorage.removeItem("quitarProducto");
  
			}
  
	   })
  
  });
  
  function cambios(){
  
  

			  // AGRUPAR PRODUCTOS EN FORMATO JSON
  
			  listarProductos();
  }
  
=======
          	$(".nuevoMaterial").append(

          	'<div class="row" style="padding:5px 15px">'+

			  '<!-- Nombre del material -->'+
	          
	          '<div class="col-xs-6" style="padding-right:0px">'+
	          
	            '<div class="input-group">'+
	              
	              '<span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarMaterial" idMaterial="'+idMaterial+'"><i class="fa fa-times"></i></button></span>'+

	              '<input type="text" class="form-control nuevaNombreMaterial" idMaterial="'+idMaterial+'" name="agregarMaterial" value="'+nombre+'" readonly required>'+

	            '</div>'+

	          '</div>'+

	          '<!-- Cantidad del material -->'+

	          '<div class="col-xs-3">'+
	            
	             '<input type="number" class="form-control nuevaCantidadMaterial" name="nuevaCantidadMaterial" min="1" value="1" stock="'+stock+'" nuevoStock="'+Number(stock-1)+'" required>'+

	          '</div>' +
	             
	          '</div>'+

	        '</div>')

	        // AGRUPAR PRODUCTOS EN FORMATO JSON

	        listarMaterial()


			localStorage.removeItem("quitarMaterial");

      	}

     })

});

function cambios(){

	        // AGRUPAR PRODUCTOS EN FORMATO JSON

	        listarMaterial();
}
>>>>>>> fernando

/*=============================================
CUANDO CARGUE LA TABLA CADA VEZ QUE NAVEGUE EN ELLA
=============================================*/

$(".tablaOrdentrabajo").on("draw.dt", function(){

	if(localStorage.getItem("quitarMaterial") != null){

		var listaIdMaterial = JSON.parse(localStorage.getItem("quitarMaterial"));

		for(var i = 0; i < listaIdMaterial.length; i++){

			$("button.recuperarBoton[idMaterial='"+listaIdMaterial[i]["idMaterial"]+"']").removeClass('btn-default');
			$("button.recuperarBoton[idMaterial='"+listaIdMaterial[i]["idMaterial"]+"']").addClass('btn-primary agregarMaterial');

		}


	}


})


/*=============================================
QUITAR PRODUCTOS DE LA VENTA Y RECUPERAR BOTÓN
=============================================*/

var idQuitarMaterial = [];

localStorage.removeItem("quitarMaterial");

$(".formularioMaterial").on("click", "button.quitarMaterial", function(){

	$(this).parent().parent().parent().parent().remove();

	var idMaterial = $(this).attr("idMaterial");

	/*=============================================
	ALMACENAR EN EL LOCALSTORAGE EL ID DEL PRODUCTO A QUITAR
	=============================================*/

	if(localStorage.getItem("quitarMaterial") == null){

		idQuitarMaterial = [];
	
	}else{

		idQuitarMaterial.concat(localStorage.getItem("quitarMaterial"))

	}

	idQuitarMaterial.push({"idMaterial":idMaterial});

	localStorage.setItem("quitarMaterial", JSON.stringify(idQuitarMaterial));

	$("button.recuperarBoton[idMaterial='"+idMaterial+"']").removeClass('btn-default');

	$("button.recuperarBoton[idMaterial='"+idMaterial+"']").addClass('btn-primary agregarMaterial');

	if($(".nuevoMaterial").children().length == 0){

	}else{
        // AGRUPAR PRODUCTOS EN FORMATO JSON

        listarMaterial()

	}

})

/*=============================================
AGREGANDO PRODUCTOS DESDE EL BOTÓN PARA DISPOSITIVOS
=============================================*/

var numMaterial = 0;

$(".btnAgregarProduct").click(function(){
<<<<<<< HEAD
    numMaterial ++;
=======

	numMaterial ++;
>>>>>>> fernando

	var datos = new FormData();
	datos.append("traerMaterial", "ok");

	$.ajax({

		url:"ajax/material.ajax.php",
      	method: "POST",
      	data: datos,
      	cache: false,
      	contentType: false,
      	processData: false,
      	dataType:"json",
      	success:function(respuesta){
      	    
      	    	$(".nuevoMaterial").append(

          	'<div class="row" style="padding:5px 15px">'+

			  '<!-- Nombre del material -->'+
	          
	          '<div class="col-xs-6" style="padding-right:0px">'+
	          
	            '<div class="input-group">'+
	              
	              '<span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarMaterial" idMaterial><i class="fa fa-times"></i></button></span>'+

	              '<select class="form-control nuevaNombreMaterial" id="material'+numMaterial+'" idMaterial name="nuevaNombreMaterial" required>'+

	              '<option>Seleccione el material</option>'+

	              '</select>'+  

	            '</div>'+

	          '</div>'+

	          '<!-- Cantidad del material -->'+

	          '<div class="col-xs-3 ingresoCantidad">'+
	            
	             '<input type="number" class="form-control nuevaCantidadMaterial" name="nuevaCantidadMaterial" min="1" value="1" stock nuevoStock required>'+

	          '</div>' +
	             
	          '</div>'+

	        '</div>');


	        // AGREGAR LOS PRODUCTOS AL SELECT 

	         respuesta.forEach(funcionForEach);

	         function funcionForEach(item, index){

	         	if(item.stock != 0){

		         	$("#material"+numMaterial).append(

						'<option idMaterial="'+item.id+'" value="'+item.nombre+'">'+item.nombre+'</option>'
		         	)

		         
		         }	         

	         }


      	}

	})

})

/*=============================================
SELECCIONAR PRODUCTO
=============================================*/

$(".formularioMaterial").on("change", "select.nuevaNombreMaterial", function(){

	var nombreMaterial = $(this).val();

	var nuevaNombreMaterial = $(this).parent().parent().parent().children().children().children(".nuevaNombreMaterial");

	var nuevaCantidadMaterial = $(this).parent().parent().parent().children(".ingresoCantidad").children(".nuevaCantidadMaterial");

	var datos = new FormData();
    datos.append("nombreMaterial", nombreMaterial);


	  $.ajax({

     	url:"ajax/material.ajax.php",
      	method: "POST",
      	data: datos,
      	cache: false,
      	contentType: false,
      	processData: false,
      	dataType:"json",
      	success:function(respuesta){
      	    
      	     $(nuevaNombreMaterial).attr("idMaterial", respuesta["id"]);
      	    $(nuevaCantidadMaterial).attr("stock", respuesta["stock"]);
      	    $(nuevaCantidadMaterial).attr("nuevoStock", Number(respuesta["stock"])-1);

  	      // AGRUPAR PRODUCTOS EN FORMATO JSON

	        listarMaterial()

      	}

      })
})

/*=============================================
MODIFICAR LA CANTIDAD
=============================================*/

$(".formularioMaterial").on("change", "input.nuevaCantidadMaterial", function(){

	var nuevoStock = Number($(this).attr("stock")) - $(this).val();

	$(this).attr("nuevoStock", nuevoStock);

	if(Number($(this).val()) > Number($(this).attr("stock"))){

		/*=============================================
		SI LA CANTIDAD ES SUPERIOR AL STOCK REGRESAR VALORES INICIALES
		=============================================*/

		$(this).val(0);

		$(this).attr("nuevoStock", $(this).attr("stock"));

		swal({
	      title: "La cantidad supera el Stock",
	      text: "¡Sólo hay "+$(this).attr("stock")+" unidades!",
	      type: "error",
	      confirmButtonText: "¡Cerrar!"
	    });

	    return;

	}

    // AGRUPAR PRODUCTOS EN FORMATO JSON

    listarMaterial()

})

/*=============================================
LISTAR TODOS LOS PRODUCTOS
=============================================*/

function listarMaterial(){

	var listaMaterial = [];

	var nombre = $(".nuevaNombreMaterial");

	var cantidad = $(".nuevaCantidadMaterial");

	for(var i = 0; i < nombre.length; i++){

		listaMaterial.push({ "id" : $(nombre[i]).attr("idMaterial"), 
							  "nombre" : $(nombre[i]).val(),
							  "cantidad" : $(cantidad[i]).val(),
							  "stock" : $(cantidad[i]).attr("nuevoStock")})

	}

	$("#listaMaterial").val(JSON.stringify(listaMaterial)); 

}

/*=============================================
BOTON EDITAR VENTA
=============================================*/
<<<<<<< HEAD
$(".tablas").on("click", ".btnEditarOrdentrabajo", function(){

	var idOrdentrabajo = $(this).attr("idOrdentrabajo");
	

	window.location = "index.php?ruta=editar-ordentrabajo&idOrdentrabajo="+idOrdentrabajo;
=======
$(".tablas").on("click", ".btnEditarVenta", function(){

	var idVenta = $(this).attr("idVenta");

	window.location = "index.php?ruta=editar-venta&idVenta="+idVenta;

>>>>>>> fernando

})

/*=============================================
FUNCIÓN PARA DESACTIVAR LOS BOTONES AGREGAR CUANDO EL PRODUCTO YA HABÍA SIDO SELECCIONADO EN LA CARPETA
=============================================*/

function quitarAgregarMaterial(){

	//Capturamos todos los id de productos que fueron elegidos en la venta
	var idMaterial = $(".quitarMaterial");

	//Capturamos todos los botones de agregar que aparecen en la tabla
	var botonesTabla = $(".tablaOrden tbody button.agregarMaterial");

	//Recorremos en un ciclo para obtener los diferentes idProductos que fueron agregados a la venta
	for(var i = 0; i < idMaterial.length; i++){

		//Capturamos los Id de los productos agregados a la venta
		var boton = $(idMaterial[i]).attr("idMaterial");
		
		//Hacemos un recorrido por la tabla que aparece para desactivar los botones de agregar
		for(var j = 0; j < botonesTabla.length; j ++){

			if($(botonesTabla[j]).attr("idMaterial") == boton){

				$(botonesTabla[j]).removeClass("btn-primary agregarMaterial");
				$(botonesTabla[j]).addClass("btn-default");

			}
		}

	}
	
}

/*=============================================
CADA VEZ QUE CARGUE LA TABLA CUANDO NAVEGAMOS EN ELLA EJECUTAR LA FUNCIÓN:
=============================================*/

$('.tablaOrden').on( 'draw.dt', function(){

	quitarAgregarMaterial();

})


/*=============================================
BORRAR VENTA
=============================================*/
<<<<<<< HEAD
$(".tablas").on("click", ".btnEliminarOrdentrabajo", function(){

  var idOrdentrabajo = $(this).attr("idOrdentrabajo");

  swal({
        title: '¿Está seguro de borrar la orden de trabajo?',
=======
$(".tablas").on("click", ".btnEliminarVenta", function(){

  var idVenta = $(this).attr("idVenta");

  swal({
        title: '¿Está seguro de borrar la venta?',
>>>>>>> fernando
        text: "¡Si no lo está puede cancelar la accíón!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
<<<<<<< HEAD
        confirmButtonText: 'Si, borrar Orden!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=ordentrabajo&idOrdentrabajo="+idOrdentrabajo;
=======
        confirmButtonText: 'Si, borrar venta!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=ventas&idVenta="+idVenta;
>>>>>>> fernando
        }

  })

})

/*=============================================
<<<<<<< HEAD
RANGO DE FECHAS
=============================================*/

$('#date-btn').daterangepicker(
=======
IMPRIMIR FACTURA
=============================================*/

$(".tablas").on("click", ".btnImprimirFactura", function(){

	var codigoVenta = $(this).attr("codigoVenta");

	window.open("extensiones/tcpdf/pdf/factura.php?codigo="+codigoVenta, "_blank"); 

})

/*=============================================
IMPRIMIR Ticket
=============================================*/

$(".tablas").on("click", ".btnImprimirTicket", function(){

	var codigoVenta = $(this).attr("codigoVenta");

	window.open("extensiones/tcpdf/pdf/ticket.php?codigo="+codigoVenta, "_blank"); 

})

/*=============================================
RANGO DE FECHAS
=============================================*/

$('#daterange-btn').daterangepicker(
>>>>>>> fernando
  {
    ranges   : {
      'Hoy'       : [moment(), moment()],
      'Ayer'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Últimos 7 días' : [moment().subtract(6, 'days'), moment()],
      'Últimos 30 días': [moment().subtract(29, 'days'), moment()],
      'Este mes'  : [moment().startOf('month'), moment().endOf('month')],
      'Último mes'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    startDate: moment(),
    endDate  : moment()
  },
  function (start, end) {
<<<<<<< HEAD
    $('#date-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));

    var fechaIni = start.format('YYYY-MM-DD');

    var fechaFin = end.format('YYYY-MM-DD');

    var capturarRango = $("#date-btn span").html();
   
   	localStorage.setItem("capturar", capturarRango);

   	window.location = "index.php?ruta=ordentrabajo&fechaIni="+fechaIni+"&fechaFin="+fechaFin;
=======
    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));

    var fechaInicial = start.format('YYYY-MM-DD');

    var fechaFinal = end.format('YYYY-MM-DD');

    var capturarRango = $("#daterange-btn span").html();
   
   	localStorage.setItem("capturarRango", capturarRango);

   	window.location = "index.php?ruta=ventas&fechaInicial="+fechaInicial+"&fechaFinal="+fechaFinal;
>>>>>>> fernando

  }

)

/*=============================================
CANCELAR RANGO DE FECHAS
=============================================*/

$(".daterangepicker.opensleft .range_inputs .cancelBtn").on("click", function(){

<<<<<<< HEAD
	localStorage.removeItem("capturar");
	localStorage.clear();
	window.location = "ordentrabajo";
=======
	localStorage.removeItem("capturarRango");
	localStorage.clear();
	window.location = "ventas";
>>>>>>> fernando
})

/*=============================================
CAPTURAR HOY
=============================================*/

$(".daterangepicker.opensleft .ranges li").on("click", function(){

	var textoHoy = $(this).attr("data-range-key");

	if(textoHoy == "Hoy"){

		var d = new Date();
		
		var dia = d.getDate();
		var mes = d.getMonth()+1;
		var año = d.getFullYear();

		// if(mes < 10){

<<<<<<< HEAD
		// 	var fechaIni = año+"-0"+mes+"-"+dia;
		// 	var fechaFin = año+"-0"+mes+"-"+dia;

		// }else if(dia < 10){

		// 	var fechaIni = año+"-"+mes+"-0"+dia;
		// 	var fechaFin = año+"-"+mes+"-0"+dia;

		// }else if(mes < 10 && dia < 10){

		// 	var fechaIni = año+"-0"+mes+"-0"+dia;
		// 	var fechaFin = año+"-0"+mes+"-0"+dia;

		// }else{

		// 	var fechaIni = año+"-"+mes+"-"+dia;
	 //    	var fechaFin = año+"-"+mes+"-"+dia;
=======
		// 	var fechaInicial = año+"-0"+mes+"-"+dia;
		// 	var fechaFinal = año+"-0"+mes+"-"+dia;

		// }else if(dia < 10){

		// 	var fechaInicial = año+"-"+mes+"-0"+dia;
		// 	var fechaFinal = año+"-"+mes+"-0"+dia;

		// }else if(mes < 10 && dia < 10){

		// 	var fechaInicial = año+"-0"+mes+"-0"+dia;
		// 	var fechaFinal = año+"-0"+mes+"-0"+dia;

		// }else{

		// 	var fechaInicial = año+"-"+mes+"-"+dia;
	 //    	var fechaFinal = año+"-"+mes+"-"+dia;
>>>>>>> fernando

		// }

		dia = ("0"+dia).slice(-2);
		mes = ("0"+mes).slice(-2);

<<<<<<< HEAD
		var fechaIni = año+"-"+mes+"-"+dia;
		var fechaFin= año+"-"+mes+"-"+dia;	

    	localStorage.setItem("capturar", "Hoy");

    	window.location = "index.php?ruta=ordentrabajo&fechaIni="+fechaIni+"&fechaFin="+fechaFin;
=======
		var fechaInicial = año+"-"+mes+"-"+dia;
		var fechaFinal = año+"-"+mes+"-"+dia;	

    	localStorage.setItem("capturarRango", "Hoy");

    	window.location = "index.php?ruta=ventas&fechaInicial="+fechaInicial+"&fechaFinal="+fechaFinal;
>>>>>>> fernando

	}

})

<<<<<<< HEAD
$(".tablas").on("click", ".btnDetalle", function(){

	var idOrdentrabajo = $(this).attr("idOrdentrabajo");

	window.location = "index.php?ruta=detalleorden&idOrdentrabajo="+idOrdentrabajo;

})

=======
>>>>>>> fernando
/*=============================================
ABRIR ARCHIVO XML EN NUEVA PESTAÑA
=============================================*/

$(".abrirXML").click(function(){

	var archivo = $(this).attr("archivo");
	window.open(archivo, "_blank");


})


