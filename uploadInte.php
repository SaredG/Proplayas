<?php
include('conn.php');




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreinte = $conn->real_escape_string(htmlentities($_POST['nombreinte']));
    $formaciongd = $conn->real_escape_string(htmlentities($_POST['formaciongd']));
    $formacionpg = $conn->real_escape_string(htmlentities($_POST['formacionpg']));
    $area_ex = $conn->real_escape_string(htmlentities($_POST['area_ex']));
    $contacto = $conn->real_escape_string(htmlentities($_POST['contacto']));
    $idUsrsession= $conn->real_escape_string(htmlentities($_POST['idUsrsession']));
    $fkroles= $conn->real_escape_string(htmlentities($_POST['fkroles']));
    $psswd = $conn->real_escape_string(htmlentities($_POST['nombreinte']));
    $usuario = $conn->real_escape_string(htmlentities($_POST['nombreinte']));
    $codigo = $conn->real_escape_string(htmlentities($_POST['codigo']));
     
    
    $fecha= date('Y-m-d', time());
    $hora = date("g:i:s a");

    $ins = $conn->query("INSERT INTO integrantes(fkid_nodo,fkroles,nombreinte,formaciongd,formacionpg,area_ex,contacto,psswd,usuario,codigo) VALUES ('$idUsrsession','$fkroles','$nombreinte','$formaciongd','$formacionpg','$area_ex','$contacto','$psswd','$usuario','$codigo')");

    if ($ins) {
        echo 'Registrado Correctamente';
    } else {
        echo 'Fallo al Registrarse';
    }
} else {
    echo 'fail';
}
