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
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
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
                        $gdA                      = $Empleados->sanitize($_POST['gdA']);
                        $title                      = $Empleados->sanitize($_POST['title']);
                        $pais                      = $Empleados->sanitize($_POST['pais']);
                        $ciudad                      = $Empleados->sanitize($_POST['ciudad']);
                        $codigo                      = $Empleados->sanitize($_POST['codigo']);
                        $nombreN                      = $Empleados->sanitize($_POST['nombreN']);
                        $video                      = $Empleados->sanitize($_POST['video']);
                        $url                      = $Empleados->sanitize($_POST['url']);
                        $kmz                      = $Empleados->sanitize($_POST['kmz']);
                        $id                            = intval($_POST['id']);



                        $res = $Empleados->NUpdate($tnodo, $gdA, $title, $pais, $ciudad, $codigo, $nombreN, $url, $video,$kmz, $id);

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
                        <div class="row border shadow p-5 rounded" style="width: 1000px; height: 750px;">
                            <center>
                                <div>
                                    <h2>Editar Nodo</h2>
                                </div>
                            </center>
                            <form method="POST">
                                <input type="hidden" name="id" id="id" class='form-control' maxlength="100" value="<?php echo $datos_cliente->id; ?> ">
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label" style="position:relative; top:7px;">Tipo de Nodo:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="tnodo" name="tnodo" required>
                                            <option value="">Seleccione Tipo de Nodo:</option>
                                            <?php
                                            $query = $mysqli->query("SELECT * FROM tnodo");
                                            while ($valores = mysqli_fetch_array($query)) {
                                                echo '<option value="' . $valores[idtiponodo] . '">' . $valores[tnodo] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label" style="position:relative; top:7px;">Grado Academico:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="gdA" name="gdA" required>
                                            <option value="<?php echo $datos_cliente->gdA; ?>"><?php echo $datos_cliente->gdA; ?></option>
                                            <option value="Dr">Dr</option>
                                            <option value="Dra">Dra</option>
                                            <option value="Ing">Ing</option>
                                            <option value="Mtro">Mtro</option>
                                            <option value="Mtra">Mtra</option>
                                            <option value="Lic">Lic</option>
                                            <option value="Ciudadano">Ciudadano</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label" style="position:relative; top:7px;">Nombre del Coordinador:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" required value="<?php echo $datos_cliente->title; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label" style="position:relative; top:7px;">Pais:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pais" required value="<?php echo $datos_cliente->pais; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label" style="position:relative; top:7px;">Ciudad:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ciudad" required value="<?php echo $datos_cliente->ciudad; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label" style="position:relative; top:7px;">KMZ-KML:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="kmz" value="<?php echo $datos_cliente->kmz; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label" style="position:relative; top:7px;">Codigo:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="codigo" required value="<?php echo $datos_cliente->codigo; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label" style="position:relative; top:7px;">Nombre del Nodo:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nombreN" required value="<?php echo $datos_cliente->nombreN; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label" style="position:relative; top:7px;">Video: <SPAN title="Insertar la URL Ej.(https://www.youtube.com/embed/3-rSmBtMl3k)"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAeBJREFUSEu1VdtNw0AQnHXIN3QAqYBQAZQQKgAqACvOBzkjLJHjA4yACggVkHQAFZB0EDqA74gsusMO5/P5ERCWrEjO7szu7N4c4Z8f+md8VBLcSHnIwC6AdvKqmibqZeZRLwzHZUUWEsSXlx0w3wLYquhyBiI/6PdHrjgnQSzlHYDjVeQjortuv+/bOTmC34AboPeBECcmSYYgkeXJUfkbiE4aREp7fDK3wTwEsJ6LJdo35coSSDkDsGklfTTm8y0/it7N77dRtPHZbKp4m2QWCNFKY5cEybY8ODQ86goxvL642CPPU0MHLxZ+7+zsuSgHRhdLgngwGILowCZoeF7LPz2dxYPBBETbyf+TQIidKynbHvCak4n5MQjDQ/XdJDABSheIgHFXiE4hAaALyBJIyXXWkoGXtfm8o2ZyLWVEwLkrLxBCF//TQQ0CBd4TYk8lFuqfsOUJsho7m0nnUQUO5mkQhspaMjNwDtk6NJHeIkD/Fj7OIX97j+uQ1RlNNsa1pioidh+0ZXKqa1w+r7dAiKVB1rUKTVKLoMwqki5WdlJDn3KzSwN/6ag58MwW2ZNMnFV1Y5ufHaqddqULx0TQRItFR1+XqRcxT/W16XmjIuAUo/JOXn1HrY39K0BV/heMYM8ZpDpEzwAAAABJRU5ErkJggg==" /></SPAN></label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="video" value="<?php echo $datos_cliente->video; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <label for="url" class="col-sm-12 control-label">Archivo</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="url" value="<?php echo $datos_cliente->url; ?>">
                                    </div>
                                </div>


                                <a type="button" href="inicio.php" class="btn btn-secondary">Regresar</a>
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