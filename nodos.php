<?php
include "hearder.php";
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
  

  <!-- Template Main CSS File -->
  <link href="carousel.css" rel="stylesheet">
  <link href="tabla.css" rel="stylesheet">
  <link href="Webinars/assets/css/style.css" rel="stylesheet">

</head>

<body style="padding-top: 6%;">

<style type="text/css">
    body {
        background-image: url(Utilidades/vintage-wallpaper-background.jpg)
    }
</style>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="nodos.php">Nodos</a></h1>
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
  </section><!-- End Hero -->

<main id="main">
    <section id="featured" class="featured" style="padding-top: 6%;">
    <div class="container" id="nodos">
                <div class="container">
                  <div class="row">
                  </div>
                  <br />
                  <div style="background: white; border-radius: 20px;">
                    <center>
                      <div class="row table">
                        <table class="table" style="background: white;" id="tabla1">
                          <thead>
                            <tr>
                              <th style="text-align: center" ;>TIPO DE NODO</th>
                              <th style="text-align: center" ;>CODIGO</th>
                              <th style="text-align: center" ;>NOMBRE DEL COORDINADOR</th>
                              <th style="text-align: center" ;>NOMBRE DEL NODO</th>
                              <th style="text-align: center" ;>PAIS</th>
                              <th style="text-align: center" ;>CIUDAD</th>
                              <th style="text-align: center" ;>Fichas</th>
                              <th style="text-align: center" ;>KMZ-KML</th>
                              <th style="text-align: center" ;>VIDEO</th>
                            </tr>
                          </thead>
                          <?php
                          include("database.php");
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
                              $psswd      = $row->psswd;
                              $fkroles      = $row->fkroles;
                              $kmz        = $row->kmz;
                              $video      = $row->video;
                            ?>
                              <tr>
                                <td style="text-align: center" ;><?php echo ucwords(strtolower($tnodo)) ?></td>
                                <td style="text-align: center" ;><?php echo ucwords(strtolower($codigo)) ?></td>
                                <td style="text-align: center" ;><?php echo ucwords(strtolower($title)) ?></td>
                                <td style="text-align: center" ;><?php echo ucwords(strtolower($nombreN)) ?></td>
                                <td style="text-align: center" ;><?php echo ucwords(strtolower($pais))  ?></td>
                                <td style="text-align: center" ;><?php echo ucwords(strtolower($ciudad))  ?></td>
                                <td style="text-align: center" ;>
                                        <a onclick="openModelPDF('<?php echo $url ?>')" type="button" title="Ver PDF"><img src="Utilidades/eye.svg"></a>
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
                                            if ($video != NULL) {
                                            ?>
                                                <a onclick="openModalV('<?php echo $video ?>')" href="#" type="button" title="Ver Video"><img src="Utilidades/eye.svg"></a>
                                            <?php
                                            }
                                            ?>

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
    </div>
    </section>
    </main>
  </center>
</body>

</html>
<?php include("footer.php"); ?>