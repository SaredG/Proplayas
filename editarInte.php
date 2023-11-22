<?php
session_start();

if (!isset($_SESSION['fkroles'])) {
    header('location: index.php');
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
if (isset($_GET['id_inte'])) {
    $id_inte = intval($_GET['id_inte']);
} else {
    header("location: login.php");
}
?>
<?php
$mysqli = new mysqli('localhost', 'proplaya_root', 'proplaya', 'proplaya_proplayas');
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
                        $nombreinte                        = $Empleados->sanitize($_POST['nombreinte']);
                        $formaciongd                        = $Empleados->sanitize($_POST['formaciongd']);
                        $formacionpg                        = $Empleados->sanitize($_POST['formacionpg']);
                        $area_ex                        = $Empleados->sanitize($_POST['area_ex']);
                        $contacto                        = $Empleados->sanitize($_POST['contacto']);
                        $id_inte                            = intval($_POST['id_inte']);



                        $res = $Empleados->InteUpdate($nombreinte,$formaciongd,$formacionpg,$area_ex,$contacto, $id_inte);

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
                    $datos_cliente = $Empleados->Isingle_record($id_inte);
                    ?>
                    <div class="p-3 mb-2 bg-white text-dark">
                        <div class="row border shadow p-5 rounded">
                            <center>
                                <div>
                                    <h2>Editar Integrante del Nodo</h2>
                                </div>
                            </center>
                            <form method="POST">
                                <input type="hidden" name="id_inte" id="id_inte" class='form-control' maxlength="100" value="<?php echo $datos_cliente->id_inte; ?> ">
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label" style="position:relative; top:7px;">NOMBRE:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nombreinte" required value="<?php echo $datos_cliente->nombreinte; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label" style="position:relative; top:7px;">FORMACION GRADO:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="formaciongd" required value="<?php echo $datos_cliente->formaciongd; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label" style="position:relative; top:7px;">FORMACION POSTGRADO:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="formacionpg" required value="<?php echo $datos_cliente->formacionpg; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label" style="position:relative; top:7px;">AREAS DE EXPERTICIA:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="area_ex" required value="<?php echo $datos_cliente->area_ex; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label" style="position:relative; top:7px;">CORREO ELECTRÓNICO:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="contacto" required value="<?php echo $datos_cliente->contacto; ?>">
                                    </div>
                                </div>

                                <a type="button" href="integrantes.php" class="btn btn-secondary">Regresar</a>
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