<?php
session_start();

if (!isset($_SESSION['fkroles'])) {
    header('location: index.php');
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
if (isset($_GET['idtiponodo'])) {
    $idtiponodo = intval($_GET['idtiponodo']);
} else {
    header("location: index.php");
}
?>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'proplayas');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<body>
    <style type="text/css">
        body {
            background-image: url(Utilidades/vintage-wallpaper-background.jpg)
        }
    </style>

    <center style="padding-top: 8%;">
        <div>
            <div class="container d-flex justify-content-center align-items-center" style="min-height: 75vh">
                <div class="table-wrapper">
                    <div class="table-title">

                    </div>

                    <?php
                    $Empleados = new Database();
                    if (isset($_POST) && !empty($_POST)) {
                        $tnodo                        = $Empleados->sanitize($_POST['tnodo']);
                        $idtiponodo                            = intval($_POST['idtiponodo']);



                        $res = $Empleados->TpUpdate($tnodo, $idtiponodo);

                        if ($res) {
                            $message = " Datos actualizados con éxitos,puede regresar a al inicio";
                            $class = "alert alert-success";
                        } else {
                            $message = "No se pudieron insertar los datos";
                            $class = "alert alert-danger";
                        }

                    ?>
                        <div class="<?php echo $class ?>">
                            <?php echo $message; ?>
                        </div>
                    <?php
                    }
                    $datos_cliente = $Empleados->Tpsingle_record($idtiponodo);
                    ?>
                    <div class="p-3 mb-2 bg-white text-dark">
                        <div class="row border shadow p-5 rounded">
                            <center>
                                <div>
                                    <h2>Editar Tipo del Nodo</h2>
                                </div>
                            </center>
                            <form method="POST">
                                <input type="hidden" name="idtiponodo" id="idtiponodo" class='form-control' maxlength="100" value="<?php echo $datos_cliente->idtiponodo; ?> ">

                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label" style="position:relative; top:7px;">Nombre del Tipo:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tnodo" required value="<?php echo $datos_cliente->tnodo; ?>">
                                    </div>
                                </div>
                                <a type="button" href="tipos_nodos.php" class="btn btn-secondary">Regresar</a>
                                <button type="submit" class="btn btn-success">Actualizar datos</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <center>