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

		public function ListarUsuarios(){
		try{
			$sql = "select * from usuario";
			$lista = AccesoBD::Consultar($sql, $this->cn);
			return $lista;
		}catch(Exception $e){
			throw $e;
		}
	}

}
?>    