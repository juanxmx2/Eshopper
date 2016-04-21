<?php
	session_start();
    require_once("../../Modelos/Usuarios/mUsuario.php");
    require_once("../../Modelos/Carrito/mCarrito.php");
    $user = new Usuario();
    $carrito = new Carrito();
    $_SESSION['usuario'];
?>
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

<body >
	<header id="header"><!--header-->
				
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="front.php"><img src="../../images/home/logoD.png" alt ="Error 404"  width="100%" height="25%"/></a>
						</div>
						<div class="btn-group pull-right">
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									Moneda
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Dolar USD</a></li>
									<li><a href="#">Pesos $</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li ><a><i></i>
								 <?php
                                              if($user->cargar_nombre_Usuario($_SESSION['usuario'])){
                                                  if($tupla = $user->datos()){
                                                      echo 'Bienvenido - '.$tupla[0];
                                                  }
                                              }
                                          ?>
								</a></li>
                                    
			                               <?php 
			                                   if($_SESSION['usuario']){
								echo '<li ><a href="../Principales/cuenta.php" target="principal"><i class="fa fa-user"></i> Cuenta</a></li>';
								if($user->cargar_privilegio_Usuario($_SESSION['usuario'])){
			                                                  if($tupla = $user->datos()){
			                                                      if($tupla[0] == 1)
			                                                      {
			                                                      	echo '<li ><a href="../Principales/cargarImagenes.php" target="principal"><i class="fa fa-bookmark-o"></i> Administrar</a></li>';
			                                                      }
			                                                  }
			                                        }			
			
			                                    	echo '<li ><a href="#" onclick="Cerrar()"><i class="fa fa-lock"></i> Salir</a></li>';	
							   }
							    else{
								echo '<li id="login"><a href="../Principales/login.php" target="principal"><i class="fa fa-unlock"></i> Login</a></li>';
							    }						
							?>
							<?php
							   	$usuario = $_SESSION['usuario'];
							   	$cantidad=0;
							   	if($consulta = $carrito->cargar_carrito($usuario)){
							   		$cantidad = pg_num_rows($consulta);
							   	}
								echo '<li id="carrito"><a href="../Principales/cart.php" target="principal"><i class="fa fa-shopping-cart"></i>Carrito('.$cantidad.')</a></li>';

							?>		
							</ul>
						</div>
					</div>
					<form id="cerrar" action = "../../Controladores/Usuarios/cCerrarSesion.php">
					</form>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="front.php" class="active">Inicio</a></li>
								<li class="dropdown"><a href="#">Comprar<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li id="productos"><a href="../Principales/shop.php" target="principal">Productos</a></li>	
                                    </ul>
                                </li> 
							 <!-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Buscar"/>
						</div>
					</div>
				</div>
			</div>
			<div class="row2"></div><!--/header-bottom-->
		</div>
		
	</header><!--/header-->

	
	<div class="col-xs-12">
                <div class="col-x-2">
                      	
                    <iframe width="100%" height="100%" frameborder="0" align="top" id="principal" name="principal" src="../Principales/principal.php"></iframe>
                </div>
    </div>

    <footer id="footer">
    <div class="header-top"><!--header_top-->
			<div class="container">
				<div class="row4">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +57 315 3525781</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@diseñarte.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
	</footer>
   

 <!--
    <footer id="footer">
		<div class="footer-top">
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer>	
-->
  
    <script src="../../js/jquery.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/jquery.scrollUp.min.js"></script>
    <script src="../../js/jquery.prettyPhoto.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>
