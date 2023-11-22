<?php

include('conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $conn->real_escape_string(htmlentities($_POST['nombre']));
    $correo = $conn->real_escape_string(htmlentities($_POST['correo']));
    $pais = $conn->real_escape_string(htmlentities($_POST['pais']));
    $mensaje = $conn->real_escape_string(htmlentities($_POST['mensaje']));

    $ins = $conn->query("INSERT INTO notificacion (nombre,correo,pais,mensaje) VALUES ('$nombre','$correo','$pais','$mensaje')");

    if ($ins) {
        echo 'Registrado Correctamente';
    } else {
        echo 'Fallo al Registrarse';
    }
} else {
    echo 'fail';
}
