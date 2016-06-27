<!doctype html>
<html>
<head>
<script language="javascript" src="js/jquery-1.12.3.js"></script>
</head>

<body>
<input type="text" id="ruc">
<input type="button" id="buscar" value="Buscar">
<div id="div_resultado"></div>
</body>
</html>
<script>
$("#buscar").click(BuscarRuc);

function BuscarRuc(){
	ruc = $("#ruc").val();
	$.ajax({
		data:  {'ruc':ruc},
		url:   'verifica_ruc.php',
		type:  'post',
		success:  function (respuesta) {
			$("#div_resultado").html(respuesta);
		}
	});
}
</script>
