<?php
	
	require 'conexion.php';

	$sid = $con->real_escape_string(htmlentities($_GET['id_inte']));
	
	$sql = "DELETE FROM integrantes WHERE id_inte = '$sid'";
	$resultado = $con->query($sql);
	header('location: integrantes.php');
	
?>


