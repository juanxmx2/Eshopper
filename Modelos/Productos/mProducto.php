<?php 
require_once("../../Controladores/baseDatos/cConexionBD.php");

class Producto
{

private $bd;

 function Producto(){
        $this->bd = new ConexionPostgres();
    }
    
    public function datos(){
        $datos = $this->bd->get_Consulta();
        return $datos;
    }

     function Crear_Producto($nombres, $referencia, $precio, $cantidad, $disponible, $imagen){

     

      
            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO producto(nombre,referencia,precio, cantidad, disponible, imagen)
                                            VALUES( 
                                                    '".$nombres."',
                                                    '".$referencia."',
                                                    '".$precio."',
                                                    '".$cantidad."',
                                                    '".$disponible."',
                                                    '".$imagen."');");
            $this->bd->desconectar();
             echo'  <script>
                alert("Creacion de producto Satisfactorio");
               top.location.href="/Eshopper/Vistas/Front/front.php";
        </script>';
        
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

  function cargar_productos(){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT nombre, referencia, precio, cantidad, imagen
                                            FROM producto
                                            WHERE disponible = 1;");
        $this->bd->desconectar();
        return $consulta;
    }


    }

?>