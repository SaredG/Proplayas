<?php
	
	require 'conexion.php';

$sid = $con->real_escape_string(htmlentities($_GET['id_wbs']));

$upd = $con->query("DELETE FROM webserie WHERE id_wbs = $sid");

	if ($upd) {
    header('Location: webserie.php');
} else {
    echo 'error';
}
?>





