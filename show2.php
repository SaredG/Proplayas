<?php
include "hearder.php";
?>
<?php require_once 'model.php'; ?>


<?php $post = getPostById($_GET['id']); ?>
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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link rel="stylesheet" type="text/css" href="../navbar.css">
  

  <!-- Template Main CSS File -->
  <link href="carousel.css" rel="stylesheet">
  <link href="Webinars/assets/css/style.css" rel="stylesheet">

</head>

<body style="padding-top: 5%;">

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
     <section id="featured" class="featured" style="padding-top: 7%">
<center>
		<div class="card" style="width: 90rem; border-radius: 20px;">
		     <div class="container">
	<a href="blog2.php" class="btn btn-primary" style="position: absolute; left: 0; ">Regresar</a>
</div>
			<h5 class="card-header">
				<?php echo $post['titulo'] ?>
			</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>
				<p class="card-text"><?php echo $post['contenido'] ?></p>
				<br />
				<p style="text-align: left;">
					<b>Información Editorial</b>
					<br />
					Autor:<?php echo $post['autor'] ?>
					<br />
					Nodos:<?php echo $post['nodos'] ?>
				
				</p>
				<p style="text-align: right;"><?php echo $post['fecha'] ?> <?php echo $post['hora'] ?></p>

				
			</div>
		</div>
		 </section>
		 </main
</center>

<?php include("footer.php"); ?>


