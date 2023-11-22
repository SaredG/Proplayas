<?php
include 'database.php';
include 'conn.php';
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
        <h1><a href="blog2.php">Blogs</a></h1>
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
     <section id="featured" class="featured" style="padding-top: 6%">
<body>



    <?php foreach ($posts as $post): ?>
    <center>
        <br />
        <div class="card" style="width: 85rem; border-radius: 20px;">
            <div class="card-header" style="text-align: left;">
                <?php echo $post['fecha'] ?> <?php echo $post['hora'] ?>
            </div>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p align="justify" class="card-text"><?php echo $post['contenido'] ?></p>
                <a href="show2.php?id=<?php echo $post['id'] ?>" class="card-link">Más Información</a>
            </div>
        </div>
        <?php endforeach; ?>

</center>

<?php 
include "footer.php";
?>