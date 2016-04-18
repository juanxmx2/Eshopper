<?php
session_start();
$usuario = $_SESSION['usuario'];
require_once("../../Modelos/Carrito/mCarrito.php");

$carrito = new Carrito();

   
    $carrito->Borrar_Carrito(
                $_POST['id']
           );

   echo '<script type="text/javascript">'
        . 'document.location.href = "/Eshopper/Vistas/Principales/cart.php","principal";'
        . '</script>';
?>