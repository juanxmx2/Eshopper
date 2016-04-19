<?php 
	session_start();
	require_once("../../Modelos/Carrito/mCarrito.php");
	$carrito = new Carrito();
	$_SESSION['usuario'];
 ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
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
    <link rel="shortcut icon" href="../../images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../images/ico/apple-touch-icon-57-precomposed.png">

    <script src="../../Scripts/Carrito/Carrito.js"> </script>	

<body>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				   <li><a href="../Principales/principal.php">Inicio</a></li>
				  <li class="active">Carrito</li>
				  
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Items</td>
							<td class="description"></td>
							<td class="price">Precio</td>
							<td class="quantity">Cantidad</td>
							<td class="total">Total Compra</td>
							<td></td>
						</tr>
					</thead>
					<tbody>

						<?php 
						$usuario = $_SESSION['usuario'];
					if($consulta = $carrito->cargar_carrito($usuario)){
								
                                 $cantidad = pg_num_rows($consulta);

                                 for($i=0;$i< $cantidad; $i++){
                                 	$tupla = $carrito->datos();
                                    $imagen = pg_unescape_bytea($tupla[4]);

                                    

						echo "
						<tr>
							<td class='cart_product'>
								<a href=''><img src='".$imagen."' alt='Smiley face' height='150' width='150'></a>
							</td>
							<td class='cart_description'>
								<h4><a href=''>".$tupla[1]."</a></h4>
								<p>Referencia: ".$tupla[5]."</p>
							</td>
							<td class='cart_price'>
								<p>$".$tupla[2]."</p>
							</td>
							<td class='cart_quantity'>
								<div class='cart_quantity_button'>
									<a class='cart_quantity_up' href='#' id='".$tupla[0]."' onclick='aumentarCantidad(".$tupla[2].",this.id)'> + </a>
									<input class='cart_quantity_input' type='text' name='cantidad' id='cantidad".$tupla[0]."' value='1' autocomplete='off' size='2' min='0' onBlur='perdidaFocus(".$tupla[0].")'>
									<a class='cart_quantity_down' href='#' id='".$tupla[0]."' onclick='disminuirCantidad(".$tupla[2].", this.id)'> - </a>
								</div>
							</td>
							<td class='cart_total'>
								<input disabled class='cart_quantity_input' type='text' name='cantidadTotal' id='cantidadTotal".$tupla[0]."' value='".number_format($tupla[2], 2, ",", ".")." $'>
							</td>
							<td class='cart_delete'>
								<a class='cart_quantity_delete' id='".$tupla[7]."' onclick='borrarCarrito(this.id)'><i class='fa fa-times'></i></a>
								<form name='borrar' id='borrar".$tupla[7]."' method='POST' action='../../Controladores/Carrito/cBorrarCarrito.php'>
												<input name='id' id = 'id' type='hidden' value='".$tupla[7]."'/>
								</form>
							</td>
						</tr>";
					}

					}
 					?>
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Que te gustaría hacer después?</h3>
				<p>Elija si tiene un código de descuento o puntos de recompensa que desee utilizar o desea estimar su coste de entrega</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Usar Cupon</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Usar Cheque de Regalo</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimación de envío y los impuestos</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Pais:</label>
								<select>
									<option>Colombia</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / Estado:</label>
								<select>
									<option>Select</option>
									<option>Bogota</option>
									<option>Tuluá</option>
									<option>Cali</option>
									<option>Palmira</option>
									<option>Buga</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Codigo Postal:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Obtener Citas</a>
						<a class="btn btn-default check_out" href="">Continuar</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
						<?php 
							$usuario = $_SESSION['usuario'];
							$valorTotal=0;
							if($consulta = $carrito->cargar_carrito($usuario)){
								$cantidad = pg_num_rows($consulta);
								
                                 for($i=0;$i< $cantidad; $i++){
                                 	$tupla = $carrito->datos();
                                 	$valorTotal+=$tupla[2];
                                 }
                             }

                             echo " <li>Subtotal Carrito <span>$".number_format($valorTotal, 2, ",", ".")."</span></li>
									<li>Costo de Envio<span>Gratis</span></li>
									<li>Total <span>$".number_format($valorTotal, 2, ",", ".")."</span></li>";
							
							?>
						</ul>
							<a class="btn btn-default update" href="">Actualizar</a>
							<a class="btn btn-default check_out" href="">Revisar</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

  <script src="../../js/jquery.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/jquery.scrollUp.min.js"></script>
	<script src="../../js/price-range.js"></script>
    <script src="../../js/jquery.prettyPhoto.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>