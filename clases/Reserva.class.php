<?php
require_once("AccesoBD.class.php");

class Reserva{
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

	public function Reservar($data){
    	try{
			$asiento	= $data["asiento"];
			$id_ruta	= $data["id_ruta"];
			$apellidos	= $data["apellidos"];
			$nombres	= $data["nombres"];
			$dni		= $data["dni"];
        	$sql = "insert into reserva (apellidos, nombres, dni, asiento, id_ruta)
				 values('$apellidos', '$nombres', '$dni', '$asiento', '$id_ruta')";
            $id = AccesoBD::Insertar($sql, $this->cn);
            return $id;
		}catch(Exception $e){
			throw $e;
		}
    }

}
?>