<script language="javascript" src="js/jquery-1.12.3.js"></script>
<?php
$id_ruta = $_POST['id_ruta'];
require_once "clases/Ruta.class.php";
$obj = new Ruta();
$lista = $obj->VehiculoDisponible($id_ruta);
?>
<head>
</head>
<body>
<input name="id_ruta" type="hidden" value="<?php echo $_POST['id_ruta']?>">
<table width="240" height="500" background="imagenes/bus.jpg">
	<tr>
    	<td>

<table width="140" border="1" align="center" cellpadding="0" cellspacing="0">
	<?php foreach($lista as $campo) { ?>
    <tr height="50">
      <td align="center">
        <a href="#" class="asiento" rel="<?php echo $campo[0] ?>">
		  	<?php echo $campo[0] ?>
        </a>
      </td>
      <td align="center">
        <a href="#" class="asiento" rel="<?php echo $campo[1] ?>">
		  	<?php echo $campo[1] ?>
        </a>
       </td>
      <td align="center">
        <a href="#" class="asiento" rel="<?php echo $campo[2] ?>">
		  	<?php echo $campo[2] ?>
        </a>
	  </td>
      <td align="center">
        <a href="#" class="asiento" rel="<?php echo $campo[3] ?>">
		  	<?php echo $campo[3] ?>
        </a>
	  </td>
    </tr>
    <?php } ?>
</table>
        
      </td>
    </tr>
</table>
</body>
<script>
$(".asiento").click(SeleccionarAsiento);

function SeleccionarAsiento(){
	asiento = $(this).attr("rel");
	//$("#div_reserva").html(asiento);
	$.ajax({
		data:  {'asiento':asiento},
		url:   'reserva.php',
		type:  'post',
		success:  function (respuesta) {
			$("#div_reserva").html(respuesta);
		}
	});
}
</script>
