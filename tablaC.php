<?php
session_start();

if (!isset($_SESSION['fkroles'])) {
  header('location: login.php');
} else {
  if ($_SESSION['fkroles'] != '1' && '0') {
    header('location: areas.php');
  }
}
include "conn.php";
include "database.php";
include "header.php";
?>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'proplayas');
?>
<style type="text/css">
  body {
    background-image: url(Utilidades/vintage-wallpaper-background.jpg)
  }
</style>

<?php
if ($fkroles == "1") {

?>

<body style="padding-top: 10%;">
  <div class="container">
    <div class="row">
      <h2 style="text-align:center">CAMBIO DE CONTRASEÑA</h2>

    </div>
    <br />
    <div style="background: white; border-radius: 20px;">
      <center>
        <div class="row table">
          <table class="table" style="background: white;" id="tabla1">
            <thead>
              <tr>
                <th style="text-align: center" ;>CODIGO</th>
                <th style="text-align: center" ;>USUARIO</th>
                <th style="text-align: center" ;>CONTRASEÑA</th>.
                <th style="text-align: center" ;>ACCIONES</th>
              </tr>
            </thead>
            <?php
            $T = new Database();
            $listado = $T->Psread();
            ?>
            <tbody>
              <?php
              while ($row = mysqli_fetch_object($listado)) {
                $id     = $row->id;
                $usuario        = $row->usuario;
                $psswd        = $row->psswd;
                $codigo        = $row->codigo;

         

              ?>
                <tr>
                  <td style="text-align: center" ;>
                    <?php echo $codigo ?>
                  </td>
                  <td style="text-align: center" ;>
                    <?php echo $usuario ?>
                  </td>
                  <td style="text-align: center" ;>
                    <?php echo $psswd ?>
                  </td>
                  <td style="text-align: center">
                    <a href="editarC.php?id=<?php echo $id; ?>" class="edit" title="Editar" data-toggle="tooltip"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAN1JREFUSEvFlO0NwjAMBa8bwCQwAkzCKjACE8EIsAkbgJ6USKEkdj5a0T+V2vQufnY6sfI1rcxnRLABToDuV+CV22yvQNAbsA/QB3DMSXoEKfwZBDsgK2kVzOGHILgDklyAcxpVi6AUi3gxrm6BFYsE6oXiUkVfza6pwItFgixcLzxBDq4dlp7/TKolGIZbFSwCLwkWg5cEOjCa6bRx1ZnPm5DrwTss2oaR64aXKogCyYfgniCttjjn3u/eiih+2w2vOWjeBt333kl2Ad6Cmog8hjmZfxG07thcv3oPPg35Shmq75wnAAAAAElFTkSuQmCC" /></a>
                  </td>
                </tr>

              <?php
                
              }

              ?>
            </tbody>
          </table>
        </div>
    </div>
  </div>
 <?php  } else if ($fkroles == '0') {
    ?>
  <body style="padding-top: 10%;">
  <div class="container">
    <div class="row">
      <h2 style="text-align:center">CAMBIO DE CONTRASEÑA</h2>

    </div>
    <br />
    <div style="background: white; border-radius: 20px;">
      <center>
        <div class="row table">
          <table class="table" style="background: white;" id="tabla1">
            <thead>
              <tr>
                <th style="text-align: center" ;>CODIGO</th>
                <th style="text-align: center" ;>USUARIO</th>
                <th style="text-align: center" ;>CONTRASEÑA</th>.
                <th style="text-align: center" ;>ACCIONES</th>
              </tr>
            </thead>
            <?php
            $T = new Database();
            $listado = $T->Psread();
            ?>
            <tbody>
              <?php
              while ($row = mysqli_fetch_object($listado)) {
                $id     = $row->id;
                $usuario        = $row->usuario;
                $psswd        = $row->psswd;
                $codigo        = $row->codigo;

                if ($id == $id_session) {

              ?>
                <tr>
                  <td style="text-align: center" ;>
                    <?php echo $codigo ?>
                  </td>
                  <td style="text-align: center" ;>
                    <?php echo $usuario ?>
                  </td>
                  <td style="text-align: center" ;>
                    <?php echo $psswd ?>
                  </td>
                  <td style="text-align: center">
                    <a href="editarC.php?id=<?php echo $id; ?>" class="edit" title="Editar" data-toggle="tooltip"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAN1JREFUSEvFlO0NwjAMBa8bwCQwAkzCKjACE8EIsAkbgJ6USKEkdj5a0T+V2vQufnY6sfI1rcxnRLABToDuV+CV22yvQNAbsA/QB3DMSXoEKfwZBDsgK2kVzOGHILgDklyAcxpVi6AUi3gxrm6BFYsE6oXiUkVfza6pwItFgixcLzxBDq4dlp7/TKolGIZbFSwCLwkWg5cEOjCa6bRx1ZnPm5DrwTss2oaR64aXKogCyYfgniCttjjn3u/eiih+2w2vOWjeBt333kl2Ad6Cmog8hjmZfxG07thcv3oPPg35Shmq75wnAAAAAElFTkSuQmCC" /></a>
                  </td>
                </tr>

              <?php
                }
              }

              ?>
            </tbody>
          </table>
        </div>
    </div>
  </div>
<?php  } else if ($fkroles == '2') {
    ?>
  <body style="padding-top: 10%;">
  <div class="container">
    <div class="row">
      <h2 style="text-align:center">CAMBIO DE CONTRASEÑA</h2>

    </div>
    <br />
    <div style="background: white; border-radius: 20px;">
      <center>
        <div class="row table">
          <table class="table" style="background: white;" id="tabla1">
            <thead>
              <tr>
                <th style="text-align: center" ;>CODIGO</th>
                <th style="text-align: center" ;>USUARIO</th>
                <th style="text-align: center" ;>CONTRASEÑA</th>.
                <th style="text-align: center" ;>ACCIONES</th>
              </tr>
            </thead>
            <?php
            $T = new Database();
            $listado = $T->Interead();
            ?>
            <tbody>
              <?php
              while ($row = mysqli_fetch_object($listado)) {
                $id_inte     = $row->id_inte;
                $usuario        = $row->usuario;
                $psswd        = $row->psswd;
                $codigo        = $row->codigo;
                
                
                               

                if ($id_inte == $id_session2) {

              ?>
                <tr>
                  <td style="text-align: center" ;>
                    <?php echo $codigo ?>
                  </td>
                  <td style="text-align: center" ;>
                    <?php echo $usuario ?>
                  </td>
                  <td style="text-align: center" ;>
                    <?php echo $psswd ?>
                  </td>
                  <td style="text-align: center">
                    <a href="editarC.php?id_inte=<?php echo $id_inte; ?>" class="edit" title="Editar" data-toggle="tooltip"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAN1JREFUSEvFlO0NwjAMBa8bwCQwAkzCKjACE8EIsAkbgJ6USKEkdj5a0T+V2vQufnY6sfI1rcxnRLABToDuV+CV22yvQNAbsA/QB3DMSXoEKfwZBDsgK2kVzOGHILgDklyAcxpVi6AUi3gxrm6BFYsE6oXiUkVfza6pwItFgixcLzxBDq4dlp7/TKolGIZbFSwCLwkWg5cEOjCa6bRx1ZnPm5DrwTss2oaR64aXKogCyYfgniCttjjn3u/eiih+2w2vOWjeBt333kl2Ad6Cmog8hjmZfxG07thcv3oPPg35Shmq75wnAAAAAElFTkSuQmCC" /></a>
                  </td>
                </tr>

              <?php
                }
              }

              ?>
            </tbody>
          </table>
        </div>
    </div>
  </div>
<?php  } ?>
<?php include("footer.php"); ?>
