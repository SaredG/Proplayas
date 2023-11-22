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

<html>
<style type="text/css">
	body{
		background-image: url(Utilidades/vintage-wallpaper-background.jpg)
	}

</style>
<div class="container">
                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModal2">Nueva Publicación</a>
                </div>

<body style="padding-top: 8%;">
	<center><h1>Blog</h1></center>
	
	
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
					<a href="show.php?id=<?php echo $post['id'] ?>" class="card-link">Más Información</a>
				</div>
			</div>
		<?php endforeach; ?>

	</body>
	</html>
</center>
<?php 
include "footer.php";
?>

