<?php
session_start();

if (!isset($_SESSION['fkroles'])) {
    header('location: login.php');
} else {
    if ($_SESSION['fkroles'] != '1') {
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

<body style="padding-top: 10%;">
    <div class="container">
        <div class="row">
            <h2 style="text-align:center">TIPOS DE NODOS</h2>
            <div class="container">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1"> Agregar Tipo de Nodo </button>
            </div>
        </div>
        <br />
        <div style="background: white; border-radius: 20px;">
            <center>
                <div class="row table">
                    <table class="table" style="background: white;" id="tabla1">
                        <thead>
                            <tr>
                                <th style="text-align: center" ;>TIPO DE NODO</th>
                                <th style="text-align: center" ;>ACCIONES</th>
                            </tr>
                        </thead>
                        <?php
                        $T = new Database();
                        $listado = $T->Tread();
                        ?>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_object($listado)) {
                                $idtiponodo     = $row->idtiponodo;
                                $tnodo        = $row->tnodo;

                            ?>
                                <tr>
                                    <td style="text-align: center" ;>
                                        <?php echo $tnodo ?>
                                    </td>
                                    <td style="text-align: center">
                                        <a href="#" data-href="eliminartn.php?idtiponodo=<?php echo $idtiponodo ?>" data-toggle="modal" data-target="#confirm-delete"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAYpJREFUSEt9VutZAzEMkydhBGATRoANGIFNYAQ2ATaAScKXxzlyLDd/muYaPyRZV0NfBqD5xzjay2Bo/TH/NO2PS/7VVuwUdGcU2dOlVQSfj30/v7XmhWcA7+pnBrw0w0fd/UTlRGQUv9YDgC+NjUP3COB7Fcx357Wj2x365EbAkqNdsDSbgaxOsCvSLFF+pRJHZm4SOVEy+3FMVqdmDW5BsVYbY5r2gnEXzVBO6wJyIa4OQhtN48uRo3xDPEflkmnuNZAt5D00ztOpEwQVcWtdBFFQeY5FN0L2RHKwBBU9Miewnm7DndWTfAEwtUyk6cH3oObQkRB9u02tgqgaemcpOUM4IL0HDtLQRX5PMkIVwSpILQGiinC28csZTm1Udj07EP4jgnL+jcjVZTHupKIaDz3QSkU5BllF5TjZEpZyIwdsdsxBqi4WpmkpB40YWtj8ArgL0yv42FnGwx8A/QVVd0DdPAF4A3AvByuj9gfgFYbPm4NW9X14RDVt4t/JYRU3UUhvJml2qeF/qkS+Hyu5ClIAAAAASUVORK5CYII=" /></a>

                                        <a href="editarTN.php?idtiponodo=<?php echo $idtiponodo; ?>" class="edit" title="Editar" data-toggle="tooltip"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAN1JREFUSEvFlO0NwjAMBa8bwCQwAkzCKjACE8EIsAkbgJ6USKEkdj5a0T+V2vQufnY6sfI1rcxnRLABToDuV+CV22yvQNAbsA/QB3DMSXoEKfwZBDsgK2kVzOGHILgDklyAcxpVi6AUi3gxrm6BFYsE6oXiUkVfza6pwItFgixcLzxBDq4dlp7/TKolGIZbFSwCLwkWg5cEOjCa6bRx1ZnPm5DrwTss2oaR64aXKogCyYfgniCttjjn3u/eiih+2w2vOWjeBt333kl2Ad6Cmog8hjmZfxG07thcv3oPPg35Shmq75wnAAAAAElFTkSuQmCC" /></a>
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
<?php include("footer.php"); ?>