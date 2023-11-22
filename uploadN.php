<?php

include('conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $conn->real_escape_string(htmlentities($_POST['title']));
    $nombreN = $conn->real_escape_string(htmlentities($_POST['nombreN']));
    $gdA = $conn->real_escape_string(htmlentities($_POST['gdA']));
    $codigo = $conn->real_escape_string(htmlentities($_POST['codigo']));
    $tnodo = $conn->real_escape_string(htmlentities($_POST['tnodo']));
    $pais = $conn->real_escape_string(htmlentities($_POST['pais']));
    $ciudad = $conn->real_escape_string(htmlentities($_POST['ciudad']));
    $video = $conn->real_escape_string(htmlentities($_POST['video']));
    $kmz = $conn->real_escape_string(htmlentities($_POST['kmz']));
    $psswd = $conn->real_escape_string(htmlentities($_POST['nombreN']));
    $usuario = $conn->real_escape_string(htmlentities($_POST['nombreN']));

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

    $ins = $conn->query("INSERT INTO nodos(fktnodo,gdA,title,pais,ciudad,codigo,nombreN,video,kmz,psswd,usuario,url) VALUES ('$tnodo','$gdA','$title','$pais','$ciudad','$codigo','$nombreN','$video','$kmz','$psswd','$usuario','$new_name_file')");

    if ($ins) {
        echo 'Registrado Correctamente' ;
       
    } else {
        echo 'Fallo al Registrarse';
    }
} else {
    echo 'fail';
}
