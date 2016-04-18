<?php
session_start();
$usuario = $_SESSION['usuario'];
require_once("../../Modelos/Carrito/mCarrito.php");

$carrito = new Carrito();

   
    $carrito->Crear_Carrito(
                             $_POST['carrito'],
                            $usuario
                                
           );

 echo '<script type="text/javascript">'
    . 'top.location="../../Vistas/Front/front.php";'
    . '</script>';

?>
