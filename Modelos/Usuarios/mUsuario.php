<?php 
require_once("../../Controladores/baseDatos/cConexionBD.php");

class Usuario
{

private $bd;

 function Usuario(){
        $this->bd = new ConexionPostgres();
    }
    
    public function datos(){
        $datos = $this->bd->get_Consulta();
        return $datos;
    }

     function ingresar_Usuario($nombres, $email, $contrasena, $privilegio){

     

        if($this->existe_Usuario($email)){
            //echo '<script language="javascript">alert("El correo ya Existe");</script>'; 
          echo'  <script>
                alert("¡El Correo Ya existe!");
                document.location.href = "/Eshopper/Vistas/Principales/login.php","principal";
        </script>';
        }else{
            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO usuarios(email,nombres,contrasena, privilegio)
                                            VALUES( 
                                                    '".$email."',
                                                    '".$nombres."',
                                                    '".$contrasena."',
                                                    '".$privilegio."');");
            $this->bd->desconectar();
             echo'  <script>
                alert("¡Registro Satisfactorio!");
              document.location.href = "/Eshopper/Vistas/Principales/login.php","principal";
        </script>';
        }
        }


        function existe_Usuario($email){
        $existe = false;
        $this->bd->conectar();
        $this->bd->set_Consulta("SELECT email
                                    FROM usuarios
                                    WHERE email = '".$email."'");
        if($tupla = $this->bd->get_Consulta()){
            $existe = true;
        }
        $this->bd->desconectar();
        return $existe;
    }

     function usuario_Pass_Correctos($email,$pass){
        $correcto = false;
        $this->bd->conectar();
        $this->bd->set_Consulta("SELECT contrasena
                                    FROM usuarios
                                    WHERE email = '".$email."'");
        if($tupla = $this->bd->get_Consulta()){
            if($tupla[0] == $pass){
                $correcto = true;
            }
        }
        $this->bd->desconectar();
        return $correcto;
    }

  function cargar_nombre_Usuario($email){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT nombres
                                            FROM usuarios
                                            WHERE email = '".$email."';");
        $this->bd->desconectar();
        return $consulta;
    }

      function cargar_privilegio_Usuario($email){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT privilegio
                                            FROM usuarios
                                            WHERE email = '".$email."';");
        $this->bd->desconectar();
        return $consulta;
    }

    }

?>