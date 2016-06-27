<?php
class AccesoBD{

	// Metodos
	public static function Conectar(){
		try{
			$cn = mysqli_connect("localhost", "root", "", "dbproyecto");
			if ( mysqli_connect_errno() ){
				throw new Exception(mysqli_connect_error());
			}
			return $cn;
		}catch(Exception $e){
			$mensaje = "Fecha: ".date("Y-m-d H:i:s")."\n";
			$mensaje .= "Mensaje: ".$e->getMessage()."\n";
			$mensaje .= "Archivo: ".$e->getFile()."\n";
			$mensaje .= "Linea: ".$e->getLine()."\n\n";
			error_log($mensaje,3,"error.log");
			throw $e;
		}
	}
    

public static function Consultar($sql, $cn){
	try{ 
    $cn->query("SET NAMES 'utf8'"); 
    $rs = mysqli_query($cn, $sql); 
    if( mysqli_error($cn)){ 
    	throw new Exception("Error en la consulta"); 
    }
    $lista=array(); 
    mysqli_data_seek ($rs, 0); 
    while($arreglo = mysqli_fetch_array($rs) ){ 
    	$lista[] = $arreglo; 
    }
    mysqli_free_result($rs); 
    return $lista; 
		}catch(Exception $e){
			$mensaje = "Fecha: ".date("Y-m-d H:i:s")."\n";
			$mensaje .= "Mensaje: ".$e->getMessage()."\n";
			$mensaje .= "Archivo: ".$e->getFile()."\n";
			$mensaje .= "Linea: ".$e->getLine()."\n\n";
			error_log($mensaje,3,"error.log");
			throw $e;
		}
	}

	public static function Insertar($sql, $cn){
		try{
			mysqli_query($cn, $sql);
			if( mysqli_error($cn)){
				throw new Exception("Error en la insercion");
			}
			$id = mysqli_insert_id($cn);
			return $id;
		}catch(Exception $e){
			$mensaje = "Fecha: ".date("Y-m-d H:i:s")."\n";
			$mensaje .= "Mensaje: ".$e->getMessage()."\n";
			$mensaje .= "Archivo: ".$e->getFile()."\n";
			$mensaje .= "Linea: ".$e->getLine()."\n\n";
			error_log($mensaje,3,"error.log");
			throw $e;
		}
	}

	public static function OtroSQL($sql,$cn){
		try{
			mysqli_query($cn, $sql);
			if( mysqli_error($cn)){
				throw new Exception("Error en el comando SQL");
			}
		}catch(Exception $e){
			$mensaje = "Fecha: ".date("Y-m-d H:i:s")."\n";
			$mensaje .= "Mensaje: ".$e->getMessage()."\n";
			$mensaje .= "Archivo: ".$e->getFile()."\n";
			$mensaje .= "Linea: ".$e->getLine()."\n\n";
			error_log($mensaje,3,"error.log");
			throw $e;
		}
	}
}
?>