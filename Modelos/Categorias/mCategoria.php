<?php 
require_once("../../Controladores/baseDatos/cConexionBD.php");

class Categoria
{

private $bd;

 function Categoria(){
        $this->bd = new ConexionPostgres();
    }
    
    public function datos(){
        $datos = $this->bd->get_Consulta();
        return $datos;
    }

   
      function cargar_categoria(){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT nombre_categoria
                                            FROM categorias");
        $this->bd->desconectar();
        return $consulta;
    }


    function cargar_id($nombre){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT id_categoria
                                            FROM categorias
                                            WHERE nombre_categoria = '".$nombre."'");
        $this->bd->desconectar();
        return $consulta;
    }

     function cargar_categoria_con_id($id){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT p.nombre, p.referencia, p.precio, p.cantidad, p.imagen,c.nombre_categoria,c.id_categoria
                                            FROM categorias c
                                            INNER JOIN producto p on p.id_categoria = c.id_categoria
                                            WHERE c.id_categoria = '".$id."'");
        $this->bd->desconectar();
        return $consulta;
    }


    }

?>