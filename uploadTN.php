<?php

include('conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tnodo = $conn->real_escape_string(htmlentities($_POST['tTipoNodo']));

    $ins = $conn->query("INSERT INTO tnodo(tnodo) VALUES ('$tnodo')");

    if ($ins) {
        echo 'Registrado Correctamente';
    } else {
        echo 'Fallo al Registrarse';
    }
} else {
    echo 'fail';
}
