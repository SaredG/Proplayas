<!--Nodo,Admin y integrante-->
<?php
if (!isset($_SESSION['fkroles'])) {
  header("Location: login.php");
}

$fkroles = $_SESSION['fkroles'];
$id_session = $_SESSION['id'];
$id_session2 = $_SESSION['id_inte'];
$nombreN = $_SESSION['nombreN'];
$nombreinte = $_SESSION['nombreinte'];
$nodo = $_SESSION['codigo'];
$title = $_SESSION['title'];



?>

<?php
  $mysqli = new mysqli('localhost', 'root', '', 'proplayas');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=320" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="tabla.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
  <title>Proplayas</title>
  <?php
  if ($fkroles == "1") {

  ?>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <img alt="" src="../Utilidades/logo.png" width="100" height="100">
        <a class="navbar-brand" href="inicio.php">Proplayas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"></a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link" href="inicio.php">Nuevo Nodos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tipos_nodos.php">Tipos de Nodos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="webinars.php">Webinars</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="webserie.php">WebSerie</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="libro.php">Libro</a>
            </li>
                           

          <div class="demo-content">
            <div id="notification-header">
              <div style="position:relative">
                <button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn"><span id="notification-count"><?php if($count>0) { echo $count; } ?></span><i class='bx bxs-bell-ring'></i></button>
                <div id="notification-latest"></div>
              </div>          
            </div>
          </div>

          <?php if(isset($message)) { ?> <div class="error"><?php echo $message; ?></div> <?php } ?>
          <?php if(isset($success)) { ?> <div class="success"><?php echo $success;?></div> <?php } ?>
            <li class="nav-item">
              <a style=" position: absolute; right: 0;" class="nav-link" href="#">Opciones</a>
              <div class="submenu">
                <ul>
                  <li><a class="nav-link" href="listablog.php">Lista de Blog</a></li>
                  <li><a class="nav-link" href="tablaC.php">Cambiar Contraseña</a></li>
                  <li><a type="button" class="nav-link" data-toggle="modal" data-target="#control"> Control de Usuarios </a></li>
                  <li><a class="nav-link" href="logout.php">Cerrar Sesion</a></li>
                </ul>
              </div>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <?php  } else if ($fkroles == '0') {
  ?>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <img alt="" src="../Utilidades/logo.png" width="100" height="100">
        <a class="navbar-brand" href="inicio.php">Proplayas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"></a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link" href="inicio.php">Nuevo Nodos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="integrantes.php">Integrantes del Nodo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="webinars.php">Webinars</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="webserie.php">WebSerie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="libro.php">Libro</a>
            </li>
            <li class="nav-item">
              <a style=" position: absolute; right: 0;" class="nav-link" href="#">Opciones</a>
              <div class="submenu">
                <ul>
                  <li><a class="nav-link" href="tablaC.php">Cambiar Contraseña</a></li>
                  <li><a class="nav-link" href="logout.php">Cerrar Sesion</a></li>
                </ul>
              </div>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
   <?php  } else if ($fkroles == '2') {
  ?>
     <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <img alt="" src="../Utilidades/logo.png" width="100" height="100">
        <a class="navbar-brand" href="inicio.php">Proplayas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"></a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link" href="inicio.php">Nuevo Nodos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="webinars.php">Webinars</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="webserie.php">WebSerie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="libro.php">Libro</a>
            </li>
            <li class="nav-item">
              <a style=" position: absolute; right: 0;" class="nav-link" href="#">Opciones</a>
              <div class="submenu">
                <ul>
                  <li><a class="nav-link" href="tablaC.php">Cambiar Contraseña</a></li>
                  <li><a class="nav-link" href="logout.php">Cerrar Sesion</a></li>
                </ul>
              </div>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <?php  } 
    else if ($fkroles != "1" && $fkroles != "2" && $fkroles != "0") {
  ?>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
      <link rel="stylesheet" type="text/css" href="navbar.css">
        <img alt="" src="../Utilidades/logo.png" width="100" height="100">
        <a class="navbar-brand" href="index.php">Proplayas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Charlas</a>
            </li>
            <li class="nav-item">
              <li class="nav-item">
                <a class="nav-link" href="blog2.php">Blog</a>
              </li>
              <a class="nav-link" href="nodos.php">Nodos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="webserieV.php">Webserie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="webinarsV.php">Webinars</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="librosV.php">Libros</a>
            </li>
           <li class="nav-item">
              <a class="nav-link btn btn-danger" href="login.php">Login</a>
            </li>
            
          </ul>
          <li <a  href="#" onclick="doGTranslate('es|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="https://cdn-icons-png.flaticon.com/512/330/330459.png" height="40PX" width="40px"   /></a> </li>
       
            <li	<a href="#" onclick="doGTranslate('es|es');return false;" title="Spanish" class="gflag nturl" ><img src="https://cdn-icons-png.flaticon.com/512/330/330433.png" height="40px" width="40px" /></a> </li>
          
            <li <a href="#" onclick="doGTranslate('es|pt');return false;" title="Portuguese" class="gflag nturl" style="background-position:-300px -200px;"><img src="https://cdn-icons-png.flaticon.com/512/2151/2151409.png" height="50px" width="50px"  /></a> </li>
          
        </div>
      </div>
    
    </nav>

<?php  } ?>