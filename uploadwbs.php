
<?php
date_default_timezone_set('America/Bogota');
include('conn.php');




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idUsrsession= $conn->real_escape_string(htmlentities($_POST['idUsrsession']));
    $titulo = $conn->real_escape_string(htmlentities($_POST['titulo']));
    $contenidoWbs = $conn->real_escape_string(htmlentities($_POST['contenidoWbs']));
    $videowbs = $conn->real_escape_string(htmlentities($_POST['videowbs']));
    $numC = $conn->real_escape_string(htmlentities($_POST['numC']));
    $autor_wbs = $conn->real_escape_string(htmlentities($_POST['autor_wbs']));
    $codigoWbs = $conn->real_escape_string(htmlentities($_POST['codigoWbs']));
    $fecha= date('Y-m-d', time());
    $hora = date("g:i:s a");
    

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
    

    $ins = $conn->query("INSERT INTO webserie(fkid_nodo,titulo,contenidoWbs,videowbs,autor_wbs,codigoWbs,numC,fecha,hora,imagen) VALUES ('$idUsrsession','$titulo','$contenidoWbs','$videowbs','$autor_wbs','$codigoWbs','$numC','$fecha','$hora','$new_name_file2')");

    if ($ins) {
        echo 'Registrado Correctamente';
    } else {
        echo 'Fallo al Registrarse';
    }
} else {
    echo 'fail';
}
