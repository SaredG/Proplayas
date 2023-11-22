<?php
include 'database.php';
include 'conexion.php';
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
        <h1><a href="webinarsV.php">Libros</a></h1>
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

    <!-- ======= Featured Section ======= -->
    <?php
    $sel = $con->query("SELECT * FROM libro");
    ?>
    <section id="featured" class="featured">
      <br />
      <div class="container-fluid" style="padding-top: 5%">

        <div class="row" style="margin: 10px">
          <?php while ($row = $sel->fetch_assoc()) { ?>
            <div class="col-lg-4">
              <div class="card" style="width:  25rem;">
                <div class="icon-box">
                  <center>
                    <h3><a><?php echo $row['titulo_libro'] ?></a></h3>
                    <iframe src="<?php echo $row['pdfl']?>" height="200px" width="200px"></iframe>
                    <br />
                    <b>Información Editorial</b>
                    <b><p style="text-align: left;">Autor del Nodo:</b>  <?php echo $row['autorl'] ?></p>   
                    <b><p style="text-align: left;">   Codigo del Nodo:</b> <?php echo $row['codigo_nodo'] ?></p>  
                    <br /> 
                    <?php
                  if ($row['pdfl'] != NULL) {
                  ?>
                    <a style="padding-center: 240px" onclick="openModalWbn('<?php echo $row['pdfl'] ?>')"  type="button" title="Ver PDF"><i class='bx bxs-file-pdf'></i></a>
                  <?php
                  }
                  ?>
                  <p style="text-align: rigth;">
                    Fecha: <?php echo $row['fecha'] ?> Hora: <?php echo $row['hora'] ?> 
                    </p>
                  </center>
                </div>
              </div>
            </div>


          <?php } ?>

        </div>


      </div>

    </section><!-- End Featured Section -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class='bx bx-up-arrow-alt'></i></a>

    <!-- Vendor JS Files -->
    <script src="Webinars/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="Webinars/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Webinars/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="Webinars/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="Webinars/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="Webinars/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="Webinars/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="Webinars/assets/js/main.js"></script>

<?php include("footer.php"); ?>