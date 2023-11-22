<?php
session_start();
if (!isset($_SESSION['fkroles'])) {
    header('location: login.php');
} else {
    if ($_SESSION['fkroles'] != '1' && '0' && '2') {
        header('location: areas.php');
    }
}
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
                <h2 style="text-align:center">WEBSERIE</h2>
                <div class="container">
                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModal4">Nueva Webserie</a>
                </div>

            </div>
            <br />
            <div style="background: white; border-radius: 20px;">

                <div class="row table">
                    <table class="table" style="background: white;" id="tabla1">
                        <thead>
                            <tr>
                            <th style="text-align: center" ;>TITULO</th>
                                <th style="text-align: center" ;>AUTOR</th>
                                <th style="text-align: center" ;>CODIGO DEL NODO</th>
                                <th style="text-align: center" ;>NUMERO DE CAPITULO</th>
                                <th style="text-align: center" ;>CONTENIDO</th>
                                <th style="text-align: center" ;>IMAGEN</th>
                                <th style="text-align: center" ;>VIDEO</th>
                                <th style="text-align: center" ;>ACCIONES</th>
                            </tr>
                        </thead>
                        <?php
                        $cliente = new Database();
                        $listado = $cliente->Wbsread();
                        ?>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_object($listado)) {
                                $id_wbs     = $row->id_wbs;
                                $titulo        = $row->titulo;
                                $videowbs      = $row->videowbs;
                                $imagen      = $row->imagen;
                                $contenidoWbs      = $row->contenidoWbs;
                                $autor_wbs      = $row->autor_wbs;
                                $codigoWbs      = $row->codigoWbs;
                                $numC      = $row->numC;
                               


                               
                            ?>

                                <tr>
                                <td style="text-align: center" ;><?php echo strtoupper($titulo)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($autor_wbs)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($codigoWbs)  ?></td>
                                    <td style="text-align: center" ;> Cap.<?php echo strtoupper($numC)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($contenidoWbs)  ?></td>
                                    <td style="text-align: center" ;>
                                        <?php
                                        if ($imagen != NULL) {
                                        ?>
                                            <a onclick="openModalWbnI('<?php echo $imagen ?>')" href="#" type="button" title="Ver Imagen"><img src="Utilidades/eye.svg"></a>
                                        <?php
                                        }
                                        ?>

                                    </td>
                                    <td style="text-align: center" ;>
                                            <?php
                                            if ($videowbs != NULL) {
                                            ?>
                                                <a onclick="openModalV('<?php echo $videowbs ?>')" href="#" type="button" title="Ver Video"><img src="Utilidades/eye.svg"></a>
                                            <?php
                                            }
                                            ?>

                                        </td>
                                    <td style="text-align: center" ;>
                                        <a href="#" data-href="eliminarwbs.php?id_wbs=<?php echo $id_wbs; ?>" data-toggle="modal" data-target="#confirm-delete"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAYpJREFUSEt9VutZAzEMkydhBGATRoANGIFNYAQ2ATaAScKXxzlyLDd/muYaPyRZV0NfBqD5xzjay2Bo/TH/NO2PS/7VVuwUdGcU2dOlVQSfj30/v7XmhWcA7+pnBrw0w0fd/UTlRGQUv9YDgC+NjUP3COB7Fcx357Wj2x365EbAkqNdsDSbgaxOsCvSLFF+pRJHZm4SOVEy+3FMVqdmDW5BsVYbY5r2gnEXzVBO6wJyIa4OQhtN48uRo3xDPEflkmnuNZAt5D00ztOpEwQVcWtdBFFQeY5FN0L2RHKwBBU9Miewnm7DndWTfAEwtUyk6cH3oObQkRB9u02tgqgaemcpOUM4IL0HDtLQRX5PMkIVwSpILQGiinC28csZTm1Udj07EP4jgnL+jcjVZTHupKIaDz3QSkU5BllF5TjZEpZyIwdsdsxBqi4WpmkpB40YWtj8ArgL0yv42FnGwx8A/QVVd0DdPAF4A3AvByuj9gfgFYbPm4NW9X14RDVt4t/JYRU3UUhvJml2qeF/qkS+Hyu5ClIAAAAASUVORK5CYII=" /></a>
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
                <h2 style="text-align:center">WEBSERIE</h2>
                <div class="container">
                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModal4">Nueva Webserie</a>
                </div>

            </div>
            <br />
            <div style="background: white; border-radius: 20px;">

                <div class="row table">
                <table class="table" style="background: white;" id="tabla1">
                        <thead>
                            <tr>
                                <th style="text-align: center" ;>TITULO</th>
                                <th style="text-align: center" ;>AUTOR</th>
                                <th style="text-align: center" ;>CODIGO DEL NODO</th>
                                <th style="text-align: center" ;>NUMERO DE CAPITULO</th>
                                <th style="text-align: center" ;>CONTENIDO</th>
                                <th style="text-align: center" ;>IMAGEN</th>
                                <th style="text-align: center" ;>VIDEO</th>
                                <th style="text-align: center" ;>ACCIONES</th>
                            </tr>
                        </thead>
                        <?php
                        $cliente = new Database();
                        $listado = $cliente->Wbsread();
                        ?>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_object($listado)) {
                                $id_wbs     = $row->id_wbs;
                                $titulo        = $row->titulo;
                                $contenidoWbs      = $row->contenidoWbs;
                                $videowbs      = $row->videowbs;
                                $imagen      = $row->imagen;
                                $autor_wbs      = $row->autor_wbs;
                                $codigoWbs      = $row->codigoWbs;
                                $numC      = $row->numC;     
                                $idNodo = $row->fkid_nodo;
                                
                                if ($idNodo == $id_session) {
                            ?>

                                <tr>
                                    <td style="text-align: center" ;><?php echo strtoupper($titulo)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($autor_wbs)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($codigoWbs)  ?></td>
                                    <td style="text-align: center" ;> Cap.<?php echo strtoupper($numC)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($contenidoWbs)  ?></td>
                                    
                                    
                                  
                                    <td style="text-align: center" ;>
                                        <?php
                                        if ($imagen != NULL) {
                                        ?>
                                            <a onclick="openModalWbnI('<?php echo $imagen ?>')" href="#" type="button" title="Ver Imagen"><img src="Utilidades/eye.svg"></a>
                                        <?php
                                        }
                                        ?>

                                    </td>
                                    <td style="text-align: center" ;>
                                            <?php
                                            if ($videowbs != NULL) {
                                            ?>
                                                <a onclick="openModalV('<?php echo $videowbs ?>')" href="#" type="button" title="Ver Video"><img src="Utilidades/eye.svg"></a>
                                            <?php
                                            }
                                            ?>

                                        </td>
                                    <td style="text-align: center" ;>
                                    
                                        <a href="#" data-href="eliminarwbs.php?id_wbs=<?php echo $id_wbs; ?>" data-toggle="modal" data-target="#confirm-delete"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAYpJREFUSEt9VutZAzEMkydhBGATRoANGIFNYAQ2ATaAScKXxzlyLDd/muYaPyRZV0NfBqD5xzjay2Bo/TH/NO2PS/7VVuwUdGcU2dOlVQSfj30/v7XmhWcA7+pnBrw0w0fd/UTlRGQUv9YDgC+NjUP3COB7Fcx357Wj2x365EbAkqNdsDSbgaxOsCvSLFF+pRJHZm4SOVEy+3FMVqdmDW5BsVYbY5r2gnEXzVBO6wJyIa4OQhtN48uRo3xDPEflkmnuNZAt5D00ztOpEwQVcWtdBFFQeY5FN0L2RHKwBBU9Miewnm7DndWTfAEwtUyk6cH3oObQkRB9u02tgqgaemcpOUM4IL0HDtLQRX5PMkIVwSpILQGiinC28csZTm1Udj07EP4jgnL+jcjVZTHupKIaDz3QSkU5BllF5TjZEpZyIwdsdsxBqi4WpmkpB40YWtj8ArgL0yv42FnGwx8A/QVVd0DdPAF4A3AvByuj9gfgFYbPm4NW9X14RDVt4t/JYRU3UUhvJml2qeF/qkS+Hyu5ClIAAAAASUVORK5CYII=" /></a>
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

<body style="padding-top: 7%;">
        <div class="container">
            <div class="row">
                <h2 style="text-align:center">WEBSERIE</h2>
                <div class="container">
                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModal4">Nueva Webserie</a>
                </div>

            </div>
            <br />
            <div style="background: white; border-radius: 20px;">

                <div class="row table">
                <table class="table" style="background: white;" id="tabla1">
                        <thead>
                            <tr>
                            <th style="text-align: center" ;>TITULO</th>
                                <th style="text-align: center" ;>AUTOR</th>
                                <th style="text-align: center" ;>CODIGO DEL NODO</th>
                                <th style="text-align: center" ;>NUMERO DE CAPITULO</th>
                                <th style="text-align: center" ;>CONTENIDO</th>
                                <th style="text-align: center" ;>IMAGEN</th>
                                <th style="text-align: center" ;>VIDEO</th>
                                <th style="text-align: center" ;>ACCIONES</th>
                            </tr>
                        </thead>
                        <?php
                        $cliente = new Database();
                        $listado = $cliente->WbsIread();
                        ?>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_object($listado)) {
                                $id_wbs     = $row->id_wbs;
                                $titulo        = $row->titulo;
                                $videowbs      = $row->videowbs;
                                $imagen      = $row->imagen;
                                $autor_wbs      = $row->autor_wbs;
                                $contenidoWbs      = $row->contenidoWbs;
                                $codigoWbs      = $row->codigoWbs;
                                $numC      = $row->numC;
                                $idNodo = $row->id_inte;
                               

                                if ($idNodo == $id_session2) {
                               
                            ?>

                                <tr>
                                <td style="text-align: center" ;><?php echo strtoupper($titulo)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($autor_wbs)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($codigoWbs)  ?></td>
                                    <td style="text-align: center" ;> Cap.<?php echo strtoupper($numC)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($contenidoWbs)  ?></td>
                                    <td style="text-align: center" ;>
                                        <?php
                                        if ($imagen != NULL) {
                                        ?>
                                            <a onclick="openModalWbnI('<?php echo $imagen ?>')" href="#" type="button" title="Ver Video"><img src="Utilidades/eye.svg"></a>
                                        <?php
                                        }
                                        ?>

                                    </td>
                                    <td style="text-align: center" ;>
                                            <?php
                                            if ($videowbs != NULL) {
                                            ?>
                                                <a onclick="openModalV('<?php echo $videowbs ?>')" href="#" type="button" title="Ver Video"><img src="Utilidades/eye.svg"></a>
                                            <?php
                                            }
                                            ?>

                                        </td>
                                        <td style="text-align: center" ;>
                                      
                                        <a href="#" data-href="eliminarwbs.php?id_wbs=<?php echo $id_wbs; ?>" data-toggle="modal" data-target="#confirm-delete"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAYpJREFUSEt9VutZAzEMkydhBGATRoANGIFNYAQ2ATaAScKXxzlyLDd/muYaPyRZV0NfBqD5xzjay2Bo/TH/NO2PS/7VVuwUdGcU2dOlVQSfj30/v7XmhWcA7+pnBrw0w0fd/UTlRGQUv9YDgC+NjUP3COB7Fcx357Wj2x365EbAkqNdsDSbgaxOsCvSLFF+pRJHZm4SOVEy+3FMVqdmDW5BsVYbY5r2gnEXzVBO6wJyIa4OQhtN48uRo3xDPEflkmnuNZAt5D00ztOpEwQVcWtdBFFQeY5FN0L2RHKwBBU9Miewnm7DndWTfAEwtUyk6cH3oObQkRB9u02tgqgaemcpOUM4IL0HDtLQRX5PMkIVwSpILQGiinC28csZTm1Udj07EP4jgnL+jcjVZTHupKIaDz3QSkU5BllF5TjZEpZyIwdsdsxBqi4WpmkpB40YWtj8ArgL0yv42FnGwx8A/QVVd0DdPAF4A3AvByuj9gfgFYbPm4NW9X14RDVt4t/JYRU3UUhvJml2qeF/qkS+Hyu5ClIAAAAASUVORK5CYII=" /></a>
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