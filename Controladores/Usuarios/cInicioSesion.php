<?php
session_start();
require_once("../../Modelos/Usuarios/mUsuario.php");

$usuario = new Usuario();


$email = $_POST['usuario'];
$pass =  $_POST['pass'];

if(!$usuario->existe_Usuario($email)){
    echo '<script type="text/javascript">'
        . 'alert("Usuario no esta registrado en el sistema");'
        . '</script>';
   echo '<script type="text/javascript">'
        . 'document.location.href = "/Eshopper/Vistas/Principales/login.php","principal";'
        . '</script>';
}else if(!$usuario->usuario_Pass_Correctos($email, $pass)){
    echo '<script type="text/javascript">'
        . 'alert("Contrase\u00f1a Incorrecta");'
        . '</script>';
    echo '<script type="text/javascript">'
        . 'document.location.href = "/Eshopper/Vistas/Principales/login.php","principal";'
        . '</script>';
}else{
    $_SESSION['usuario'] = $email;
    echo '<script type="text/javascript">'
    . 'top.location="../../Vistas/Front/front.php";'
    . '</script>';
 //   header('Location:../../Vistas/Principales/principal.php');
}