<?php

include('conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idUsrsession= $conn->real_escape_string(htmlentities($_POST['idUsrsession']));
    $titulo_libro = $conn->real_escape_string(htmlentities($_POST['titulo_libro']));
    $autorl = $conn->real_escape_string(htmlentities($_POST['autorl']));
    $codigo_nodo = $conn->real_escape_string(htmlentities($_POST['codigo_nodo']));
    $fecha= date('Y-m-d', time());
    $hora = date("g:i:s a");

    $file_name = $_FILES['file']['name'];

    $new_name_file = null;

    if ($file_name != '' || $file_name != null) {
        $file_type2 = $_FILES['file']['type'];
        list($type, $extension2) = explode('/', $file_type2);
        if ($extension2 == 'pdf') {
            $dir2 = 'Libros/';
            if (!file_exists($dir2)) {
                mkdir($dir2, 0777, true);
            }
            $file_tmp_name2 = $_FILES['file']['tmp_name'];
            //$new_name_file = 'files/' . date('Ymdhis') . '.' . $extension;
            $new_name_file = $dir2 . file_name($file_name) . '.' . $extension2;
            if (copy($file_tmp_name2, $new_name_file)) {

            }
        }
    }

    $ins = $conn->query("INSERT INTO libro(fkid_nodo,titulo_libro,autorl,codigo_nodo,fecha,hora,pdfl) VALUES ('$idUsrsession','$titulo_libro','$autorl','$codigo_nodo','$fecha','$hora','$new_name_file')");

    if ($ins) {
        echo 'Registrado Correctamente';
    } else {
        echo 'Fallo al Registrarse';
    }
} else {
    echo 'fail';
}
