
<?php
date_default_timezone_set('America/Bogota');
include('conn.php');




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idUsrsession= $conn->real_escape_string(htmlentities($_POST['idUsrsession']));
    $titulo = $conn->real_escape_string(htmlentities($_POST['titulo']));
    $subtitulo = $conn->real_escape_string(htmlentities($_POST['subtitulo']));
    $resumen = $conn->real_escape_string(htmlentities($_POST['resumen']));
    $autor_wbns = $conn->real_escape_string(htmlentities($_POST['autor_wbns']));
    $codigoWbs = $conn->real_escape_string(htmlentities($_POST['codigoWbs']));
    $fecha= date('Y-m-d', time());
    $hora = date("g:i:s a");
    
    $file_name = $_FILES['file']['name'];

    $new_name_file = null;

    if ($file_name != '' || $file_name != null) {
        $file_type = $_FILES['file']['type'];
        list($type, $extension) = explode('/', $file_type);
        if ($extension == 'pdf') {
            $dir = 'PDFs/';
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $file_tmp_name = $_FILES['file']['tmp_name'];
            //$new_name_file = 'files/' . date('Ymdhis') . '.' . $extension;
            $new_name_file = $dir . file_name($file_name) . '.' . $extension;
            if (copy($file_tmp_name, $new_name_file)) {

            }
        }
    }

    $file_name = $_FILES['img']['name'];

    $new_name_file2 = null;

    if ($file_name != '' || $file_name != null) {
        $file_type2 = $_FILES['img']['type'];
        list($type, $extension2) = explode('/', $file_type2);
        if ($extension2 == 'jpg' or 'png' or 'jpeg') {
            $dir2 = 'Utilidades/';
            if (!file_exists($dir2)) {
                mkdir($dir2, 0777, true);
            }
            $file_tmp_name2 = $_FILES['img']['tmp_name'];
            //$new_name_file = 'files/' . date('Ymdhis') . '.' . $extension;
            $new_name_file2 = $dir2 . file_name($file_name) . '.' . $extension2;
            if (copy($file_tmp_name2, $new_name_file2)) {

            }
        }
    }
    

    $ins = $conn->query("INSERT INTO webinars(fkid_nodo,titulo,subtitulo,resumen,autor_wbns,codigoWbs,fecha,hora,pdf,img) VALUES ('$idUsrsession','$titulo','$subtitulo','$resumen','$autor_wbns','$codigoWbs','$fecha','$hora','$new_name_file',' $new_name_file2')");

    if ($ins) {
        echo 'Registrado Correctamente';
    } else {
        echo 'Fallo al Registrarse';
    }
} else {
    echo 'fail';
}
