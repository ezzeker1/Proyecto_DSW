<?php
require_once("AccesoBD.class.php");

class Usuario{
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

	public function BuscarID($id){
		try{
			$sql = "select * from usuario where usu_id = $id";
			$registro = AccesoBD::Consultar($sql, $this->cn);
			return $registro[0];
		}catch(Exception $e){
			throw $e;
		}
	}

	public function InsertarID($login,$login,$pass,$apelliop,$apellidom){
		try{
			$sql = "Insert into usuario values($login,$login,$pass,$apelliop,$apellidom)";
			$registro = AccesoBD::Insertar($sql, $this->cn);
			return $registro[0];
		}catch(Exception $e){
			throw $e;
		}
	}

	public function EliminarID($id){
		try{
			$sql = "delete from usuario where usu_id = $id)";
			$registro = AccesoBD::OtroSQL($sql, $this->cn);
			
		}catch(Exception $e){
			throw $e;
		}
	}

}
?>    