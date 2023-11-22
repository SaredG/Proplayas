<?php
	
	require 'conexion.php';
	include "header.php";

	$id_wbns = $_GET['id_wbns'];
	
	$sql = "DELETE FROM webinars WHERE id_wbns = '$id_wbns'";
	$resultado = $con->query($sql);
	header('location: webinars.php');
	
?>


