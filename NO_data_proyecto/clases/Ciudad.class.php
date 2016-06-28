<?php
require_once("AccesoBD.class.php");

class Ciudad{
	// Atributos
	private $cn;

	// Metodos
	public function __construct(){
		try{
			$this->cn = AccesoBD::Conectar();
		}catch(Exception $e){
			throw $e;
		}
	}

	public function ListaOrigen(){
    	try{
        	$sql = "select * from ciudad";
            $lista = AccesoBD::Consultar($sql, $this->cn);
            return $lista;
		}catch(Exception $e){
			throw $e;
		}
    }
    
    public function ListaDestino($origen){
    	try{
        	$sql = "select * from ciudad, ruta 
            		where ciudad.id_ciudad = ruta.destino 
                    	and ruta.origen = $origen
					group by ruta.destino ";
            $lista = AccesoBD::Consultar($sql, $this->cn);
            return $lista;
		}catch(Exception $e){
			throw $e;
		}
    }


}
?>