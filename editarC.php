<?php
session_start();

if (!isset($_SESSION['fkroles'])) {
    header('location: index.php');
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
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

} else if  (isset($_GET['id_inte'])) {
    $id_inte = intval($_GET['id_inte']);
  
}else {
    header("location: login.php");
}
?>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'proplayas');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<?php
if ($fkroles == "1") {

?>
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
                        $psswd                        = $Empleados->sanitize($_POST['psswd']);
                        $id                            = intval($_POST['id']);



                        $res = $Empleados->PsUpdate($psswd, $id);

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
                    $datos_cliente = $Empleados->Nsingle_record($id);
                    ?>
                    <div class="p-3 mb-2 bg-white text-dark">
                        <div class="row border shadow p-5 rounded">
                            <center>
                                <div>
                                    <h2>Editar Contraseña Del Usuario</h2>
                                </div>
                            </center>
                            <form method="POST">
                                <input type="hidden" name="id" id="id" class='form-control' maxlength="100" value="<?php echo $datos_cliente->id; ?> ">

                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label" style="position:relative; top:7px;">Contraseña:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="psswd" required value="<?php echo $datos_cliente->psswd; ?>">
                                    </div>
                                </div>
                                <a type="button" href="tablaC.php" class="btn btn-secondary">Regresar</a>
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

        <?php  } else if ($fkroles == '0') {
    ?>
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
                        $psswd                        = $Empleados->sanitize($_POST['psswd']);
                        $id                            = intval($_POST['id']);



                        $res = $Empleados->PsUpdate($psswd, $id);

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
                    $datos_cliente = $Empleados->Nsingle_record($id);
                    ?>
                    <div class="p-3 mb-2 bg-white text-dark">
                        <div class="row border shadow p-5 rounded">
                            <center>
                                <div>
                                    <h2>Editar Contraseña Del Usuario</h2>
                                </div>
                            </center>
                            <form method="POST">
                                <input type="hidden" name="id" id="id" class='form-control' maxlength="100" value="<?php echo $datos_cliente->id; ?> ">

                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label" style="position:relative; top:7px;">Contraseña:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="psswd" required value="<?php echo $datos_cliente->psswd; ?>">
                                    </div>
                                </div>
                                <a type="button" href="tablaC.php" class="btn btn-secondary">Regresar</a>
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



<?php  } else if ($fkroles == '2') {
    ?>
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
                        $psswd                        = $Empleados->sanitize($_POST['psswd']);
                        $id_inte                            = intval($_POST['id_inte']);



                        $res = $Empleados->PsUpdate($psswd, $id_inte);

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
                                    <h2>Editar Contraseña Del Usuario</h2>
                                </div>
                            </center>
                            <form method="POST">
                                <input type="hidden" name="id_inte" id="id_inte" class='form-control' maxlength="100" value="<?php echo $datos_cliente->id_inte; ?> ">

                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label" style="position:relative; top:7px;">Contraseña:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="psswd" required value="<?php echo $datos_cliente->psswd; ?>">
                                    </div>
                                </div>
                                <a type="button" href="tablaC.php" class="btn btn-secondary">Regresar</a>
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


<?php  } ?>