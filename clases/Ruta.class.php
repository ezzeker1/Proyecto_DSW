<?php
require_once("AccesoBD.class.php");

class Ruta{
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

	public function Programacion($origen, $destino){
		try{
			$sql = "select * from ruta, vehiculo 
					where ruta.id_vehiculo = vehiculo.id_vehiculo 
						and origen=$origen and destino=$destino";
			$lista = AccesoBD::Consultar($sql, $this->cn);
			return $lista;
		}catch(Exception $e){
			throw $e;
		}
	}
	
	public function VehiculoDisponible($id_ruta){
		try{
			$sql = "select * from ruta, vehiculo 
					where ruta.id_vehiculo = vehiculo.id_vehiculo 						
						and id_ruta = $id_ruta";
			$lista = AccesoBD::Consultar($sql, $this->cn);
			$ruta = $lista[0];
			$nasientos = $ruta["nasientos"];
			$filas = $nasientos / 4;
			$n=1;
			for($i=0;$i<$filas;$i++){
				for($k=0;$k<4;$k++){
					$sql = "select * from reserva 
							where id_ruta=$id_ruta and asiento = $n";
					$ocupado = AccesoBD::Consultar($sql, $this->cn);
					if(!$ocupado){
						$croquis[$i][$k] = $n;
					}else{
						$croquis[$i][$k] = "";
					}
					$n++;
				}
			}
			return $croquis;
		}catch(Exception $e){
			throw $e;
		}
	}

}
?>    