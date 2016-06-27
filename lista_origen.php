<option value="0">Seleccionar</option>
<?php
require_once "clases/Ciudad.class.php";
$obj = new Ciudad();
$lista = $obj->ListaOrigen();
foreach($lista as $campo){ ?>
	<option value="<?php echo $campo['id_ciudad']?>">
    	<?php echo $campo['ciudad']?>
    </option>
<?php } ?>