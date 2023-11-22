<?php
session_start();
include "conn.php";
date_default_timezone_set('America/Bogota');
if (isset($_POST['usuario'])  &&  isset($_POST['psswd'])) {
  
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }

  
  $usuario   = test_input($_POST['usuario']);
  $psswd   = test_input($_POST['psswd']);
  $fecha= date('Y-m-d', time());
  $hora = date("g:i:s a");

  if (empty($usuario)) {
    header("location: login.php?error=Requiere Usuario");
}else if (empty($psswd)) {
    header("location: login.php?error=Requiere Contraseña");
}else {
    $psswd = ($psswd);

    $sql = "SELECT * FROM nodos WHERE usuario='$usuario' AND psswd='$psswd'";
    $sql3 = "SELECT * FROM integrantes WHERE usuario='$usuario' AND psswd='$psswd'";
    $sql2 = "INSERT INTO control (description,hora,fecha) VALUES ('$usuario','$hora','$fecha')";
    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);
    $result3 = mysqli_query($conn, $sql3);


    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $row3 = mysqli_fetch_assoc($result3);
        if ($row['psswd'] === $psswd) {
            $_SESSION['id']        = $row['id'];
            $_SESSION['fkroles'] = $row['fkroles'];
            $_SESSION['usuario']  = $row['usuario'];
            $_SESSION['codigo']  = $row['codigo'];
            $_SESSION['nombreN']  = $row['nombreN'];
             $_SESSION['id_inte']  = $row['id_inte'];
            $_SESSION['nombreinte']  = $row['nombreinte'];
            $_SESSION['title']  = $row['title'];
            


            header("location: areas.php");

        }else {
            header("location: login.php?error=Contraseña y/o Usuario Incorrectos ");
        }

    }else if (mysqli_num_rows($result3) === 1) {
        $row2 = mysqli_fetch_assoc($result2);
        $row3 = mysqli_fetch_assoc($result3);
        if ($row3['psswd'] === $psswd) {
            $_SESSION['id']        = $row3['id'];
            $_SESSION['fkroles'] = $row3['fkroles'];
            $_SESSION['usuario']  = $row3['usuario'];
            $_SESSION['codigo']  = $row3['codigo'];
            $_SESSION['nombreN']  = $row3['nombreN'];
            $_SESSION['nombreinte']  = $row3['nombreinte'];
            $_SESSION['id_inte']  = $row3['id_inte'];
            $_SESSION['title']  = $row3['title'];
            


            header("location: areas.php");

        }else {
            header("location: login.php?error=Contraseña y/o Usuario Incorrectos ");
        }

    } else{
        header("location: login.php?error=Contraseña y/o Usuario Incorrectos");
    }
}

}else {
    header("location: login.php"); 
}
