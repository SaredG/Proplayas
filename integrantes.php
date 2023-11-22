<?php
session_start();

if (!isset($_SESSION['fkroles'])) {
    header('location: login.php');
} else {
    if ($_SESSION['fkroles'] != '0'){
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
    
?>



<body style="padding-top: 10%;">
    <div class="container">
        <div class="row">
            <h2 style="text-align:center">INTEGRANTES DEL NODOS</h2>
            <div class="container">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3"> Agregar Integrantes </button>
            </div>
        </div>
        <br />
        <div style="background: white; border-radius: 20px;">
            <center>
                <div class="row table">
                    <table class="table" style="background: white;" id="tabla2">
                        <thead>
                            <tr>
                                <th style="text-align: center" ;>Nombre Completo</th>
                                <th style="text-align: center" ;>Formación Grado</th>
                                <th style="text-align: center" ;>Formación Posgrado</th>
                                <th style="text-align: center" ;>Áreas de Experticia</th>
                                <th style="text-align: center" ;>Contacto</th>
                                <th style="text-align: center" ;>Acciones</th>
                               
                            </tr>
                        </thead>
                        <?php
                        $T = new Database();
                        $listado = $T->Iread();
                        ?>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_object($listado)) {
                                $id_inte     = $row->id_inte;
                                $nombreinte        = $row->nombreinte;
                                $formaciongd        = $row->formaciongd;
                                $formacionpg        = $row->formacionpg;
                                $area_ex        = $row->area_ex;
                                $contacto        = $row->contacto;
                                $fkroles            = $row->fkroles;
                                $idNodo = $row->fkid_nodo;

                            

                                if ($idNodo == $id_session) {


                            ?>

                                <tr>
                                    <td style="text-align: center" ;>
                                        <?php echo $nombreinte ?>
                                    </td>
                                    <td style="text-align: center" ;>
                                        <?php echo $formaciongd ?>
                                    </td>
                                    <td style="text-align: center" ;>
                                        <?php echo $formacionpg ?>
                                    </td>
                                    <td style="text-align: center" ;>
                                        <?php echo $area_ex ?>
                                    </td>
                                    <td style="text-align: center" ;>
                                        <?php echo $contacto ?>
                                    </td>
                                    <td style="text-align: center">
                                        <a href="#" data-href="eliminarInte.php?id_inte=<?php echo $id_inte ?>" data-toggle="modal" data-target="#confirm-delete"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAYpJREFUSEt9VutZAzEMkydhBGATRoANGIFNYAQ2ATaAScKXxzlyLDd/muYaPyRZV0NfBqD5xzjay2Bo/TH/NO2PS/7VVuwUdGcU2dOlVQSfj30/v7XmhWcA7+pnBrw0w0fd/UTlRGQUv9YDgC+NjUP3COB7Fcx357Wj2x365EbAkqNdsDSbgaxOsCvSLFF+pRJHZm4SOVEy+3FMVqdmDW5BsVYbY5r2gnEXzVBO6wJyIa4OQhtN48uRo3xDPEflkmnuNZAt5D00ztOpEwQVcWtdBFFQeY5FN0L2RHKwBBU9Miewnm7DndWTfAEwtUyk6cH3oObQkRB9u02tgqgaemcpOUM4IL0HDtLQRX5PMkIVwSpILQGiinC28csZTm1Udj07EP4jgnL+jcjVZTHupKIaDz3QSkU5BllF5TjZEpZyIwdsdsxBqi4WpmkpB40YWtj8ArgL0yv42FnGwx8A/QVVd0DdPAF4A3AvByuj9gfgFYbPm4NW9X14RDVt4t/JYRU3UUhvJml2qeF/qkS+Hyu5ClIAAAAASUVORK5CYII=" /></a>

                                        <a href="editarInte.php?id_inte=<?php echo $id_inte; ?>" class="edit" title="Editar" data-toggle="tooltip"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAN1JREFUSEvFlO0NwjAMBa8bwCQwAkzCKjACE8EIsAkbgJ6USKEkdj5a0T+V2vQufnY6sfI1rcxnRLABToDuV+CV22yvQNAbsA/QB3DMSXoEKfwZBDsgK2kVzOGHILgDklyAcxpVi6AUi3gxrm6BFYsE6oXiUkVfza6pwItFgixcLzxBDq4dlp7/TKolGIZbFSwCLwkWg5cEOjCa6bRx1ZnPm5DrwTss2oaR64aXKogCyYfgniCttjjn3u/eiih+2w2vOWjeBt333kl2Ad6Cmog8hjmZfxG07thcv3oPPg35Shmq75wnAAAAAElFTkSuQmCC" /></a>
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
</body>



<?php include("footer.php"); ?>