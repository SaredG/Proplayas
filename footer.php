<footer class="bg-dark text-center text-white">
  <style type="text/css">
 footer {
  text-align: center;
  position: absolute;
  width: 100%;
  bottom: -150px;
}
</style>
    <div class="container p-2 pb-0">

        <section class="mb-1">
            <!-- Facebook -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;"
                href="https://www.facebook.com/redproplayas/" role="button"><i class='bx bxl-facebook'></i></a>

            <!-- Twitter -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;"
                href="https://twitter.com/rproplayas" role="button"><i class='bx bxl-twitter'></i></i></a>

            <!-- Instagram -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;"
                href="https://www.instagram.com/red_proplayas/?hl=es" role="button"><i class='bx bxl-instagram'></i></a>

            <!-- Linkedin -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;"
                href="https://www.linkedin.com/in/omar-cervantes-5896b445" role="button"><i
                    class='bx bxl-linkedin'></i></a>

        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        &copy; 2022 RedIberoamericana de Gestion y Certificacion de Playas (PROPLAYAS)
    </div>
    <!-- Copyright -->
</footer>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<?php
    $mysqli = new mysqli('localhost', 'root', '', 'proplayas');
  
    ?>

<!-- Modal Crear Nodo-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Nodo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <div class="container">
                    <form class="form-horizontal" enctype="multipart/form-data" autocomplete="off" id="form1">

                        <div class="form-group">
                            <label for="tnodo" class="col-sm-12 control-label">Tipo de Nodo</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="tnodo" name="tnodo">
                                    <option value="0">Seleccione:</option>
                                    <?php
                                        $query = $mysqli->query("SELECT * FROM tnodo");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores[idtiponodo] . '">' . $valores[tnodo] . '</option>';
                                        }
                                        ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gdA" class="col-sm-12 control-label">Grado Acad&eacute;mico</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="gdA" name="gdA">
                                    <option value="">Selecione Grado Academico</option>
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
                        <div class="form-group">
                            <label for="title" class="col-sm-12 control-label">Nombre Del Coordinador</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="codigo" class="col-sm-12 control-label">C&oacute;digo</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="codigo" name="codigo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-12 control-label">Nombre Del Nodo</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="nombreN" name="nombreN">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pais" class="col-sm-12 control-label">Pa&iacute;s</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="pais" name="pais">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ciudad" class="col-sm-12 control-label">Ciudad</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="ciudad" name="ciudad">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="video" class="col-sm-12">Video <spam
                                    title="Insertar la URL Ej.(https://www.youtube.com/embed/3-rSmBtMl3k)"> <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAeBJREFUSEu1VdtNw0AQnHXIN3QAqYBQAZQQKgAqACvOBzkjLJHjA4yACggVkHQAFZB0EDqA74gsusMO5/P5ERCWrEjO7szu7N4c4Z8f+md8VBLcSHnIwC6AdvKqmibqZeZRLwzHZUUWEsSXlx0w3wLYquhyBiI/6PdHrjgnQSzlHYDjVeQjortuv+/bOTmC34AboPeBECcmSYYgkeXJUfkbiE4aREp7fDK3wTwEsJ6LJdo35coSSDkDsGklfTTm8y0/it7N77dRtPHZbKp4m2QWCNFKY5cEybY8ODQ86goxvL642CPPU0MHLxZ+7+zsuSgHRhdLgngwGILowCZoeF7LPz2dxYPBBETbyf+TQIidKynbHvCak4n5MQjDQ/XdJDABSheIgHFXiE4hAaALyBJIyXXWkoGXtfm8o2ZyLWVEwLkrLxBCF//TQQ0CBd4TYk8lFuqfsOUJsho7m0nnUQUO5mkQhspaMjNwDtk6NJHeIkD/Fj7OIX97j+uQ1RlNNsa1pioidh+0ZXKqa1w+r7dAiKVB1rUKTVKLoMwqki5WdlJDn3KzSwN/6ag58MwW2ZNMnFV1Y5ufHaqddqULx0TQRItFR1+XqRcxT/W16XmjIuAUo/JOXn1HrY39K0BV/heMYM8ZpDpEzwAAAABJRU5ErkJggg==" />
                                </spam>
                            </label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="video" name="video">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kmz" class="col-sm-12 control-label">KMZ-KML <spam
                                    title="Insertar la URL Ej.(https://kmlviewer.nsspot.net/?state=%7Bids:%5B1KgIKoFPDIzZ0T4Ox-rtiQ1roykYULmn1%5D,action:open,userId:111977418720149780886,resourceKeys:%7B%7D%7D)">
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAeBJREFUSEu1VdtNw0AQnHXIN3QAqYBQAZQQKgAqACvOBzkjLJHjA4yACggVkHQAFZB0EDqA74gsusMO5/P5ERCWrEjO7szu7N4c4Z8f+md8VBLcSHnIwC6AdvKqmibqZeZRLwzHZUUWEsSXlx0w3wLYquhyBiI/6PdHrjgnQSzlHYDjVeQjortuv+/bOTmC34AboPeBECcmSYYgkeXJUfkbiE4aREp7fDK3wTwEsJ6LJdo35coSSDkDsGklfTTm8y0/it7N77dRtPHZbKp4m2QWCNFKY5cEybY8ODQ86goxvL642CPPU0MHLxZ+7+zsuSgHRhdLgngwGILowCZoeF7LPz2dxYPBBETbyf+TQIidKynbHvCak4n5MQjDQ/XdJDABSheIgHFXiE4hAaALyBJIyXXWkoGXtfm8o2ZyLWVEwLkrLxBCF//TQQ0CBd4TYk8lFuqfsOUJsho7m0nnUQUO5mkQhspaMjNwDtk6NJHeIkD/Fj7OIX97j+uQ1RlNNsa1pioidh+0ZXKqa1w+r7dAiKVB1rUKTVKLoMwqki5WdlJDn3KzSwN/6ag58MwW2ZNMnFV1Y5ufHaqddqULx0TQRItFR1+XqRcxT/W16XmjIuAUo/JOXn1HrY39K0BV/heMYM8ZpDpEzwAAAABJRU5ErkJggg==" /></label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="kmz" name="kmz">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-12 control-label">Archivo</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" id="file" name="file" multiple="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" onclick="onSubmitForm()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!----MODAL TIPOS DE NODOS --->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Tipo de Nodo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <div class="container">
                    <form class="form-horizontal" enctype="multipart/form-data" autocomplete="off" id="form2">

                        <div class="form-group">
                            <label for="title" class="col-sm-12 control-label">Nombre del Tipo de Nodo</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="tTipoNodo" name="tTipoNodo">
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="onSubmitForm2()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Crear Blog-->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <div class="container">
                    <form class="form-horizontal" enctype="multipart/form-data" autocomplete="off" id="form3">
                        <input type="text" class="form-control" id="nodos" name="nodos" hidden
                            value="<?php echo $nodo; ?>">
                        <input type="text" class="form-control" id="autor" name="autor" hidden value="<?php 
                        if ($fkroles == 2){
                            echo $nombreinte;
                        }
                        else {
                            echo $title; 
                        } ?>" <div class="form-group">
                        <label for="titulo" class="col-sm-12 control-label">T&iacute;tulo</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="titulo" name="titulo">
                        </div>
                </div>
                <div class="form-group">
                    <label for="contenido" class="col-sm-12 control-label">Contenido</label>
                    <div class="col-sm-12">
                        <textarea type="textarea" class="form-control" id="contenido" name="contenido"
                            style="WIDTH: 710px; HEIGHT: 110px"></textarea>
                    </div>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="onSubmitForm3()">Guardar</button>
            </div>
        </div>
    </div>
