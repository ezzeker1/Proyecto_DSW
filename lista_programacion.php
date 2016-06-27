<script language="javascript" src="js/jquery-1.12.3.js"></script>
<?php
$origen = $_POST["origen"];
$destino= $_POST["destino"];

require_once "clases/Ruta.class.php";
$obj = new Ruta();

$lista = $obj->Programacion($origen, $destino);
foreach($lista as $campo){ ?>
	<?php echo $campo["placa"]." ".$campo["fecha"] ?> 
	<a href="#" class="ruta" rel="<?php echo $campo['id_ruta']?>">
	    Seleccionar	
    </a>
    <br>
<?php } ?>
<script>
$(".ruta").click(VerCroquis);

function VerCroquis(){
	id_ruta = $(this).attr("rel");
	$.ajax({
		data:  {'id_ruta':id_ruta},
		url:   'croquis.php',
		type:  'post',
		success:  function (respuesta) {
			$("#div_croquis").html(respuesta);
		}
	});
}
</script>