<?php

require_once("../../Modelos/Productos/mProducto.php");

$user = new Producto();


    $user->Crear_Producto(    $_POST['nombre'],
                               	$_POST['referencia'], 
                               	$_POST['precio'],
                               	$_POST['cantidad'],
                               	1,
                               	$_POST['imagen']
                                
            );



?>
