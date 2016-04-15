<?php
session_start();
$usuario =  $_SESSION['usuario'];


require_once("../../Modelos/Usuarios/mVinculacionDatos.php");

$user = new Vinculacion();


    $user->vincular_datos(    	$_POST['identificacion'],
    							$_POST['telefono'],
    							$_POST['direccion'],
    							$_POST['ciudad'],
                               	$usuario
                                
            );



?>