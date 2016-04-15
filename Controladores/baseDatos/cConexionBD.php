<?php

class ConexionPostgres{

	private $url;
	private $conexion;
	private $consulta;
	private $resultado;
	
	function ConexionPostgres(){
		$this->url = "host='localhost' port='5432' dbname='Disenarte' user='postgres' password='root'";
	}
	
	public function conectar(){ 
			$this->conexion = pg_connect($this->url) or die("Falla de conexion: " + pg_last_error());
			//echo "Conexion Exitosa";
	}
	  
	public function desconectar(){
		//pg_free_result($this->consulta);
		pg_close($this->conexion);
	}
	
	public function set_Consulta($query) {
		//aquí se realizan las consultas a la base de datos
		$this->consulta = pg_query($this->conexion,$query) or die('La consulta fallo: ' + pg_last_error());
                return $this->consulta;
        }
             
        public function get_Consulta() {
            //aquí se obtienen los datos de la consulta
            $this->resultado = pg_fetch_array($this->consulta);
            return $this->resultado;
        }
}

?>