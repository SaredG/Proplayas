<?php
	
	require 'conexion.php';

	$sid = $con->real_escape_string(htmlentities($_GET['id_libro']));
	
	$sql = "DELETE FROM libro WHERE id_libro = '$sid'";
	$resultado = $con->query($sql);
	header('location: libro.php');
	
?>


