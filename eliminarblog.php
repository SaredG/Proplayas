<?php
	
	require 'conexion.php';
	include "header.php";

	$id = $_GET['id'];
	
	$sql = "DELETE FROM blog WHERE id = '$id'";
	$resultado = $con->query($sql);
	header('location: listablog.php');
	
?>


