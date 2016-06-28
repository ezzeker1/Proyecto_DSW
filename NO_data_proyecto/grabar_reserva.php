<?php
$data['asiento']	= $_POST["asiento"];
$data['id_ruta']	= $_POST["id_ruta"];
$data['apellidos']	= $_POST["apellidos"];
$data['nombres']	= $_POST["nombres"];
$data['dni']		= $_POST["dni"];

require_once "clases/Reserva.class.php";
$obj = new Reserva();
$id = $obj->Reservar($data);
header("location:index.htm");
?>