</div>
</div>


<!----MODAL INTEGRANTES --->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">NUEVO INTEGRANTE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <div class="container">
                    <form class="form-horizontal" enctype="multipart/form-data" autocomplete="off" id="form4">
                        <input type="text" class="form-control" id="idUsrsession" name="idUsrsession" hidden
                            value="<?php echo $id_session; ?>">
                        <input type="text" class="form-control" id="fkroles" name="fkroles" hidden value="2">
                        <input type="text" class="form-control" id="psswd" name="psswd" hidden
                            value="<?php echo $nombreU; ?>">
                        <input type="text" class="form-control" id="codigo" name="codigo" hidden
                            value="<?php echo $nodo; ?>">


                        <div class="form-group">
                            <label for="title" class="col-sm-12 control-label">Nombre Completo</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="nombreinte" name="nombreinte">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-sm-12 control-label">Formaci&oacute;n Grado</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="formaciongd" name="formaciongd">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-sm-12 control-label">Formaci&oacute;n Posgrado</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="formacionpg" name="formacionpg">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-sm-12 control-label">&Aacute;reas de Experticia</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="area_ex" name="area_ex">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-sm-12 control-label">Contacto</label>
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="contacto" name="contacto">
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="onSubmitForm4()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Crear Webserie-->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Webserie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <div class="container">
                    <form class="form-horizontal" enctype="multipart/form-data" autocomplete="off" id="form5">
                        <input type="text" class="form-control" id="idUsrsession" name="idUsrsession" hidden value="<?php 
                        if ($fkroles == 2){
                            echo $id_session2;
                        }
                        else {
                            echo $id_session; 
                        } ?>">
                        <input type="text" class="form-control" id="codigoWbs" name="codigoWbs" hidden
                            value="<?php echo $nodo; ?>">
                        <input type="text" class="form-control" id="autor_wbs" name="autor_wbs" hidden value="<?php 
                        if ($fkroles == 2){
                            echo $nombreinte;
                        }
                        else {
                            echo $title; 
                        } ?>">

                        <div class="form-group">
                            <label for="titulo" class="col-sm-12 control-label">T&iacute;tulo</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="titulo" name="titulo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="titulo" class="col-sm-12 control-label">Contenido</label>
                            <div class="col-sm-12">
                                <textarea type="text" class="form-control" id="contenidoWbs"
                                    name="contenidoWbs"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contenido" class="col-sm-12 control-label">Numero del Cap&iacute;tulo</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" id="numC" name="numC">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="video" class="col-sm-12">Video <spam
                                    title="Insertar la URL Ej.(https://www.youtube.com/embed/3-rSmBtMl3k)"> <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAeBJREFUSEu1VdtNw0AQnHXIN3QAqYBQAZQQKgAqACvOBzkjLJHjA4yACggVkHQAFZB0EDqA74gsusMO5/P5ERCWrEjO7szu7N4c4Z8f+md8VBLcSHnIwC6AdvKqmibqZeZRLwzHZUUWEsSXlx0w3wLYquhyBiI/6PdHrjgnQSzlHYDjVeQjortuv+/bOTmC34AboPeBECcmSYYgkeXJUfkbiE4aREp7fDK3wTwEsJ6LJdo35coSSDkDsGklfTTm8y0/it7N77dRtPHZbKp4m2QWCNFKY5cEybY8ODQ86goxvL642CPPU0MHLxZ+7+zsuSgHRhdLgngwGILowCZoeF7LPz2dxYPBBETbyf+TQIidKynbHvCak4n5MQjDQ/XdJDABSheIgHFXiE4hAaALyBJIyXXWkoGXtfm8o2ZyLWVEwLkrLxBCF//TQQ0CBd4TYk8lFuqfsOUJsho7m0nnUQUO5mkQhspaMjNwDtk6NJHeIkD/Fj7OIX97j+uQ1RlNNsa1pioidh+0ZXKqa1w+r7dAiKVB1rUKTVKLoMwqki5WdlJDn3KzSwN/6ag58MwW2ZNMnFV1Y5ufHaqddqULx0TQRItFR1+XqRcxT/W16XmjIuAUo/JOXn1HrY39K0BV/heMYM8ZpDpEzwAAAABJRU5ErkJggg==" />
                                </spam>
                            </label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="videowbs" name="videowbs">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-12 control-label">Imagen</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" id="img" name="img" multiple="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="onSubmitForm5()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Crear Webinars-->
