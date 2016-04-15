<?php

require_once("../../Modelos/Usuarios/mUsuario.php");

$user = new Usuario();


    $user->ingresar_Usuario(    $_POST['nombres'],
                               	$_POST['email'], 
                                $_POST['contrasena'],
                                0 
            );



?>
