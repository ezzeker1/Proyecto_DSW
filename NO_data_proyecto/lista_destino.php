<option value="0">Seleccionar</option>
<?php
$origen = $_POST["origen"];

require_once("clases/Ciudad.class.php");
$obj = new Ciudad();
$lista = $obj->ListaDestino($origen);
foreach($lista as $campo){ ?>
	<option value="<?php echo $campo['id_ciudad']?>">
    	<?php echo $campo['ciudad'] ?>
    </option>
<?php } ?>