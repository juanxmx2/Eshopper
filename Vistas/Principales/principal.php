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


  <!--  <script type="text/javascript">
			$(document).ready(function() {
				$("#login").click(function(event) {
					$("#cuerpo").load('login.html');
				});
			});

			$(document).ready(function() {
				$("#carrito").click(function(event) {
					$("#cuerpo").load('cart.html');
				});
			});

			$(document).ready(function() {
				$("#rev").click(function(event) {
					$("#cuerpo").load('checkout.html');
				});
			});

			$(document).ready(function() {
				$("#productos").click(function(event) {
					$("#cuerpo").load('Shop.html');
				});
			});
		</script>-->
</head><!--/head-->

	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>D</span>iseñarte</h1>
									<h2>Te trae los mejores Productos a tu medida</h2>
									<p>¡Compra ropa segun tu gusto, diseña tus propias camisas, busos, cami-busos  nosotros 
										te lo creamos!</p>
									<button type="button" class="btn btn-default get">¡Obtenlo Ahora!</button>
								</div>
								<div class="col-sm-6">
									<img src="../../images/home/diseño.png" class="girl img-responsive" alt="" />
								<!--	<img src="../../images/home/pricing.png"  class="pricing" alt="" /> -->
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>D</span>iseñarte</h1>
									<h2>100% algodon</h2>
									<p>texto ejemplo</p>
									<button type="button" class="btn btn-default get">¡Obtenlo Ahora!</button>
								</div>
								<div class="col-sm-6">
									<img src="../../images/home/diseño.png" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>D</span>iseñarte</h1>
									<h2>entrega gratis</h2>
									<p>texto ejemplo</p>
									<button type="button" class="btn btn-default get">¡Obtenlo Ahora!</button>
								</div>
								<div class="col-sm-6">
									<img src="../../images/home/buso3.jpg" class="girl img-responsive" alt="" />
									<img src="../../images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Articulos</h2>

						<?php 

							if($consulta = $producto->cargar_productos()){
                                 $cantidad = pg_num_rows($consulta);
                                		


                                    for($i=0;$i<$cantidad;$i++){
                                    	$tupla = $producto->datos();
                                    	$imagen = pg_unescape_bytea($tupla[4]);
                                    	
                                        echo "<div class='col-sm-4'>
										<div class='product-image-wrapper'>
										<div class='single-products'>
										<div class='productinfo text-center'>
											<img src='".$imagen."' alt='' />
											<h2>$".number_format($tupla[2], 2, ",", ".")."</h2>
											<p><b>".$tupla[0]."</b></p>
											<p><b>Ref. </b>".$tupla[1]."</p>
											<p><b>Stock</b> ".$tupla[3]."</p>
											<form name='formulario' id='".$tupla[7]."' method='POST' action='../../Controladores/Carrito/cCarrito.php'>
											<input name='carrito' id = 'carrito' type='hidden' value='".$tupla[7]."'/>
											</form>
											<a href='' class='btn btn-default add-to-cart' onclick='cargar_carrito(".$tupla[7].")'><i class='fa fa-shopping-cart'></i>Añadir al Carrito</a>

										</div>
										<div class='product-overlay'>
											<div class='overlay-content'>
												<form name='formulario' id='".$tupla[7]."' method='POST' action='../../Controladores/Carrito/cCarrito.php'>
												<input name='carrito' id = 'carrito' type='hidden' value='".$tupla[7]."'/>
												</form>
												<a href='#' class='btn btn-default add-to-cart' onclick='cargar_carrito(".$tupla[7].")'><i class='fa fa-shopping-cart'></i>Añadir al Carrito</a>

											</div>
											";if($tupla[6] == 0)
											{
												echo "<img src='../../images/shop/agotado.png' class='new' alt='' />";
											}
											echo "
										</div>
								</div>
								<div class='choose'>
									<ul class='nav nav-pills nav-justified'>
										<li><a href='#'><i class='fa fa-plus-square'></i>Añadir a Favoritos</a></li>
										<li><a href='#'><i class='fa fa-plus-square'></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>";

               
                                }

                                }else{

                                	echo "Error";
                                }
						 ?>
					
					</div>

							<div class='category-tab'>
								<div class='col-sm-12'>
								<ul class='nav nav-tabs'>
							<?php  

						if($consulta = $producto->cargar_id()){
                                 $cantidad = pg_num_rows($consulta);
                                 $contador = 0;
                                	
                                 while($contador != $cantidad){
                                 	$tupla = $producto->datos();
 								echo "
								<li ><a href='#".$tupla[0]."' data-toggle='tab'>".$tupla[1]."</a></li>
								";
								$contador++;
								}
							}
								?>
                                </ul>
								</div>
								<div class='tab-content'>
								<?php

								if($consulta = $producto->cargar_id()){
								
                                 $cantidad2 = pg_num_rows($consulta);

								for($i=0;$i<$cantidad2;$i++){
									
									$tupla = $producto->datos();
                                    	
								echo "
								<div class='tab-pane fade active in' id='".$tupla[0]."' >";
									$categoria->cargar_categoria_con_id($tupla[0]);

								for($j=0;$j<$tupla[2];$j++){
										
                                    	$tupla2 = $categoria->datos();
                                    	$imagen = pg_unescape_bytea($tupla2[4]);
									echo "
								<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img src='".$imagen."' alt='' />
											<h2>$".number_format($tupla2[2], 2, ",", ".")."</h2>
											<b>".$tupla2[0]."</b>
											<p><b>Ref. </b> ".$tupla2[1]."</p>
											<p><b>Stock </b>".$tupla2[3]."</p>
												<a href='#' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Añadir al Carrito</a>
											</div>
											
										</div>
									</div>
								</div>";
							
							}
							echo "</div>";
							
						}
					}

						?>
							</div>
						</div>
					</div><!--/category-tab-->
					
				
					
				</div>
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="../../images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al Carrito</a>
												</div>
												
											</div>
										</div>
									</div>
									
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
			</div>

		</div>
	</section> 

	   <script src="../../js/jquery.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/jquery.scrollUp.min.js"></script>
	<script src="../../js/price-range.js"></script>
    <script src="../../js/jquery.prettyPhoto.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>