<?php
class Operacion_login{

private $n1;
private $n2;
private $respuesta;
private $cn;

public function conectar(){
$this->cn = mysql_connect("localhost","root","");
mysql_select_db("dbproyecto");
}

public function asignar($a,$b){
	$this->n1 = $a;
    $this->n2 = $b;
}

public function validar($p_user,$p_pass){
	$sql = "select usu_pass from usuario where usu_login ='$p_user'";
	$rs = mysql_query($sql);
 $contador = 0;
	while($row = mysql_fetch_assoc($rs)){
   $contador++;
 if ($p_pass == $row['usu_pass']){
 	$this-> respuesta = "Procede....";
 }
 else  $this-> respuesta = "Contrasenia Incorrecta.";
	}
	if ($contador == 0){
$this-> respuesta = "Usuario no existe";
	}

}

public function mostrar(){
	return $this->respuesta;
}}
?>