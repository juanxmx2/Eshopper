<?php 
  require_once("../../Modelos/Productos/mProducto.php");
    require_once("../../Modelos/Categorias/mCategoria.php");
    
    $categoria = new Categoria();
    $producto = new Producto();

 ?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details | E-Shopper</title>
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
</head><!--/head-->

<body>

  
<div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <!--<img src="../../images/product-details/1.jpg" alt="" /> -->
                              <?php 
                           /*   $nombreArchivo = "";
                              if (isset($_POST['submit'])) {  
                              if(is_uploaded_file($_FILES['fichero']['tmp_name'])) { // verifica haya sido cargado el archivo 
                             
                              $nombreArchivo = $_FILES["fichero"]["name"];
                              echo "<img src='../../images/product-details/".$nombreArchivo."' width='250px' height='250px'/>";
                              echo "<h3>Nuevo</h3>";

                          
                               } 
                               else
                               {
                                echo "Por favor seleccione un archivo";
                               }
                               } 
                            */  
                              if (isset($_POST['crear'])) {
                              $directorio = '../../images/product-details/';
                              $archivo = $directorio . basename($_FILES['fichero']['name']);  // se coloca en su lugar final
                              move_uploaded_file($_FILES['fichero']['tmp_name'], $archivo); 
                              
                              $image = pg_escape_bytea($archivo);
                              
                              $categoria->cargar_id($_POST['categoria']);

                              $tupla = $categoria->datos();
                              $id_categoria = $tupla[0];                       

                              $producto->Crear_Producto(  strtoupper($_POST['nombre']),
                                                          $_POST['referencia'], 
                                                          $_POST['precio'],
                                                          $_POST['cantidad'],
                                                          1,
                                                          $image,
                                                          $id_categoria);
                              }

                              ?>
                            </div>
                           
                            <!-- Wrapper for slides 
                            <div id="similar-product" class="carousel slide" data-ride="carousel">
                                                                  
                                        <div class="carousel-inner">
                                        <div class="item active">
                                          <a href=""><img src="../../images/product-details/similar1.jpg" alt=""></a>
                                          <a href=""><img src="../../images/product-details/similar2.jpg" alt=""></a>
                                          <a href=""><img src="../../images/product-details/similar3.jpg" alt=""></a>
                                        </div>
                                        <div class="item">
                                          <a href=""><img src="../../images/product-details/similar1.jpg" alt=""></a>
                                          <a href=""><img src="../../images/product-details/similar2.jpg" alt=""></a>
                                          <a href=""><img src="../../images/product-details/similar3.jpg" alt=""></a>
                                        </div>
                                        <div class="item">
                                          <a href=""><img src="../../images/product-details/similar1.jpg" alt=""></a>
                                          <a href=""><img src="../../images/product-details/similar2.jpg" alt=""></a>
                                          <a href=""><img src="../../images/product-details/similar3.jpg" alt=""></a>
                                        </div>
                                        
                                    </div>
                                
                                  <!-- Controls 

                                  <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                  </a>
                                  <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                  </a>
                            </div>
                          -->
                        </div>
                        <section id="form2"><!--form-->
                                <div class="col-sm-7 col-sm-offset-1">
                                     <div class="login-form"><!--login form-->
                                <form id ="producto" "<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
                                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
                               
                              
                                <input id="archivo" name="fichero" type="file" /> 
                                <input name="nombre" id="nombre" type="text" placeholder="Nombre Producto" />
                                <input name="referencia" id="referencia" type="text" placeholder="Referencia" />
                                <input name="precio" id = "precio" type="number" placeholder="Precio" />
                                <input name="cantidad" id = "cantidad" type="number" placeholder="Cantidad" />
                                 <select id="categoria" name="categoria" placeholder ="Categoria" >
                                <option></option>
                                <?php
                                $producto->cargar_categoria();

                                while($tupla = $producto->datos()){
                                    echo '<option>'.$tupla[0].'</option>';
                                   
                                }
                                ?>
                              </select>
                                    <button name="crear" type="sumbit" class="btn btn-fefault cart">
                                        <i class="fa fa-arrow-circle-o-up"></i>
                                        Crear Producto
                                    </button>
                            </form>
                            </from>
                            </div><!--/product-information-->
                        
                        </div>
                    </section>
                    </div><!--/product-details-->

</body>

</html>