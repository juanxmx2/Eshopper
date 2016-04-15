<?php
    session_start();
    session_destroy();
    echo '<script type="text/javascript">'
    . 'top.location="../../Vistas/Front/front.php";'
    . '</script>';
    
?>