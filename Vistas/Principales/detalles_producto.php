<!DOCTYPE html>
<?php 
	require_once("../../Modelos/Productos/mProducto.php");
	require_once("../../Modelos/Categorias/mCategoria.php");

	$producto = new Producto();
	$categoria = new Categoria();

 ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="refresh" content="600" url="../Front/front.php"> 
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
    <link rel="shortcut icon" href="../../images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../images/ico/apple-touch-icon-57-precomposed.png">


    <script src="../../js/jquery-2.1.0.min.js" type="text/javascript"> </script>	
    <script src="../../Scripts/Carrito/Carrito.js"> </script>					
</head><!--/head-->

<body>
		<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->

						<?php 
						
							if($consulta = $producto->cargar_productos_detalle($_POST['detalle'])){
                                                                		
                                   	$tupla = $producto->datos();
                                    $imagen = pg_unescape_bytea($tupla[4]);

                                 	echo '
						<div class="col-sm-5">
							<div class="view-product">
								<img src="'.$imagen.'" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="../../images/product-details/new2.jpg" class="newarrival" alt="" />
								<h2>'.$tupla[0].'</h2>
								<p>Referencia: '.$tupla[1].'</p>
								<span>
									<span>$ '.number_format($tupla[2], 2, ",", ".").'</span>
									<label>Cantidad:</label>
									'.$tupla[3].'
									<form name="formulario" id="'.$_POST['detalle'].'" method="POST" action="../../Controladores/Carrito/cCarrito.php">
												<input name="carrito" id = "carrito" type="hidden" value="'.$_POST['detalle'].'"/>
												</form>
									<button type="button" class="btn btn-fefault cart" onclick="cargar_carrito('.$_POST['detalle'].', '.$tupla[3].')">
										<i class="fa fa-shopping-cart"></i>
										Añadir Al Carrito
									</button>
								</span>
								<p><b>Disponible:</b> ';
								if($tupla[3]>0)
								{
									echo 'En Stock';
								}else
								{
									echo 'Agotado';
								}
								echo '</p>
								<p><b>Marca:</b> T-Shirt</p>
							</div><!--/product-information-->
						</div>';

					
				}
						 ?>

					</div><!--/product-details-->
				</div>
				</div>
				</div>
</body>
</html>