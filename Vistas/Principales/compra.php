<html lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Inicio | Diseñarte</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/prettyPhoto.css" rel="stylesheet">
    <link href="../../css/price-range.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
	<link href="../../css/main.css" rel="stylesheet">
	<link href="../../css/responsive.css" rel="stylesheet">
	<link href="../../css/js.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="../../images/icon/disenarte.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../images/ico/apple-touch-icon-57-precomposed.png">

    <script src="../../js/jquery-2.1.0.min.js" type="text/javascript"> </script>
    <script src="../../Scripts/Usuarios/CerrarSesion.js"> </script>	
</head><!--/head-->

<body>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Inicio</a></li>
				  <li class="active">Historia</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Paso 1</h2>
			</div>
			<div class="checkout-options">
				<h3>Nuevo Usuario</h3>
				<p>Opciones de Compra</p>
				<ul class="nav">
					<li>
						<label><input type="checkbox"> Cuenta Registrada</label>
					</li>
					<li>
						<label><input type="checkbox"> Compra como Invitado</label>
					</li>
					<li>
						<a href=""><i class="fa fa-times"></i>Cancelar</a>
					</li>
				</ul>
			</div><!--/checkout-options-->

			<div class="register-req">
				<p>Por favor, usar Registro para obtener fácilmente el acceso a su historial de pedidos , o utilizar Pedido como Invitado</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Informacion de Compra</p>
							<form>
								<input type="text" placeholder="Nombre para Mostrar">
								<input type="text" placeholder="Nombre de Usuario">
								<input type="password" placeholder="Contraseña">
								<input type="password" placeholder="Confirmar Contraseña">
							</form>
							<a class="btn btn-primary" href="">Obtener Cuotas</a>
							<a class="btn btn-primary" href="">Continuar</a>
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Pagar a</p>
							<div class="form-one">
								<form>
									<input type="text" placeholder="Nombre de Compañia">
									<input type="text" placeholder="Email*">
									<input type="text" placeholder="Titulo">
									<input type="text" placeholder="Primer Nombre *">
									<input type="text" placeholder="Segundo Nombre">
									<input type="text" placeholder="Apellidos *">
									<input type="text" placeholder="Direccion 1 *">
									<input type="text" placeholder="Direccion 2">
								</form>
							</div>
							<div class="form-two">
								<form>
									<input type="text" placeholder="Zip / Codigo Postal *">
									<select>
										<option>-- Pais --</option>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>
									<select>
										<option>-- Estado / Provincia / Region --</option>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>
									<input type="password" placeholder="Confirmar Contraseña">
									<input type="text" placeholder="Telefono *">
									<input type="text" placeholder="Telefono Celular">
									<input type="text" placeholder="Fax">
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Orden de Envio</p>
							<textarea name="message"  placeholder="Notas Acerca de Su envio" rows="16"></textarea>
							<label><input type="checkbox"> Enviar Factura a la Dirección</label>
						</div>	
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Revisión y Pago</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Articulo</td>
							<td class="description"></td>
							<td class="price">Precio</td>
							<td class="quantity">Cantidad</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>SubTotal Carrito</td>
										<td>$59</td>
									</tr>
									<tr class="shipping-cost">
										<td>Costo de Envio</td>
										<td>Gratis</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>$61</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Transferencia Directa a Banco</label>
					</span>
					<span>
						<label><input type="checkbox"> Comprobar Pago</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->

	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>