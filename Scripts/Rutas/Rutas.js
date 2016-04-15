var rutaLogin = {"request":"login.html","cadena":"/login"}
var rutaConsultarPatrimonio = {"request":"login.html","cadena":""}

var rutaCrearMovimiento = {"request":"Movimientos_Financieros/crearMovimiento.html","cadena":""}
var rutaConsultarMovimiento = {"request":"Movimientos_Financieros/consultarMovimientos.html","cadena":""}



var rutaCrearConsignacion = {"request":"Consignaciones/crearConsignacion.html","cadena":""}
var rutaConsultarConsignacion = {"request":"Consignaciones/consultarConsignacion.html","cadena":""}
// Pagina de Crear Patrimonio
function paginaLogin()
{	
	cargarPagina(rutaLogin.request,rutaLogin.cadena);
}

// Pagina de Consultar Patrimonio
function PaginaConsultarPatrimonio()
{	
	cargarPagina(rutaConsultarPatrimonio.request,rutaConsultarPatrimonio.cadena);
}


function PaginaCrearMovimiento()
{	
	cargarPagina(rutaCrearMovimiento.request,rutaCrearMovimiento.cadena);
}

function PaginaConsultarMovimiento()
{	
	cargarPagina(rutaConsultarMovimiento.request,rutaConsultarMovimiento.cadena);
}



function PaginaCrearConsignacion()
{	
	cargarPagina(rutaCrearConsignacion.request,rutaCrearConsignacion.cadena);
}


function PaginaConsultarConsignacion()
{	
	cargarPagina(rutaConsultarConsignacion.request,rutaConsultarConsignacion.cadena);
}


// Funcion Ajax que Permite  CARGAR Las paginas en los ID
function cargarPagina(request,cadena)
{	
	$.ajax({
	url:request,
	type:"POST",
	dataType:"html",
	contentType:'application/x-www-form-urlencoded; charset-utf-8;',
	data:cadena,
	success:function(datos)
			{
				// Cuando tenga datos de Respeusta
				$('#cuerpo').html(datos);
			}
	});
}