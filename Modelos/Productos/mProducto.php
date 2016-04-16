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

     function Crear_Producto($nombres, $referencia, $precio, $cantidad, $disponible, $imagen, $id){

     

      
            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO producto(nombre,referencia,precio, cantidad, disponible, imagen, id_categoria)
                                            VALUES( 
                                                    '".$nombres."',
                                                    '".$referencia."',
                                                    '".$precio."',
                                                    '".$cantidad."',
                                                    '".$disponible."',
                                                    '".$imagen."',
                                                    '".$id."');");
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
        $consulta = $this->bd->set_Consulta("SELECT nombre, referencia, precio, cantidad, imagen, id_categoria,cantidad
                                            FROM producto
                                            WHERE disponible = 1
                                            ORDER BY id_categoria ASC;");
        $this->bd->desconectar();
        return $consulta;
    }

      function cargar_categoria(){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT nombre_categoria
                                            FROM categorias");
        $this->bd->desconectar();
        return $consulta;
    }


    function cargar_id(){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT p.id_categoria, c.nombre_categoria, COUNT(*) as cantidad
                                            FROM producto p
                                            INNER JOIN categorias c on c.id_categoria = p.id_categoria
                                            GROUP BY p.id_categoria, c.nombre_categoria");
        $this->bd->desconectar();
        return $consulta;
    }

     function cargar_categoria_con_id($id){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT p.nombre, p.referencia, p.precio, p.cantidad, p.imagen,c.nombre_categoria,c.id_categoria
                                            FROM categorias c
                                            INNER JOIN producto p on p.id_categoria = c.id_categoria
                                            WHERE c.id_categoria = '".$id."'
                                            ORDER BY c.id_categoria ASC");
        $this->bd->desconectar();
        return $consulta;
    }

     function cantidades(){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT  COUNT(*)
                                                            FROM producto
                                                            WHERE disponible = 1;");
        $this->bd->desconectar();
        return $consulta;
    }


    }

?>