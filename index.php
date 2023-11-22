<?php
session_start();

include "conn.php";
include "database.php";
include "header.php";
include "config.php";
$fkroles = $_SESSION['fkroles'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Proplayas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 

  <!-- Vendor CSS Files -->
  <link href="Webinars/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="Webinars/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  

  <!-- Template Main CSS File -->
  <link href="carousel.css" rel="stylesheet">
  <link href="Webinars/assets/css/style.css" rel="stylesheet">

</head>

<body style="padding-top: 5.5%;">

<style type="text/css">
    body {
        background-image: url(Utilidades/vintage-wallpaper-background.jpg)
    }
</style>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.php">Proplayas</a></h1>
      </div>

      <link href="Webinars/dist/css/bootstrap.min.css" rel="stylesheet">

    </div>
  </header><!-- End Header --> 

  <!-- ======= Hero Section ======= -->
  <section id="hero">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
          <img src="https://media.gq.com.mx/photos/5c8fe8f0d47f8ca854fd4552/16:9/w_2560%2Cc_limit/GettyImages-913710180.jpg" class="card-img-top" alt="Banner 1">

        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
          <img src="https://cdn.forbescentroamerica.com/2020/07/Playas-Centroameria-scaled-e1594343240505.jpg" class="card-img-top" alt="Banner 2">
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
          <img src="https://mexicotravelchannel.com.mx/wp-content/uploads/2021/03/vik-mexico-travel.jpg" class="card-img-top" alt="Banner 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

<main id="main">
      <section id="featured" class="featured" style="padding-top: 8%;">

    <div class="container marketing">

     <div class="alert alert-dark" role="alert" >
      <center>
        <a name="Tquienes"> <marquee behavior="alternate" scrollamount="10"><h3> QUIENES SOMOS</h3></marquee></a>
      </center>
    </div>
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-3">
        <center><img class="bd-placeholder-img rounded-circle"  width="200" height="200" src="../Utilidades/Organizacion.png"></center>
        <h2>Organización en Red</h2>
        <p align="justify">La Red PROPLAYAS es una plataforma de intercambio colaborativo en gestión y certificación de playas, con espectro de acción en 17 países de América Latina y la Península Ibérica. Somos científicos, activistas y empresarios integrados para un objetivo común: la <b>Gestión de Playas</b> .</p>
      </div> <!-- /.col-lg-4 -->
      <div class="col-lg-3">

        <center><img class="bd-placeholder-img rounded-circle"  width="200" height="200" src="../Utilidades/Registro.png"></center>

        <h2>Registro</h2>
        <p align="justify">La vinculación a la Red PROPLAYAS no tiene costo y parte de un principio colaborativo y de buena voluntad. Para pertenecer a esta se debe conformar un Nodo Local, con al menos un miembro, que será la unidad central de intercambio. Cada Nodo debe diligenciar y mantener actualizada su ficha de registro. Para más información o inscribirse en la Red escríbenos.</p>
        <p>   <a href="" class="btn btn-primary" data-toggle="modal" data-target="#Contacto">Escribenos &raquo;</a></p>
      </div ><!-- /.col-lg-4 -->


      <div class="col-lg-3">
        <center><img class="bd-placeholder-img rounded-circle"  width="200" height="200" src="../Utilidades/Actividades.png"></center>

       <h2>Actividades</h2>
       <p align="justify">La Red PROPLAYAS abarca todas las actividades que puedan relacionarse con mantener playas saludables y atractivas. Desde proyectos de investigación y campañas de concientización ciudadana, hasta servicios de consultoría y eventos académicos. Cualquier actividad que hace uno de nuestros Nodos Locales, es automáticamente una actividad de la Red.</p>
     </div> <!-- /.col-lg-4 -->

     <div class="col-lg-3">
      <center><img class="bd-placeholder-img rounded-circle"   width="200" height="200" src="../Utilidades/Alianzas.png"></center>

      <h2>Alianzas</h2>
      <p align="justify">Son primordiales para el crecimiento institucional. La alianza más  reciente que poseemos  es  el Memorando de Entendimiento entre la Asociación Argentina de Geología Aplicada a la Ingeniería (ASAGAI) y la Red Iberoamericana de Gestión y Certificación de Playas (PROPLAYAS). Para más información sobre el memorando dar clic en el botón de abajo.</p>
      <p><a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAlianza">Memorando &raquo;</a></p>
       
    </div> <!-- /.col-lg-4 -->


  </div> <!-- /.row -->
  </div> <!-- /.container -->


    <div class="container marketing">

     <div class="alert alert-success" role="alert">

      <!--Scrollspy de elementos-->
     
      <center>
      <marquee behavior="alternate" scrollamount="10"><h3> NODOS</h3></marquee></a>
      </center>
    </div>
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-3">
        <center> <img class="bd-placeholder-img rounded-circle"  width="200" height="200" src="../Utilidades/NodosC.jpg"> </center>
        <h2>Nodos cientificos</h2>
        <p align="justify">Se constituyen por grupos de profesores, estudiantes e investigadores reunidos en espacios de trabajo científico. Su misión principal es la de generar conocimiento en forma de conceptos, metodologías y casos de estudio, para innovar la gestión integrada de las playas de Iberoamérica.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">

        <center> <img class="bd-placeholder-img rounded-circle"  width="200" height="200" src="../Utilidades/Proyectos.png"> </center>
        <h2>Proyectos</h2>
        <p align="justify">Los Nodos Científicos están siempre investigando, en proyectos que van desde el ámbito local de una playa hasta análisis de playas en varios países simultáneamente. Conozca cada uno de los proyectos terminados, en ejecución y en formulación que los científicos de la Red PROPLAYAS están trabajando.</p>
      </div><!-- /.col-lg-4 -->


      <div class="col-lg-3">
        <center> <img class="bd-placeholder-img rounded-circle"  width="200" height="200" src="../Utilidades/Publicaciones.png"> </center>
       <h2>Publicaciones</h2>
       <p align="justify">Artículos científicos y de divulgación, libros con los últimos avances en gestión de playas, trabajos universitarios y tesis de postgrado, memorias de congresos y seminarios académicos, todo esto y más publicaciones de los Nodos Científicos están al alcance de cualquiera que quiera conocer más de las playas de Iberoamérica.</p>
     </div><!-- /.col-lg-4 -->

     <div class="col-lg-3">
      <center><img class="bd-placeholder-img rounded-circle"   width="200" height="200" src="../Utilidades/Eventos.png"> </center>

      <h2>Eventos</h2>
      <p align="justify">Congresos, seminarios, cursos, talleres y demás eventos académicos y científicos en gestión de playas están aquí organizadas para cada Nodo Local. Conozca los eventos pasados y futuros que están permitiendo el intercambio directo entre los científicos que lideran la investigación en gestión y certificación de playas.</p>
       
    </div><!-- /.col-lg-4 -->


  </div><!-- /.row -->
  </div><!-- /.container -->

  <div class="container marketing">

     <div class="alert alert-info" role="alert">
      <center>
      <a name="Tsociedad"> <marquee behavior="alternate" scrollamount="10"><h3> S O C I E D A D    &    A C T I V I S M O </h3></marquee></a>
      </center>
    </div>
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <center> <img class="bd-placeholder-img rounded-circle"   width="200" height="200" src="../Utilidades/NodosA.png"> </center>
        <h2>Nodos de la Sociedad Civil</h2>
        <p align="justify">Los Nodos de la Sociedad Civil y/o Activistas agrupan líderes ciudadanos comprometidos con una verdadera gestión integrada de las playas, más allá del simple lucro de ese valioso espacio. Asociaciones, fundaciones, cor-poraciones y otros tipos de organizaciones no gubernamenta-les hacen parte de los Nodos  de la Sociedad Civil y/o Activistas.</p>
      </div><!-- /.col-lg-4 -->
      
      <div class="col-lg-4">

        <center><img class="bd-placeholder-img rounded-circle"   width="200" height="200" src="../Utilidades/ActividadesP.png"> </center>
        <h2>Actividades publicas</h2>
        <p align="justify">Visitas escolares a playas, presentaciones de proyectos, iniciativas orientadas a la gestión integrada, rendiciones de cuentas y más actividades con interés general, son realizadas por los Nodos de la Sociedad Civil y/o Activistas, quienes salvaguardan las playas de cada país y del continente mismo. Conozca aquí todas las actividades y acompañe su realización.</p>
      </div><!-- /.col-lg-4 -->


      <div class="col-lg-4">
        <center>  <img class="bd-placeholder-img rounded-circle"  width="200" height="200" src="../Utilidades/Campañas.png"> </center>
       <h2>Campañas Ciudadanas</h2>
       <p align="justify">Muchas veces los cambios requieren la movilización ciudadana, en especial cuando el patrimonio natural y cultural está en riesgo. Las campañas ciudadanas organizadas por los Nodos de la Sociedad Civil y/o Activistas son la demostración del compromiso y poder que se ejerce desde la Red PROPLAYAS por una verdadera gestión integrada.</p>
       
    </div><!-- /.col-lg-4 -->


  </div><!-- /.row -->
  </div><!-- /.container -->

   <div class="container marketing">

     <div class="alert alert-danger" role="alert">
      <center>
      <a name="Tsociedad"> <marquee behavior="alternate" scrollamount="10"><h3> E M P R E S A </h3></marquee></a>
      </center>
    </div>
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <center> <img class="bd-placeholder-img rounded-circle"   width="200" height="200" src="../Utilidades/NodosE.png"> </center>
        <h2>Nodos Empresariales</h2>
        <p align="justify">La gestión de playas requiere equipos de consultores expertos, que asesoren a quienes toman las decisiones sobre ecosistemas costeros. Los Nodos Empresariales son organizaciones que cuentan con el conocimiento y experiencia suficiente para lograr un resultado óptimo en cualquier iniciativa pública o privada. </p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">

        <center><img class="bd-placeholder-img rounded-circle"   width="200" height="200" src="../Utilidades/AreasC.png"></center>
        <h2>Áreas de consultoria</h2>
        <p align="justify">Las áreas en que los Nodos Empresariales brindan asesoría son muy amplias, pueden desarrollar desde estudios de capacidad de carga recreativa hasta llevar a cabo el montaje de plataformas digitales de monitoreo. Conozca las temáticas y tipos de estudios que pueden hacer que la playa de su interés vaya hacia el óptimo nivel de gestión.</p>
      </div><!-- /.col-lg-4 -->


      <div class="col-lg-4">
        <center>  <img class="bd-placeholder-img rounded-circle"  w width="200" height="200" src="../Utilidades/Actividades.png"> </center>
       <h2>Clientes</h2>
       <p align="justify">Administraciones públicas, condominios a pie de playa, cadenas hoteleras, todos son clientes de los Nodos Empresariales de la Red PROPLAYAS, pues reconocen que aquí se encuentra la experticia en gestión y certificación de playas. Sorpréndase con la variedad de organizaciones que han creído en nosotros, conózcalas aquí.</p>
       
    </div><!-- /.col-lg-4 -->


  </div><!-- /.row -->
  </div><!-- /.container -->

  <div class="container marketing">

     <div class="alert alert-success" role="alert">
      <center>
     <a name="Tsociedad"> <marquee behavior="alternate" scrollamount="10"><h3> R E G L A M E N T A C I O N</h3></marquee></a>
      </center>
    </div>
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-3">
        <center>  <img class="bd-placeholder-img rounded-circle"  width="200" height="200" src="../Utilidades/PoliticasSec.png"> </center>
        <h2>Políticas Sectoriales</h2>
        <p align="justify">Una política sectorial es un reglamento que surge de un ministerio o consejería con relación a un tema específico, en este sentido,para nosotros es importante conocer y divulgar las políticas que se han venido gestando sobre el ámbito marino-costero, desde cada uno de los países miembros de la Red PROPLAYAS.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">

        <center> <img class="bd-placeholder-img rounded-circle"   width="200" height="200" src="../Utilidades/Leyes.png"> </center>
        <h2>Leyes</h2>
        <p align="justify">Una ley es una norma con poder jurídico que sirve para regular algún aspecto de interés para una nación, en este sentido, para nosotros es importante conocer y divulgar las leyes que se han venido gestando sobre el ámbito marino-costero, desde cada uno de los países miembros de la Red PROPLAYAS.</p>
      </div><!-- /.col-lg-4 -->


      <div class="col-lg-3">
       <center><img class="bd-placeholder-img rounded-circle"  width="200" height="200" src="../Utilidades/Politicas.png"> </center>
       <h2>Políticas Públicas</h2>
       <p align="justify">Las políticas públicas son planes de acción que el Estado diseña y ejecuta a través de una administración publica con el objetivo de resolver problemas públicos específicos, en este sentido, para nosotros es importante conocerlas, desde cada país miembro de la Red, se han gestado para resolver problemas relacionados con el mar y la costa. </p>
     </div><!-- /.col-lg-4 -->

     <div class="col-lg-3">
     <center> <img class="bd-placeholder-img rounded-circle"   width="200" height="200" src="../Utilidades/Cartillas.png"> </center>

      <h2>Cartillas y/o Manuales</h2>
      <p align="justify">Derivado de la aplicación de políticas, leyes y demás normativa, en algunos países de la Red PROPLAYAS han surgido documentos que, a manera de cartillas, manuales, documentos técnicos y otros, brindan aspectos, consideraciones y procedimientos para atender, solucionar y/o prevenir problemas relacionados con el mar y la costa.</p>

    </div></div></div><!-- /.col-lg-4 -->

</main>
 </section>
 

  <!--- MODAL CONTACTO -->
  <div class="modal fade" id="Contacto" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal">C O N T Á C T A N O S</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="after_submit"></div>
          <form name="frmNotification" id="frmNotification" action="agregarnotificacion.php" method="post" >
                <div class="form-group">
                  <label for="autor">Nombre </label>
                  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa Nombre Completo" required>
                </div>
                <div class="form-group">
                  <label for="autor">Correo </label>
                  <input type="text" class="form-control" name="correo" id="correo" placeholder="Ingresa tu correo" required>
                </div>
                <div class="form-group">
                  <label for="autor">Pais </label>
                  <input type="text" class="form-control" name="pais" id="pais" placeholder="Ingresa su pais de residencia" required>
                </div>
                <div class="form-group">
                  <label for="mensaje">Mensaje </label>
                  <textarea class="form-control" name="mensaje" id="mensaje" rows="3" placeholder="Mensaje" required></textarea>
                </div>

              </form>            
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="onSubmitForm8()">Guardar</button>
        </div>
      </div>
    </div>
  </div>

<!-- Modal PDF -->
<div class="modal fade" id="modalAlianza" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Memorando de Entendimiento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <embed src="http://www.proplayas.org/gallery/201804-memorando%20asagai-proplayas.pdf" type="application/pdf" width="100%" height="600px">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  
<script src="dist/js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>


<select hidden onchange="doGTranslate(this)";>
<option value="">Select Language</option>
<option value="es|es">Spanish</option>
<option value="es|pt">Portuguese</option>
<option value="es|en">English</option>
</select>
<div id="google_translate_element2" hidden></div>

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
      
      
      //Libro
function onSubmitForm8() {

var frm = document.getElementById('frmNotification');
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
xhttp.open("POST", "uploadC.php", true);
xhttp.send(data);
$('#frmNotification').trigger('reset');

}
    </script>

    

<?php include("footer.php"); ?>