<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Webinars</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <div class="container">
                    <form class="form-horizontal" enctype="multipart/form-data" autocomplete="off" id="form6">
                        <input type="text" class="form-control" id="idUsrsession" name="idUsrsession" hidden value="<?php   
                        if ($fkroles == 2){
                            echo $id_session2;
                        }
                        else {
                            echo $id_session; 
                        } ?>">
                        <input type="text" class="form-control" id="codigoWbs" name="codigoWbs" hidden
                            value="<?php echo $nodo; ?>">
                        <input type="text" class="form-control" id="autor_wbns" name="autor_wbns" hidden value="<?php 
                        if ($fkroles == 2){
                            echo $nombreinte;
                        }
                        else {
                            echo $title; 
                        } ?>">

                        <div class="form-group">
                            <label for="titulo" class="col-sm-12 control-label">T&iacute;tulo</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="titulo" name="titulo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contenido" class="col-sm-12 control-label">Subt&iacute;tulo</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="subtitulo" name="subtitulo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contenido" class="col-sm-12 control-label">Resumen</label>
                            <div class="col-sm-12">
                                <textarea type="textarea" class="form-control" id="resumen" name="resumen"
                                    style="WIDTH: 710px; HEIGHT: 110px"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-12 control-label">PDF</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" id="file" name="file" multiple="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-12 control-label">Imagen</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" id="img" name="img" multiple="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="onSubmitForm6()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Crear Libro-->
