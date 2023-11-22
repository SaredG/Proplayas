
<?php
date_default_timezone_set('America/Bogota');
include('conn.php');




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $autor = $conn->real_escape_string(htmlentities($_POST['autor']));
    $titulo = $conn->real_escape_string(htmlentities($_POST['titulo']));
    $contenido = $conn->real_escape_string(htmlentities($_POST['contenido']));
    $nodos = $conn->real_escape_string(htmlentities($_POST['nodos']));
    
    $fecha= date('Y-m-d', time());
    $hora = date("g:i:s a");

    $ins = $conn->query("INSERT INTO blog(autor,titulo,contenido,fecha,hora,nodos) VALUES ('$autor','$titulo','$contenido','$fecha','$hora','$nodos')");

    if ($ins) {
        echo 'Registrado Correctamente';
    } else {
        echo 'Fallo al Registrarse';
    }
} else {
    echo 'fail';
}
