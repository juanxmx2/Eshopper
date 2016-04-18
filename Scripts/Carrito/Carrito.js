
document.write("<"+"script type='text/javascript' src='../../Scripts/js/alerta.js'><"+"/script>")

function cargar_carrito(id)
{
	document.getElementById(id).submit();

}

function aumentarCantidad(valor,id)
{
	console.log(document.getElementById("cantidad"+id).value)

     var valor2 = eval(document.getElementById("cantidad"+id).value);
	 document.getElementById("cantidad"+id).value = eval(valor2 + 1)

	 document.getElementById("cantidadTotal"+id).value = valor *  document.getElementById("cantidad"+id).value;

}

function disminuirCantidad(valor,id)
{
	if( document.getElementById("cantidad"+id).value > 0){
	 document.getElementById("cantidad"+id).value -=1;

	 document.getElementById("cantidadTotal"+id).value = valor *  document.getElementById("cantidad"+id).value;
	}
}

function perdidaFocus(id)
{
	document.getElementById("cantidadTotal"+id).value *=  document.getElementById("cantidad"+id).value;
}

function borrarCarrito(id)
{
	document.getElementById("borrar"+id).submit();
}
