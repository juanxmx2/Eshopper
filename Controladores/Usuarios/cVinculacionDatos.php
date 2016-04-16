<?php
session_start();
$usuario =  $_SESSION['usuario'];


require_once("../../Modelos/Usuarios/mVinculacionDatos.php");

$user = new Vinculacion();


    $user->vincular_datos(    	strtoupper($_POST['identificacion']),
    							strtoupper($_POST['telefono']),
    							strtoupper($_POST['direccion']),
    							strtoupper($_POST['ciudad']),
                               	$usuario
                                
            );



?>