<div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Libro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <div class="container">
                    <form class="form-horizontal" enctype="multipart/form-data" autocomplete="off" id="form7">
                        <input type="text" class="form-control" id="idUsrsession" name="idUsrsession" hidden value="<?php   
                        if ($fkroles == 2){
                            echo $id_session2;
                        }
                        else {
                            echo $id_session; 
                        } ?>">
                        <input type="text" class="form-control" id="codigo_nodo" name="codigo_nodo" hidden
                            value="<?php echo $nodo; ?>">
                        <input type="text" class="form-control" id="autorl" name="autorl" hidden value="<?php 
                        if ($fkroles == 2){
                            echo $nombreinte;
                        }
                        else {
                            echo $title; 
                        } ?>">

                        <div class="form-group">
                            <label for="titulo" class="col-sm-12 control-label">T&iacute;tulo</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="titulo_libro" name="titulo_libro">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-12 control-label">PDF</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" id="file" name="file" multiple="">
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="onSubmitForm7()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!----------Modal Eliminar Nodo------------>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Desea eliminar este registro?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

<!----------------------------------------------------------------------------------MODALES PARA VISTA--------------------------------------------------------------------------------------->

<!----MODAL CONTROL LOGIN --->
<div class="modal fade" id="control" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Control de Usuarios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <table class="table" style="background: white;" id="tabla3">
                    <thead>
                        <tr>
                            <th style="text-align: center" ;>USUARIO</th>
                            <th style="text-align: center" ;>FECHA</th>
                            <th style="text-align: center" ;>HORA</th>

                        </tr>
                    </thead>
                    <?php
                        $cliente = new Database();
                        $listado = $cliente->Cread();
                        ?>
                    <tbody>
                        <?php
                            while ($row = mysqli_fetch_object($listado)) {
                                $id     = $row->id;
                                $description        = $row->description;
                                $fecha      = $row->fecha;
                                $hora      = $row->hora;

                            ?>
                        <tr>
                            <td style="text-align: center" ;><?php echo $description ?></td>
                            <td style="text-align: center" ;><?php echo $fecha ?></td>
                            <td style="text-align: center" ;><?php echo $hora ?></td>

                        </tr>

                        <?php
                            }

                            ?>
                    </tbody>
                </table>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!----------Modal KMZ------------>

<div class="modal fade" id="modalkm" tabindex="-1" role="dialog" aria-labelledby="modalkm" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mapa</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe id="iframekm" frameborder="0" scrolling="no" width="1000%" height="1000px"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>

<!----------Modal Ficha Tecnica------------>

<div class="modal fade" id="modalPdf" tabindex="-1" role="dialog" aria-labelledby="modalPdf" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ficha Tecnica</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe id="iframePDF" frameborder="0" scrolling="no" width="100%" height="500px"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>

<!----------Modal Wbns PDF------------>

<div class="modal fade" id="modalwbn" tabindex="-1" role="dialog" aria-labelledby="modalwbn" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">PDF</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe id="iframewbn" frameborder="0" scrolling="no" width="100%" height="500px"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>

<!----------Modal Imagen------------>

<div class="modal fade" id="modalwbnF" tabindex="-1" role="dialog" aria-labelledby="modalwbnF" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Imagen</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe id="iframewbnI" frameborder="0" scrolling="no" width="850%" height="850px"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>


<!----------Modal Video------------>

<div class="modal fade" id="modalvideo" tabindex="-1" role="dialog" aria-labelledby="modalvideo" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Video</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe id="iframeVideo" frameborder="0" scrolling="no" width="100%" height="500px"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>

<script>
//CREAR NODO
function onSubmitForm() {

    var frm = document.getElementById('form1');
    var data = new FormData(frm);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            var msg = xhttp.responseText;
            if (msg == 'success') {
                alert(msg);
                $('#exampleModal').modal('hide')
            } else {
                alert(msg);
            }
        }
    };
    xhttp.open("POST", "uploadN.php", true);
    xhttp.send(data);
    $('#form1').trigger('reset');

}


//TIPO DE NODOS
function onSubmitForm2() {

    var frm = document.getElementById('form2');
    var data = new FormData(frm);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            var msg = xhttp.responseText;
            if (msg == 'success') {
                alert(msg);
                $('#exampleModal1').modal('hide')

            } else {
                alert(msg);
            }
        }
    };
    xhttp.open("POST", "uploadTN.php", true);
    xhttp.send(data);
    $('#form2').trigger('reset');
    window.location.reload();
}

