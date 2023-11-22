<?php
	
	require 'conn.php';
	include "header.php";

	$id = $_GET['id'];
	
	$sql = "DELETE FROM nodos WHERE id = '$id'";
	$resultado = $conn->query($sql);
	header('location: inicio.php');
	
?>


