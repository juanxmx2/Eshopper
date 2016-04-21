<?php
session_start();
$usuario =  $_SESSION['usuario'];


require_once("../../Modelos/Usuarios/mVinculacionDatos.php");
$user = new Vinculacion();


    $user->actualizar_datos(    strtoupper($_POST['nombre']),
    							strtoupper($_POST['identificacion']),
    							strtoupper($_POST['telefono']),
    							strtoupper($_POST['direccion']),
    							strtoupper($_POST['ciudad']),
    							strtoupper($_POST['password1']),
                               	$usuario
                                
            );
              
?>