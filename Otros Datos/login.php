<?php
include "Operacion_login.class.php";
$obj = new Operacion_login();
$n1 = $_POST["user"];
$n2 = $_POST["pass"];
$res;
$obj->conectar();
$obj->asignar($n1, $n2);

$obj->validar($n1,$n2);
$res =$obj-> mostrar();
if ($res == 0){
header('Location: crear_usuario.htm');
}
else echo 'No es correcto';
?>