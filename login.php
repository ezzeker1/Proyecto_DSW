<?php
include "Operacion_login.class.php";
$obj = new Operacion_login();
$n1 = $_POST["user"];
$n2 = $_POST["pass"];
$obj->conectar();
$obj->asignar($n1, $n2);

$obj->validar($n1,$n2);
echo $obj-> mostrar();
?>