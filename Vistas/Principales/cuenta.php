<?php
	session_start();
	require_once("../../Modelos/Usuarios/mUsuario.php");
	require_once("../../Modelos/Usuarios/mVinculacionDatos.php");
    $user = new Usuario();
    $dato = new Vinculacion();
    $_SESSION['usuario'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | Diseñarte</title>
      <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/prettyPhoto.css" rel="stylesheet">
    <link href="../../css/price-range.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
	<link href="../../css/main.css" rel="stylesheet">
	<link href="../../css/js.css" rel="stylesheet">
	<link href="../../css/responsive.css" rel="stylesheet">
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
    <script src="../../Scripts/Usuarios/Vincular.js"> </script>		
    
</head><!--/head-->
<body>
	<section id="form2"><!--form-->
				<div class="col-sm-4 col-sm-offset-1">
					

						<?php
							if($_SESSION['usuario']){
								if($dato->existe_Usuario($_SESSION['usuario'])){
									if($user->cargar_nombre_Usuario($_SESSION['usuario'])){
										if($tupla1 = $user->datos()){
											echo '<div class="login-form2"><!--login form-->
													<h2>Datos Personales</h2>
													<form id="vinculacion" method="POST" action="/Eshopper/Controladores/Usuarios/	cVinculacionDatos.php">
													<h2>Nombre:</h2><input type="text" id="Nombre" name="nombre" size="30" value="'.$tupla1[0].'"/>';
										}
									}
									if($dato->cargar_datos_Usuario($_SESSION['usuario'])){
										if($tupla2 = $dato->datos()){
											echo '<h2>Identificacion:</h2><input type="text" id="identificacion" name="identificacion" value="'.$tupla2[0].'" size="30"/>
												<h2>Telefono:</h2><input type="text" id="telefono" name="telefono" value="'.$tupla2[1].'"/>
												<h2>Direccion:</h2><input type="text" id="direccion" name="direccion" value="'.$tupla2[2].'" size="30"/>
												<h2>Ciudad:</h2><input type="text" id="ciudad" name="ciudad" value='.$tupla2[3].' size="30"/>
												<h2>Datos de lacuenta</h2><h2>Email:<h2><input type="email" id="email" name="email" value="'.$tupla2[4].'" size="30"/>
												<h2>Contraseña:</h2><input type="password" id="password" name="password" size="30"/>
												<h2>Confirmar constraseña:</h2><input type="password" id="password2" name="password2"  size="30"/>
												<button type="button" class="btn btn-default" onclick="vincular()">Vincular Datos</button>
												</form>';
										}
									}
				                }
			                    else{
			                    	echo '<div class="login-form"><!--login form-->
											<h2>Datos Personales</h2>
			                    			<form id="vinculacion" method="POST" action="/Eshopper/Controladores/Usuarios/	cVinculacionDatos.php">
											<input name="identificacion" id = "identificacion" placeholder="Numero de identificacion"/>
											<input name="telefono"  id = "telefono" type="tel" placeholder="Telefono"/>
											<input name="direccion" id = "direccion" type="email" placeholder="Dirección"/>
											<input name="ciudad"  id = "ciudad" type="text" placeholder="Ciudad" />
											<button type="button" class="btn btn-default" onclick="vincular()">Vincular Datos</button>
											</form>';
			                    }
			                    
			                }

						?>
					</div><!--/cuenta form-->
				</div>
							
		
		</div>
	</section><!--/form-->
</body>
</html>