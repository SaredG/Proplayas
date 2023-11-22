<?php
include "hearder.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style type="text/css">
  body {
    background-image: url(Utilidades/vintage-wallpaper-background.jpg)
  }
</style>

<body>
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
    <div class="p-3 mb-2 bg-white text-dark">
      <form class="border shadow p-5 rounded" action="confirmacion.php" method="post" style="width: 500px;">
        <h1 class="text-center p-3">Proplayas</h1>
        <?php if (isset($_GET['error'])) { ?>
          <div class="alert alert-danger" roles="alert">
            <?= $_GET['error'] ?>
          </div>
        <?php } ?>
        <div class="mb-3">
          <label for="usuario" class="form-label">Nombre del Usuario</label>
          <input type="text" class="form-control" name="usuario" id="usuario">
        </div>
        <div class="mb-3">
          <label for="psswd" class="form-label">Contraseña</label>
          <input type="password" name="psswd" class="form-control" id="psswd">

          <br />
          <center>
            <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
          </center>
      </form>
    </div>

</body>

</html>