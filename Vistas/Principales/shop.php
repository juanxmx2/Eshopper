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
    <title>Shop | E-Shopper</title>
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
</head><!--/head-->

<body>
	
	<section id="advertisement">
		<div class="container">
			<img src="../../images/shop/partner.jpg" alt="" />
		</div>
	</section>
	
		
	<section>
		
		<div class="container">

			<div class="col-x-2">
			<iframe width="20%" height="100%" frameborder="0" align="left" id="derecho" name="derecho" src="../Principales/frame_derecho.php"></iframe>
	
			<div class="row">				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">ARTICULOS</h2>
						<?php 

							if($consulta = $producto->cargar_productos()){
                                 $cantidad = pg_num_rows($consulta);
                                		


                                    for($i=0;$i<$cantidad;$i++){
                                    	$tupla = $producto->datos();
                                    	$imagen = pg_unescape_bytea($tupla[4]);

                                    	echo "
						<div class='col-sm-4'>
							<div class='product-image-wrapper'>
								<div class='single-products'>
									<div class='productinfo text-center'>
										<img src='".$imagen."' width='350' height='300' />
										<h2>$".number_format($tupla[2], 2, ",", ".")."</h2>
										<p>".$tupla[0]."</p>
										<form name='formulario' id='".$tupla[7]."' method='POST' action='../../Controladores/Carrito/cCarrito.php'>
												<input name='carrito' id = 'carrito' type='hidden' value='".$tupla[7]."'/>
												</form>
											<a href='#' class='btn btn-default add-to-cart' onclick='cargar_carrito(".$tupla[7].")'><i class='fa fa-shopping-cart'></i>Añadir al Carrito</a>
									</div>
									<div class='product-overlay'>
										<div class='overlay-content'>
											<h2>$".number_format($tupla[2], 2, ",", ".")."</h2>
											<p>".$tupla[0]."</p>
											<form name='formulario' id='".$tupla[7]."' method='POST' action='../../Controladores/Carrito/cCarrito.php'>
												<input name='carrito' id = 'carrito' type='hidden' value='".$tupla[7]."'/>
												</form>
											<a href='#' class='btn btn-default add-to-cart' onclick='cargar_carrito(".$tupla[7].")'><i class='fa fa-shopping-cart'></i>Añadir al Carrito</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						";
					}
				}
						?>
						
					</div><!--features_items-->
					<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
				</div>

			</div>
		</div>
		</div>
	</section>
  
    <script src="../../js/jquery.js"></script>
	<script src="../../js/price-range.js"></script>
    <script src="../../js/jquery.scrollUp.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery.prettyPhoto.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>