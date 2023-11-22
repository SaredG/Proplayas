<?php
session_start();

include "conn.php";
include "database.php";
include "header.php";
$fkroles = $_SESSION['fkroles'];
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
    <body style="padding-top: 7%;">
        <div class="container">
            <div class="row">
                <h2 style="text-align:center">NODOS</h2>
                <div class="container">
                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Nuevo Nodo</a>
                </div>

            </div>
            <br />
            <div style="background: white; border-radius: 20px;">

                <div class="row table">
                    <table class="table" style="background: white;" id="tabla1">
                        <thead>
                            <tr>
                                <th style="text-align: center" ;>TIPO DE NODO</th>
                                <th style="text-align: center" ;>CÓDIGO</th>
                                <th style="text-align: center" ;>NOMBRE DEL COORDINADOR</th>
                                <th style="text-align: center" ;>NOMBRE DEL NODO</th>
                                <th style="text-align: center" ;>PAÍS</th>
                                <th style="text-align: center" ;>CIUDAD</th>
                                <th style="text-align: center" ;>FICHA TECNICA</th>
                                <th style="text-align: center" ;>VIDEO</th>
                                <th style="text-align: center" ;>MAPA</th>
                                <th style="text-align: center" ;>ACCIONES</th>
                            </tr>
                        </thead>
                        <?php
                        $cliente = new Database();
                        $listado2 = $cliente->Nread();
                        ?>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_object($listado2)) {
                                $id     = $row->id;
                                $tnodo        = $row->tnodo;
                                $gdA      = $row->gdA;
                                $title      = $row->title;
                                $pais      = $row->pais;
                                $ciudad      = $row->ciudad;
                                $codigo      = $row->codigo;
                                $nombreN      = $row->nombreN;
                                $url      = $row->url;
                                $video      = $row->video;
                                $kmz      = $row->kmz;
                            ?>

                                <tr>
                                    <td style="text-align: center" ;><?php echo ucwords(strtolower($tnodo))  ?></td>
                                    <td style="text-align: center" ;><?php echo ucwords(strtolower($codigo))  ?></td>
                                    <td style="text-align: center" ;><?php echo ucwords(strtolower($gdA))  ?>. <?php echo ucwords(strtolower($title)) ?> </td>
                                    <td style="text-align: center" ;><?php echo  ucwords(strtolower($nombreN))  ?></td>
                                    <td style="text-align: center" ;><?php echo ucwords(strtolower($pais))  ?></td>
                                    <td style="text-align: center" ;><?php echo ucwords(strtolower($ciudad))   ?></td>
                                    <td style="text-align: center" ;>
                                        <a onclick="openModelPDF('<?php echo $url ?>')" type="button" title="Ver PDF"><img src="Utilidades/eye.svg"></a>
                                    </td>
                                    <td style="text-align: center" ;>
                                        <?php
                                        if ($video != NULL) {
                                        ?>
                                            <a onclick="openModalV('<?php echo $video ?>')" href="#" type="button" title="Ver Video"><img src="Utilidades/eye.svg"></a>
                                        <?php
                                        }
                                        ?>

                                    </td>
                                    <td style="text-align: center" ;>
                                        <?php
                                        if ($kmz != NULL) {
                                        ?>
                                            <a onclick="openModalK(' <?php echo htmlentities(addslashes($kmz)) ?>')" href="#" type="button" title="Ver kmz"><img src="Utilidades/eye.svg"></a>

                                        <?php
                                        }
                                        ?>


                                    </td>
                                    <td style="text-align: center" ;>
                                        <a href="#" data-href="eliminar.php?id=<?php echo $id; ?>" data-toggle="modal" data-target="#confirm-delete"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAYpJREFUSEt9VutZAzEMkydhBGATRoANGIFNYAQ2ATaAScKXxzlyLDd/muYaPyRZV0NfBqD5xzjay2Bo/TH/NO2PS/7VVuwUdGcU2dOlVQSfj30/v7XmhWcA7+pnBrw0w0fd/UTlRGQUv9YDgC+NjUP3COB7Fcx357Wj2x365EbAkqNdsDSbgaxOsCvSLFF+pRJHZm4SOVEy+3FMVqdmDW5BsVYbY5r2gnEXzVBO6wJyIa4OQhtN48uRo3xDPEflkmnuNZAt5D00ztOpEwQVcWtdBFFQeY5FN0L2RHKwBBU9Miewnm7DndWTfAEwtUyk6cH3oObQkRB9u02tgqgaemcpOUM4IL0HDtLQRX5PMkIVwSpILQGiinC28csZTm1Udj07EP4jgnL+jcjVZTHupKIaDz3QSkU5BllF5TjZEpZyIwdsdsxBqi4WpmkpB40YWtj8ArgL0yv42FnGwx8A/QVVd0DdPAF4A3AvByuj9gfgFYbPm4NW9X14RDVt4t/JYRU3UUhvJml2qeF/qkS+Hyu5ClIAAAAASUVORK5CYII=" /></a>

                                        <a href="editarU.php?id=<?php echo $id; ?>" class="edit" title="Editar" data-toggle="tooltip"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAN1JREFUSEvFlO0NwjAMBa8bwCQwAkzCKjACE8EIsAkbgJ6USKEkdj5a0T+V2vQufnY6sfI1rcxnRLABToDuV+CV22yvQNAbsA/QB3DMSXoEKfwZBDsgK2kVzOGHILgDklyAcxpVi6AUi3gxrm6BFYsE6oXiUkVfza6pwItFgixcLzxBDq4dlp7/TKolGIZbFSwCLwkWg5cEOjCa6bRx1ZnPm5DrwTss2oaR64aXKogCyYfgniCttjjn3u/eiih+2w2vOWjeBt333kl2Ad6Cmog8hjmZfxG07thcv3oPPg35Shmq75wnAAAAAElFTkSuQmCC" /></a>
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

        <body style="padding-top: 7%;">
            <div class="container">
                <div class="row">
                    <h2 style="text-align:center">NODOS</h2>
                </div>
                <br />
                <div style="background: white; border-radius: 20px;">

                    <div class="row table">
                        <table class="table" style="background: white;" id="tabla1">
                            <thead>
                                <tr>
                                    <th style="text-align: center" ;>TIPO DE NODO</th>
                                    <th style="text-align: center" ;>CÓDIGO</th>
                                    <th style="text-align: center" ;>NOMBRE DEL COORDINADOR</th>
                                    <th style="text-align: center" ;>NOMBRE DEL NODO</th>
                                    <th style="text-align: center" ;>PAÍS</th>
                                    <th style="text-align: center" ;>CIUDAD</th>
                                    <th style="text-align: center" ;>FICHA TECNICA</th>
                                    <th style="text-align: center" ;>VIDEO</th>
                                    <th style="text-align: center" ;>MAPA</th>
                                    <th style="text-align: center" ;>ACCIONES</th>
                                   
                                </tr>
                            </thead>
                            <?php
                            $cliente = new Database();
                            $listado = $cliente->Nread();
                            ?>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_object($listado)) {
                                    $id     = $row->id;
                                    $tnodo        = $row->tnodo;
                                    $gdA      = $row->gdA;
                                    $title      = $row->title;
                                    $pais      = $row->pais;
                                    $ciudad      = $row->ciudad;
                                    $codigo      = $row->codigo;
                                    $nombreN      = $row->nombreN;
                                    $url      = $row->url;
                                    $video      = $row->video;
                                    $kmz      = $row->kmz;

                                ?>

                                    <tr>
                                        <td style="text-align: center" ;><?php echo strtoupper($tnodo) ?></td>
                                        <td style="text-align: center" ;><?php echo strtoupper($codigo) ?></td>
                                        <td style="text-align: center" ;><?php echo strtoupper($gdA) ?>. <?php echo ucwords(strtolower($title)) ?> </td>
                                        <td style="text-align: center" ;><?php echo strtoupper($nombreN) ?></td>
                                        <td style="text-align: center" ;><?php echo strtoupper($pais); ?></td>
                                        <td style="text-align: center" ;><?php echo strtoupper($ciudad) ?></td>
                                        <td style="text-align: center" ;>
                                            <a onclick="openModelPDF('<?php echo $url ?>')" type="button" title="Ver PDF"><img src="Utilidades/eye.svg"></a>
                                        </td>
                                        <td style="text-align: center" ;>
                                            <?php
                                            if ($video != NULL) {
                                            ?>
                                                <a onclick="openModalV('<?php echo $video ?>')" href="#" type="button" title="Ver Video"><img src="Utilidades/eye.svg"></a>
                                            <?php
                                            }
                                            ?>

                                        </td>
                                        <td style="text-align: center" ;>
                                            <?php
                                            if ($kmz != NULL) {
                                            ?>
                                                <a onclick="openModalK(' <?php echo htmlentities(addslashes($kmz)) ?>')" href="#" type="button" title="Ver kmz"><img src="Utilidades/eye.svg"></a>

                                            <?php
                                            }
                                            ?>

                                        </td>
                                       
                                        
                                            <td style="text-align: center" ;>
                                             <?php
                                             if ($id == $id_session) {
                                                ?>
                                                <a href="#" data-href="eliminar.php?id=<?php echo $id; ?>" data-toggle="modal" data-target="#confirm-delete"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAYpJREFUSEt9VutZAzEMkydhBGATRoANGIFNYAQ2ATaAScKXxzlyLDd/muYaPyRZV0NfBqD5xzjay2Bo/TH/NO2PS/7VVuwUdGcU2dOlVQSfj30/v7XmhWcA7+pnBrw0w0fd/UTlRGQUv9YDgC+NjUP3COB7Fcx357Wj2x365EbAkqNdsDSbgaxOsCvSLFF+pRJHZm4SOVEy+3FMVqdmDW5BsVYbY5r2gnEXzVBO6wJyIa4OQhtN48uRo3xDPEflkmnuNZAt5D00ztOpEwQVcWtdBFFQeY5FN0L2RHKwBBU9Miewnm7DndWTfAEwtUyk6cH3oObQkRB9u02tgqgaemcpOUM4IL0HDtLQRX5PMkIVwSpILQGiinC28csZTm1Udj07EP4jgnL+jcjVZTHupKIaDz3QSkU5BllF5TjZEpZyIwdsdsxBqi4WpmkpB40YWtj8ArgL0yv42FnGwx8A/QVVd0DdPAF4A3AvByuj9gfgFYbPm4NW9X14RDVt4t/JYRU3UUhvJml2qeF/qkS+Hyu5ClIAAAAASUVORK5CYII=" /></a>

                                                <a href="editarU.php?id=<?php echo $id; ?>" class="edit" title="Editar" data-toggle="tooltip"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAN1JREFUSEvFlO0NwjAMBa8bwCQwAkzCKjACE8EIsAkbgJ6USKEkdj5a0T+V2vQufnY6sfI1rcxnRLABToDuV+CV22yvQNAbsA/QB3DMSXoEKfwZBDsgK2kVzOGHILgDklyAcxpVi6AUi3gxrm6BFYsE6oXiUkVfza6pwItFgixcLzxBDq4dlp7/TKolGIZbFSwCLwkWg5cEOjCa6bRx1ZnPm5DrwTss2oaR64aXKogCyYfgniCttjjn3u/eiih+2w2vOWjeBt333kl2Ad6Cmog8hjmZfxG07thcv3oPPg35Shmq75wnAAAAAElFTkSuQmCC" /></a>
                                            </td>
                                       
                                            <?php
                                            }
                                            ?>


                                    </tr>


                                <?php

                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

             <?php  } else if ($fkroles == '2') {
    ?>

        <body style="padding-top: 7%;">
            <div class="container">
                <div class="row">
                    <h2 style="text-align:center">Integrante</h2>
                </div>
                <br />
                <div style="background: white; border-radius: 20px;">

                    <div class="row table">
                        <table class="table" style="background: white;" id="tabla1">
                            <thead>
                                <tr>
                                    <th style="text-align: center" ;>TIPO DE NODO</th>
                                    <th style="text-align: center" ;>CÓDIGO</th>
                                    <th style="text-align: center" ;>NOMBRE DEL COORDINADOR</th>
                                    <th style="text-align: center" ;>NOMBRE DEL NODO</th>
                                    <th style="text-align: center" ;>PAÍS</th>
                                    <th style="text-align: center" ;>CIUDAD</th>
                                    <th style="text-align: center" ;>FICHA TECNICA</th>
                                    <th style="text-align: center" ;>VIDEO</th>
                                    <th style="text-align: center" ;>MAPA</th>
                                    <th style="text-align: center" ;>ACCIONES</th>
                                   
                                </tr>
                            </thead>
                            <?php
                            $cliente = new Database();
                            $listado = $cliente->Nread();
                            ?>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_object($listado)) {
                                    $id     = $row->id;
                                    $tnodo        = $row->tnodo;
                                    $gdA      = $row->gdA;
                                    $title      = $row->title;
                                    $pais      = $row->pais;
                                    $ciudad      = $row->ciudad;
                                    $codigo      = $row->codigo;
                                    $nombreN      = $row->nombreN;
                                    $url      = $row->url;
                                    $kmz      = $row->kmz;
                                    

                                ?>

                                    <tr>
                                        <td style="text-align: center" ;><?php echo strtoupper($tnodo) ?></td>
                                        <td style="text-align: center" ;><?php echo strtoupper($codigo) ?></td>
                                        <td style="text-align: center" ;><?php echo strtoupper($gdA) ?>. <?php echo ucwords(strtolower($title)) ?> </td>
                                        <td style="text-align: center" ;><?php echo strtoupper($nombreN) ?></td>
                                        <td style="text-align: center" ;><?php echo strtoupper($pais); ?></td>
                                        <td style="text-align: center" ;><?php echo strtoupper($ciudad) ?></td>
                                        <td style="text-align: center" ;>
                                            <a onclick="openModelPDF('<?php echo $url ?>')" type="button" title="Ver PDF"><img src="Utilidades/eye.svg"></a>
                                        </td>
                                        <td style="text-align: center" ;>
                                            <?php
                                            if ($video != NULL) {
                                            ?>
                                                <a onclick="openModalV('<?php echo $video ?>')" href="#" type="button" title="Ver Video"><img src="Utilidades/eye.svg"></a>
                                            <?php
                                            }
                                            ?>

                                        </td>
                                        <td style="text-align: center" ;>
                                            <?php
                                            if ($kmz != NULL) {
                                            ?>
                                                <a onclick="openModalK(' <?php echo htmlentities(addslashes($kmz)) ?>')" href="#" type="button" title="Ver kmz"><img src="Utilidades/eye.svg"></a>

                                            <?php
                                            }
                                            ?>

                                        </td>
                                       
                                        
                                            <td style="text-align: center" ;>
                                             <?php
                                             if ($id == $id_session) {
                                                ?>
                                                <a href="#" data-href="eliminar.php?id=<?php echo $id; ?>" data-toggle="modal" data-target="#confirm-delete"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAYpJREFUSEt9VutZAzEMkydhBGATRoANGIFNYAQ2ATaAScKXxzlyLDd/muYaPyRZV0NfBqD5xzjay2Bo/TH/NO2PS/7VVuwUdGcU2dOlVQSfj30/v7XmhWcA7+pnBrw0w0fd/UTlRGQUv9YDgC+NjUP3COB7Fcx357Wj2x365EbAkqNdsDSbgaxOsCvSLFF+pRJHZm4SOVEy+3FMVqdmDW5BsVYbY5r2gnEXzVBO6wJyIa4OQhtN48uRo3xDPEflkmnuNZAt5D00ztOpEwQVcWtdBFFQeY5FN0L2RHKwBBU9Miewnm7DndWTfAEwtUyk6cH3oObQkRB9u02tgqgaemcpOUM4IL0HDtLQRX5PMkIVwSpILQGiinC28csZTm1Udj07EP4jgnL+jcjVZTHupKIaDz3QSkU5BllF5TjZEpZyIwdsdsxBqi4WpmkpB40YWtj8ArgL0yv42FnGwx8A/QVVd0DdPAF4A3AvByuj9gfgFYbPm4NW9X14RDVt4t/JYRU3UUhvJml2qeF/qkS+Hyu5ClIAAAAASUVORK5CYII=" /></a>

                                                <a href="editarU.php?id=<?php echo $id; ?>" class="edit" title="Editar" data-toggle="tooltip"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAN1JREFUSEvFlO0NwjAMBa8bwCQwAkzCKjACE8EIsAkbgJ6USKEkdj5a0T+V2vQufnY6sfI1rcxnRLABToDuV+CV22yvQNAbsA/QB3DMSXoEKfwZBDsgK2kVzOGHILgDklyAcxpVi6AUi3gxrm6BFYsE6oXiUkVfza6pwItFgixcLzxBDq4dlp7/TKolGIZbFSwCLwkWg5cEOjCa6bRx1ZnPm5DrwTss2oaR64aXKogCyYfgniCttjjn3u/eiih+2w2vOWjeBt333kl2Ad6Cmog8hjmZfxG07thcv3oPPg35Shmq75wnAAAAAElFTkSuQmCC" /></a>
                                            </td>
                                       
                                            <?php
                                            }
                                            ?>


                                    </tr>


                                <?php

                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        

            <?php  } ?>

            <?php include("footer.php"); ?>