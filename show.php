<?php
session_start();
if (!isset($_SESSION['fkroles'])) {
    header('location: login.php');
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
<?php require_once 'model.php'; ?>


<?php $post = getPostById($_GET['id']); ?>
<style type="text/css">
	body{
		background-image: url(Utilidades/vintage-wallpaper-background.jpg)
	}

</style>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
<title>Proplayas</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
<link rel="stylesheet" type="text/css" href="../navbar.css">
<center><h1>Blog</h1></center>
<div class="container">
	<a href="blog.php" class="btn btn-primary">Regresar</a>
</div>
<br />
<center>

	<body style="padding-top: 10%;">
		<div class="card" style="width: 90rem; border-radius: 20px;">
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
</center>


<?php

include "footer.php";
?>