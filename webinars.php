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
    $mysqli = new mysqli('localhost', 'proplaya_root', 'proplaya', 'proplaya_proplayas');
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
                <h2 style="text-align:center">WEBINARS</h2>
                <div class="container">
                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModal5">Nuevo Webinars</a>
                </div>

            </div>
            <br />
            <div style="background: white; border-radius: 20px;">

                <div class="row table">
                    <table class="table" style="background: white;" id="tabla1">
                        <thead>
                            <tr>
                                <th style="text-align: center" ;>T&Iacute;TULO</th>
                                <th style="text-align: center" ;>SUBT&Iacute;TULO</th>
                                <th style="text-align: center" ;>RESUMEN</th>
                                <th style="text-align: center" ;>AUTOR</th>
                                <th style="text-align: center" ;>C&Oacute;DIGO DEL NODO</th>
                                <th style="text-align: center" ;>PDF</th>
                                <th style="text-align: center" ;>IMAGEN</th>
                                <th style="text-align: center" ;>ACCIONES</th>
                                
                              
                            </tr>
                        </thead>
                        <?php
                        $cliente = new Database();
                        $listado = $cliente->Wbnsread();
                        ?>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_object($listado)) {
                                $id_wbns     = $row->id_wbns;
                                $titulo        = $row->titulo;
                                $subtitulo      = $row->subtitulo;
                                $resumen      = $row->resumen;
                                $autor_wbns      = $row->autor_wbns;
                                $codigoWbs      = $row->codigoWbs;
                                $img      = $row->img;
                                $pdf      = $row->pdf;
                               
                            ?>

                                <tr>
                                    <td style="text-align: center" ;><?php echo strtoupper($titulo)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($subtitulo)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($resumen)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($autor_wbns)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($codigoWbs)  ?></td>
                                    <td style="text-align: center" ;>
                                        <?php
                                        if ($pdf != NULL) {
                                        ?>
                                            <a onclick="openModalWbn('<?php echo $pdf ?>')" href="#" type="button" title="Ver PDF"><img src="Utilidades/eye.svg"></a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td style="text-align: center" ;>
                                        <?php
                                        if ($img != NULL) {
                                        ?>
                                            <a onclick="openModalWbnI('<?php echo $img ?>')" href="#" type="button" title="Ver Imagen"><img src="Utilidades/eye.svg"></a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td style="text-align: center" ;>
                                        <a href="#" data-href="eliminarwebns.php?id_wbns=<?php echo $id_wbns; ?>" data-toggle="modal" title="Eliminar" data-target="#confirm-delete"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAYpJREFUSEt9VutZAzEMkydhBGATRoANGIFNYAQ2ATaAScKXxzlyLDd/muYaPyRZV0NfBqD5xzjay2Bo/TH/NO2PS/7VVuwUdGcU2dOlVQSfj30/v7XmhWcA7+pnBrw0w0fd/UTlRGQUv9YDgC+NjUP3COB7Fcx357Wj2x365EbAkqNdsDSbgaxOsCvSLFF+pRJHZm4SOVEy+3FMVqdmDW5BsVYbY5r2gnEXzVBO6wJyIa4OQhtN48uRo3xDPEflkmnuNZAt5D00ztOpEwQVcWtdBFFQeY5FN0L2RHKwBBU9Miewnm7DndWTfAEwtUyk6cH3oObQkRB9u02tgqgaemcpOUM4IL0HDtLQRX5PMkIVwSpILQGiinC28csZTm1Udj07EP4jgnL+jcjVZTHupKIaDz3QSkU5BllF5TjZEpZyIwdsdsxBqi4WpmkpB40YWtj8ArgL0yv42FnGwx8A/QVVd0DdPAF4A3AvByuj9gfgFYbPm4NW9X14RDVt4t/JYRU3UUhvJml2qeF/qkS+Hyu5ClIAAAAASUVORK5CYII=" /></a>
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
                <h2 style="text-align:center">WEBINARS</h2>
                <div class="container">
                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModal5">Nuevo Webinars</a>
                </div>

            </div>
            <br />
            <div style="background: white; border-radius: 20px;">

                <div class="row table">
                <table class="table" style="background: white;" id="tabla1">
                        <thead>
                            <tr>
                                <th style="text-align: center" ;>TITULO</th>
                                <th style="text-align: center" ;>SUBTITULO</th>
                                <th style="text-align: center" ;>RESUMEN</th>
                                <th style="text-align: center" ;>AUTOR</th>
                                <th style="text-align: center" ;>CODIGO DEL NODO</th>
                                <th style="text-align: center" ;>PDF</th>
                                <th style="text-align: center" ;>IMAGEN</th>
                                <th style="text-align: center" ;>ACCIONES</th>
                            </tr>
                        </thead>
                        <?php
                        $cliente = new Database();
                        $listado = $cliente->Wbnsread();
                        ?>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_object($listado)) {
                                $id_wbns     = $row->id_wbns;
                                $titulo        = $row->titulo;
                                $subtitulo      = $row->subtitulo;
                                $resumen      = $row->resumen;
                                $autor_wbns      = $row->autor_wbns;
                                $codigoWbs      = $row->codigoWbs;
                                $img      = $row->img;
                                $pdf      = $row->pdf;

                                $idNodo = $row->fkid_nodo;
                                
                                if ($idNodo == $id_session) {
                               
                            ?>

                                <tr>
                                    <td style="text-align: center" ;><?php echo strtoupper($titulo)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($subtitulo)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($resumen)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($autor_wbns)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($codigoWbs)  ?></td>
                                    <td style="text-align: center" ;>
                                        <?php
                                        if ($pdf != NULL) {
                                        ?>
                                            <a onclick="openModalWbn('<?php echo $pdf ?>')" href="#" type="button" title="Ver Video"><img src="Utilidades/eye.svg"></a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td style="text-align: center" ;>
                                        <?php
                                        if ($img != NULL) {
                                        ?>
                                            <a onclick="openModalWbnI('<?php echo $img ?>')" href="#" type="button" title="Ver Video"><img src="Utilidades/eye.svg"></a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td style="text-align: center" ;>
                                   
                                        <a href="#" data-href="eliminarwebns.php?id_wbns=<?php echo $id_wbns; ?>" data-toggle="modal" data-target="#confirm-delete"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAYpJREFUSEt9VutZAzEMkydhBGATRoANGIFNYAQ2ATaAScKXxzlyLDd/muYaPyRZV0NfBqD5xzjay2Bo/TH/NO2PS/7VVuwUdGcU2dOlVQSfj30/v7XmhWcA7+pnBrw0w0fd/UTlRGQUv9YDgC+NjUP3COB7Fcx357Wj2x365EbAkqNdsDSbgaxOsCvSLFF+pRJHZm4SOVEy+3FMVqdmDW5BsVYbY5r2gnEXzVBO6wJyIa4OQhtN48uRo3xDPEflkmnuNZAt5D00ztOpEwQVcWtdBFFQeY5FN0L2RHKwBBU9Miewnm7DndWTfAEwtUyk6cH3oObQkRB9u02tgqgaemcpOUM4IL0HDtLQRX5PMkIVwSpILQGiinC28csZTm1Udj07EP4jgnL+jcjVZTHupKIaDz3QSkU5BllF5TjZEpZyIwdsdsxBqi4WpmkpB40YWtj8ArgL0yv42FnGwx8A/QVVd0DdPAF4A3AvByuj9gfgFYbPm4NW9X14RDVt4t/JYRU3UUhvJml2qeF/qkS+Hyu5ClIAAAAASUVORK5CYII=" /></a>
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
                <h2 style="text-align:center">WEBINARS</h2>
                <div class="container">
                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModal5">Nuevo webinars</a>
                </div>

            </div>
            <br />
            <div style="background: white; border-radius: 20px;">

                <div class="row table">
                <table class="table" style="background: white;" id="tabla1">
                        <thead>
                        <tr>
                                <th style="text-align: center" ;>TITULO</th>
                                <th style="text-align: center" ;>SUBTITULO</th>
                                <th style="text-align: center" ;>RESUMEN</th>
                                <th style="text-align: center" ;>AUTOR</th>
                                <th style="text-align: center" ;>CODIGO DEL NODO</th>
                                <th style="text-align: center" ;>PDF</th>
                                <th style="text-align: center" ;>IMAGEN</th>
                                <th style="text-align: center" ;>ACCIONES</th>
                            </tr>
                        </thead>
                        <?php
                        $cliente = new Database();
                        $listado = $cliente->WbnsIread();
                        ?>
                        <tbody>
                        <?php
                            while ($row = mysqli_fetch_object($listado)) {
                                $id_wbns     = $row->id_wbns;
                                $titulo        = $row->titulo;
                                $subtitulo      = $row->subtitulo;
                                $resumen      = $row->resumen;
                                $autor_wbns      = $row->autor_wbns;
                                $codigoWbs      = $row->codigoWbs;
                                $img      = $row->img;
                                $pdf      = $row->pdf;

                                $idNodo = $row->id_inte;
                               

                                if ($idNodo == $id_session2) {
                               
                            ?>

<tr>
                                    <td style="text-align: center" ;><?php echo strtoupper($titulo)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($subtitulo)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($resumen)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($autor_wbns)  ?></td>
                                    <td style="text-align: center" ;><?php echo strtoupper($codigoWbs)  ?></td>
                                    <td style="text-align: center" ;>
                                        <?php
                                        if ($pdf != NULL) {
                                        ?>
                                            <a onclick="openModalWbn('<?php echo $pdf ?>')" href="#" type="button" title="Ver PDF"><img src="Utilidades/eye.svg"></a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td style="text-align: center" ;>
                                        <?php
                                        if ($img != NULL) {
                                        ?>
                                            <a onclick="openModalWbnI('<?php echo $img ?>')" href="#" type="button" title="Ver Imagen"><img src="Utilidades/eye.svg"></a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td style="text-align: center" ;>
                                   
                                        <a href="#" data-href="eliminarwebns.php?id_wbns=<?php echo $id_wbns; ?>" data-toggle="modal" data-target="#confirm-delete"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAYpJREFUSEt9VutZAzEMkydhBGATRoANGIFNYAQ2ATaAScKXxzlyLDd/muYaPyRZV0NfBqD5xzjay2Bo/TH/NO2PS/7VVuwUdGcU2dOlVQSfj30/v7XmhWcA7+pnBrw0w0fd/UTlRGQUv9YDgC+NjUP3COB7Fcx357Wj2x365EbAkqNdsDSbgaxOsCvSLFF+pRJHZm4SOVEy+3FMVqdmDW5BsVYbY5r2gnEXzVBO6wJyIa4OQhtN48uRo3xDPEflkmnuNZAt5D00ztOpEwQVcWtdBFFQeY5FN0L2RHKwBBU9Miewnm7DndWTfAEwtUyk6cH3oObQkRB9u02tgqgaemcpOUM4IL0HDtLQRX5PMkIVwSpILQGiinC28csZTm1Udj07EP4jgnL+jcjVZTHupKIaDz3QSkU5BllF5TjZEpZyIwdsdsxBqi4WpmkpB40YWtj8ArgL0yv42FnGwx8A/QVVd0DdPAF4A3AvByuj9gfgFYbPm4NW9X14RDVt4t/JYRU3UUhvJml2qeF/qkS+Hyu5ClIAAAAASUVORK5CYII=" /></a>
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