<?php 
require_once("../../Controladores/baseDatos/cConexionBD.php");

class Carrito
{

private $bd;

 function Carrito(){
        $this->bd = new ConexionPostgres();
    }
    
    public function datos(){
        $datos = $this->bd->get_Consulta();
        return $datos;
    }

     function Crear_Carrito($id_producto,$email){

     

      
            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO carrito(id_producto,email)
                                            VALUES( 
                                                    '".$id_producto."',
                                                    '".$email."');");
            $this->bd->desconectar();
            
        
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


  function cargar_carrito($email){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT p.id, p.nombre, p.precio, p.cantidad, p.imagen,p.referencia,c.email
                                                FROM carrito c INNER JOIN producto p on c.id_producto = p.id
                                                WHERE c.email = '".$email."';");
        $this->bd->desconectar();
        return $consulta;
    }



    }

?>