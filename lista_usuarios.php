<script language="javascript" src="js/jquery-1.12.3.js"></script>
<?php

require_once "clases/Usuario.class.php";
$obj = new Usuario();
$lista = $obj->ListarUsuarios();?>
<table style="width:100%">
<tr>
<th>Id</th>
<th>Login</th>
<th>Password</th>
<th>Nombre</th>
<th>Apellido P.</th>
<th>Apellido M.</th>
</tr>   
<?php foreach($lista as $campo){ ?>
    <tr>
        <td><?php echo $campo['usu_id'] ?></td>
        <td><?php echo $campo['usu_nombre'] ?></td>
        <td><?php echo $campo['usu_pass'] ?></td>
        <td><?php echo $campo['usu_nombre'] ?></td>
	    <td><?php echo $campo['usu_apellidop'] ?></td>    
	    <td><?php echo $campo['usu_apellidom'] ?></td>    
    </tr>
<?php } ?>

</table>