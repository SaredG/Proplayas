<?php
$conn = new mysqli("localhost","root","","proplayas");

$sql = "UPDATE notificacion SET estado = 1 WHERE estado = 0";	
$result = mysqli_query($conn, $sql);

$sql = "SELECT * FROM notificacion ORDER BY id_correo DESC limit 5";
$result = mysqli_query($conn, $sql);

$response='';

while($row=mysqli_fetch_array($result)) {

	/* Formate fecha */
	$fechaOriginal = $row["fecha"];
	$fechaFormateada = date("d-m-Y", strtotime($fechaOriginal));

	$response = $response . "<div class='notification-item'> <a href=blog2.php class=btn btn-primary style= position: absolute; left: 0; >" .
	"<div class='notification-subject'>". $row["nombre"] . " - <span>". $fechaFormateada . "</span> </div>" . 
	"<div class='notification-comment'>" . $row["mensaje"]  . "</div>" . 
	"</div> </a>" ;
	

}
if(!empty($response)) {
	print $response;
}


?>