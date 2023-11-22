<?php
	
	require 'conexion.php';

$sid = $con->real_escape_string(htmlentities($_GET['idtiponodo']));

$upd = $con->query("DELETE FROM tnodo WHERE idtiponodo = $sid");

	if ($upd) {
    header('Location: tipos_nodos.php');
} else {
    echo 'error';
}
?>