//BLOG
function onSubmitForm3() {

    var frm = document.getElementById('form3');
    var data = new FormData(frm);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            var msg = xhttp.responseText;
            if (msg == 'success') {
                alert(msg);
                $('#exampleModal2').modal('hide')
            } else {
                alert(msg);
            }
        }
    };
    xhttp.open("POST", "uploadB.php", true);
    xhttp.send(data);
    $('#form4').trigger('reset');
    window.location.reload();
}

//Integrantes
function onSubmitForm4() {

    var frm = document.getElementById('form4');
    var data = new FormData(frm);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            var msg = xhttp.responseText;
            if (msg == 'success') {
                alert(msg);
                $('#exampleModal3').modal('hide')
            } else {
                alert(msg);
            }
        }
    };
    xhttp.open("POST", "uploadInte.php", true);
    xhttp.send(data);
    $('#form5').trigger('reset');
    window.location.reload();
}

//Webserie
function onSubmitForm5() {

    var frm = document.getElementById('form5');
    var data = new FormData(frm);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            var msg = xhttp.responseText;
            if (msg == 'success') {
                alert(msg);
                $('#exampleModal4').modal('hide')
            } else {
                alert(msg);
            }
        }
    };
    xhttp.open("POST", "uploadwbs.php", true);
    xhttp.send(data);
    $('#form5').trigger('reset');

}

//Webinars
function onSubmitForm6() {

    var frm = document.getElementById('form6');
    var data = new FormData(frm);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            var msg = xhttp.responseText;
            if (msg == 'success') {
                alert(msg);
                $('#exampleModal5').modal('hide')
            } else {
                alert(msg);
            }
        }
    };
    xhttp.open("POST", "uploadwebns.php", true);
    xhttp.send(data);
    $('#form6').trigger('reset');

}

//Libro
function onSubmitForm7() {

    var frm = document.getElementById('form7');
    var data = new FormData(frm);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            var msg = xhttp.responseText;
            if (msg == 'success') {
                alert(msg);
                $('#exampleModal6').modal('hide')
            } else {
                alert(msg);
            }
        }
    };
    xhttp.open("POST", "uploadL.php", true);
    xhttp.send(data);
    $('#form7').trigger('reset');

}

//FUNCIONES PARA ABRIR ARCHIVOS,BORRAR Y VISTA DE TABLAS

function openModelPDF(url) {
    $('#modalPdf').modal('show');
    $('#iframePDF').attr('src', '<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/'; ?>' + url);
}

function openModelInte() {
    $('#modalInte').modal('show');

}
</script>

<script type="text/javascript">
function openModalV(video) {
    $('#modalvideo').modal('show');
    $('#iframeVideo').attr('src', '<?php echo ''; ?>' + video);
}
</script>

<script type="text/javascript">
function openModalWbnI(img) {
    $('#modalwbnF').modal('show');
    $('#iframewbnI').attr('src', '<?php echo ''; ?>' + img);
}
</script>

<script type="text/javascript">
function openModalWbn(pdf) {
    $('#modalwbn').modal('show');
    $('#iframewbn').attr('src', '<?php echo ''; ?>' + pdf);
}
</script>

<script type="text/javascript">
function openModalK(kmz) {
    alert("Debes tener iniciada la Sesion en Google")
    $('#modalkm').modal('show');
    $('#iframekm').attr('src', '<?php echo ''; ?>' + kmz);
}
</script>


<script>
$('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

    $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
});
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#tabla1').DataTable();
});
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#tabla3').DataTable();
});
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#tabla2').DataTable();
});
</script>

<select hidden onchange="doGTranslate(this)";>
<option value="">Select Language</option>
<option value="es|es">Spanish</option>
<option value="es|pt">Portuguese</option>
<option value="es|en">English</option>
</select>
<div id="google_translate_element2" hidden></div>

<script src="dist/js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<!-- GTranslate: https://gtranslate.io/ -->
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'es',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>

<script src="https://code.jquery.com/jquery-2.1.1.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript">
      function myFunction() {
        $.ajax({
          url: "notificaciones.php",
          type: "POST",
          processData:false,
          success: function(data){
            $("#notification-count").remove();                  
            $("#notification-latest").show();$("#notification-latest").html(data);
          },
          error: function(){}           
        });
      }
                                 
      $(document).ready(function() {
        $('body').click(function(e){
          if ( e.target.id != 'notification-icon'){
            $("#notification-latest").hide();
          }
        });
      });       

</script>
</body>

</html>