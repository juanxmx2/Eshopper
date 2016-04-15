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
					<div class="login-form"><!--login form-->
						<h2>Datos Personales</h2>
						<form id="vinculacion" method="POST" action="/Eshopper/Controladores/Usuarios/cVinculacionDatos.php">
							<input name="identificacion" id = "identificacion" type="number" placeholder="Numero de identificacion" />
							<input name="telefono"  id = "telefono" type="tel" placeholder="Telefono" />
							<input name="direccion" id = "direccion" type="email" placeholder="Dirección" />
							<input name="ciudad"  id = "ciudad" type="text" placeholder="Ciudad" />
							<button type="button" class="btn btn-default" onclick="vincular()">Vincular Datos</button>
						</form>
					</div><!--/cuenta form-->
				</div>
							
		
		</div>
	</section><!--/form-->
	

</body>
</html>