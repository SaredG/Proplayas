<?php
	$conn = new mysqli("localhost","root","","proplayas");
	$count=0;
	if(!empty($_POST['add'])) {
		$nombre = mysqli_real_escape_string($conn,$_POST["nombre"]);
		$correo = mysqli_real_escape_string($conn,$_POST["correo"]);
		$pais = mysqli_real_escape_string($conn,$_POST["pais"]);
		$mensaje = mysqli_real_escape_string($conn,$_POST["mensaje"]);
		$sql = "INSERT INTO notificacion (nombre,correo,pais,mensaje) VALUES('" . $nombre . "','" . $correo . "','". $pais ."','". $mensaje ."')";
		mysqli_query($conn, $sql);
	}
	$sql2="SELECT * FROM notificacion WHERE estado = 0";
	$result=mysqli_query($conn, $sql2);
	$count=mysqli_num_rows($result);

	header( 'Location: ../' ) ;
?>
