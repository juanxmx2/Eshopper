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
    <script src="../../Scripts/Usuarios/Registro.js"> </script>
    <script src="../../Scripts/Usuarios/Loguearse.js"> </script>		
    


	 
</head><!--/head-->
<body>
	<section id="form2"><!--form-->
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Ingresa a tu Cuenta</h2>
						<form id="logueo" method="POST" action="/Eshopper/Controladores/Usuarios/cInicioSesion.php">
							<input name="usuario" id = "usuario" type="email" placeholder="E-mail" />
							<input name="pass"  id = "pass"type="password" placeholder="Contraseña" />
							<span>
								<input type="checkbox" class="checkbox"> 
								¿Recordarme?
							</span>
							<button type="button" class="btn btn-default" onclick="loguearse()">Ingresar</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Ó</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>!Registrate!</h2>
						<form id ="ingresoUsuario" method="POST" action="/Eshopper/Controladores/Usuarios/cUsuarios.php">
							<input name ="nombres" id ="nombres" type="text" placeholder="Nombre"/>
							<input name ="email" id ="email" type="email" placeholder="E-mail"/>
							<input name ="contrasena" id ="contrasena" type="password" placeholder="Contraseña"/>
							<button id="boton" type="button" class="btn btn-default" onclick="ingreso()">Registrarse</button>
						</form>
					</div><!--/sign up form-->
			
		
		</div>
	</section><!--/form-->
	

</body>
</html>