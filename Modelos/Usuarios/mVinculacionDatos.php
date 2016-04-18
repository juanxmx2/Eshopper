<?php 
require_once("../../Controladores/baseDatos/cConexionBD.php");

class Vinculacion
{

private $bd;

 function Vinculacion(){
        $this->bd = new ConexionPostgres();
    }
    
    public function datos(){
        $datos = $this->bd->get_Consulta();
        return $datos;
    }

     function vincular_datos($identificacion, $telefono, $direccion, $ciudad,$email){

      if($this->existe_Usuario($email)){
            $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE datos_usuarios SET  identificacion = '".$identificacion."',
                                                                telefono = '".$telefono."',
                                                                direccion = '".$direccion."',
                                                                 ciudad = '".$ciudad."' 
                                        WHERE email = '".$email."'");
            $this->bd->desconectar();
            echo'  <script>
               <script type="text/javascript" src="../../Scripts/js/alerta.js"></script>"
                alerts("¡Actualizacion de Datos Exitosa!", "Vinculacion Exitosa");
                top.location.href="/Eshopper/Vistas/Front/front.php";
        </script>';
        }else{
            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO datos_usuarios(identificacion,telefono, direccion, ciudad,email)
                                            VALUES( 
                                                    '".$identificacion."',
                                                    '".$telefono."',
                                                    '".$direccion."',
                                                    '".$ciudad."',
                                                    '".$email."');");
            $this->bd->desconectar();
             echo'  <script>
                 <script type="text/javascript" src="../../Scripts/js/alerta.js"></script>"
                alerts("¡Datos Vinculados Exitosamente!", "Vinculacion Exitosa");
                top.location.href="/Eshopper/Vistas/Front/front.php";
        </script>';
        }


    }

     function existe_Usuario($email){
        $existe = false;
        $this->bd->conectar();
        $this->bd->set_Consulta("SELECT email
                                    FROM datos_usuarios
                                    WHERE email = '".$email."'");
        if($tupla = $this->bd->get_Consulta()){
            $existe = true;
        }
        $this->bd->desconectar();
        return $existe;
    }


}


?>