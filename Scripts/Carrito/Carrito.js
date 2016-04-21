
document.write("<"+"script type='text/javascript' src='../../Scripts/js/alerta.js'><"+"/script>")



function cargar_carrito(id, cantidad)
{
	if(cantidad > 0){
	document.getElementById(id).submit();
	}else
	{
		  alerts("Lo sentimos en estos momentos no contamos con stock para este producto", "Producto Agotado");
	}

}

function cargar_detalle(id)
{
	document.getElementById("detalle"+id).submit();

}

function aumentarCantidad(valor,id)
{
	console.log(document.getElementById("cantidad"+id).value)

     var valor2 = eval(document.getElementById("cantidad"+id).value);
	 document.getElementById("cantidad"+id).value = eval(valor2 + 1)

	 var valores = valor *  document.getElementById("cantidad"+id).value;
	 var locale = 'de';
	var options = {style: 'currency', currency: 'usd', minimumFractionDigits: 2, maximumFractionDigits: 2};
	var formatter = new Intl.NumberFormat(locale, options);
	document.getElementById("cantidadTotal"+id).value = formatter.format(valores);

}

function disminuirCantidad(valor,id)
{
	if( document.getElementById("cantidad"+id).value > 0){
	 document.getElementById("cantidad"+id).value -=1;

	 var valores = valor *  document.getElementById("cantidad"+id).value;
	 var locale = 'de';
	var options = {style: 'currency', currency: 'usd', minimumFractionDigits: 2, maximumFractionDigits: 2};
	var formatter = new Intl.NumberFormat(locale, options);
	document.getElementById("cantidadTotal"+id).value = formatter.format(valores);
}
	
}

function perdidaFocus(id)
{
	var valor = document.getElementById("cantidadTotal"+id).value *  document.getElementById("cantidad"+id).value;
	var locale = 'de';
	var options = {style: 'currency', currency: 'usd', minimumFractionDigits: 2, maximumFractionDigits: 2};
	var formatter = new Intl.NumberFormat(locale, options);
	document.getElementById("cantidadTotal"+id).value = formatter.format(valor);
}

function borrarCarrito(id)
{
	document.getElementById("borrar"+id).submit();
}


function comprar()
{
	document.location.href = "/Eshopper/Vistas/Principales/compra.php","principal";
}
