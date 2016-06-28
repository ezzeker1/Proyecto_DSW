<?php
$ruc = $_POST["ruc"];
$xml = file_get_contents("http://ws.insite.pe/sunat/test_ruc.php?ruc=$ruc");
var_dump($xml);
?>