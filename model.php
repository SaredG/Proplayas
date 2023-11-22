<?php

 
 require_once 'config.php'; 

 
function openConex(){
	$conex=new mysqli(DBHOST, DBUSER, DBPWD, DBNAME); 
	
    return $conex;
}    
 
function getPosts(){	
	$mysqli = openConex();
	
	$result = $mysqli->query('SELECT id, titulo,contenido,fecha,hora,nodos,pais FROM blog ORDER BY id desc');	

	return $result;	
}

function getPostById($id)
{
	$mysqli = openConex();
 
	$result = $mysqli->query('SELECT fecha, titulo, contenido, autor, hora,nodos,pais FROM blog WHERE id ='.$id);
	$row = mysqli_fetch_assoc($result);
	
    return $row;
}

function getPostById2($id_wbs)
{
	$mysqli = openConex();
 
	$result = $mysqli->query('SELECT titulo,contenidoWbs,autor_wbs,codigoWbs,numC,fecha,hora,imagen FROM webserie WHERE id_wbs ='.$id_wbs);
	$row = mysqli_fetch_assoc($result);
	
    return $row;
}

?>
