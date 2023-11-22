<?php
include "conn.php";
include "database.php";
include "hearder.php";
?>
<?php require_once 'model.php'; ?>


<?php $post = getPostById2($_GET['id_wbs']); ?>

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
    
    <br /><select hidden="true" onchange="doGTranslate(this);"><option value="">Select Language</option><option value="es|es">Spanish</option>
<option value="es|pt">Portuguese</option>
<option value="es|en">English</option>
</select><div id="google_translate_element2"></div>

  <!-- Template Main CSS File -->
  <link href="carousel.css" rel="stylesheet">
  <link href="Webinars/assets/css/style.css" rel="stylesheet">

</head>

<body style="padding-top: 4%;">

<style type="text/css">
    body {
        background-image: url(Utilidades/vintage-wallpaper-background.jpg)
    }
     a.gflag {vertical-align:bottom;font-size:250px;padding:1px 0;}
    a.gflag img {border:0;}
   
    #goog-gt-tt {display:none !important;}
    .goog-te-banner-frame {display:none !important;}
    .goog-te-menu-value:hover {text-decoration:none !important;}
    body {top:0 !important;}
    #google_translate_element2 {display:none!important;}
</style>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="webserieV.php">Webserie</a>
        </h1>
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
     <section id="featured" class="featured" style="padding-top: 7%;">
         
<center>
	<body >
		<div class="card" style="width: 90rem; border-radius: 20px;">
		    <div class="container">
	<a href="webserieV.php" class="btn btn-primary" style="position: absolute; left: 0; ">Regresar</a>

</div>
   
			<h5 class="card-header">
			      
				<?php echo $post['titulo'] ?>
			</h5>
			<div class="card-body">
            <iframe src="<?php echo $post ['imagen'] ?>" height="500px" width="500px"></iframe>
				<h5 class="card-title"></h5>
				<p class="card-text"><?php echo $post['contenidoWbs'] ?></p>
				<br />
				<p style="text-align: left;">
					<b>Información Editorial</b>
					<br />
					Autor:<?php echo $post['autor_wbs'] ?>
					<br />
					Nodos:<?php echo $post['codigoWbs'] ?>
				</p>
				<p style="text-align: right;"><?php echo $post['fecha'] ?> <?php echo $post['hora'] ?></p>

				
			</div>
		</div>
	</section>
</center>
</main>

    
<!-- GTranslate: https://gtranslate.io/ -->
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'es',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>
<script src="dist/js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

    


    
<?php

include "footer.php";
?>
