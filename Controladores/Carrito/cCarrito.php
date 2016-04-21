<?php
session_start();
$usuario = $_SESSION['usuario'];
require_once("../../Modelos/Carrito/mCarrito.php");




$carrito = new Carrito();

   
    $carrito->Crear_Carrito(
                             $_POST['carrito'],
                            $usuario
                                
           );


 echo '<script type="text/javascript" src="../../Scripts/js/alerta.js"></script>'; 
 echo '<head>
 <link href="../../css/js.css" rel="stylesheet">
 </head>';
 echo '<body>';
 echo ' <script>
                alerts("Producto Cargado en Carrito", "Exito");
            
       
       </script>';

 echo '</body>' ;      
         
 echo '<script type="text/javascript">'
    . 'setTimeout(function(){top.location="../../Vistas/Front/front.php"}, 1500);'
    . '</script>';

?>
