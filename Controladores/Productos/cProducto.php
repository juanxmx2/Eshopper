<?php

require_once("../../Modelos/Productos/mProducto.php");

$producto = new Producto();

	
	$id_categoria = $producto->cargar_id($_POST['categoria']);

    $producto->Crear_Producto(    strtoupper($_POST['nombre']),
                               	$_POST['referencia'], 
                               	$_POST['precio'],
                               	$_POST['cantidad'],
                               	1,
                               	$_POST['imagen'],
                               	$id_categoria
                                
            );



?>
