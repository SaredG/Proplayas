<?php


class Database
{
    private $con;
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "proplayas";
    function  __construct()
    {
        $this->connect_db();
    }


    public function connect_db()
    {
        $this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);

        if (mysqli_connect_error()) {
            die("Conexión a la base de datos falló" . mysqli_connect_error() . mysqli_connect_errno());
        }
    }

    public function sanitize($var)
    {
        $return = mysqli_real_escape_string($this->con, $var);
        return $return;
    }

//FUNCIONES DE LOS NODOS
    public function Nread()
    {
        $sql = "SELECT * FROM nodos INNER JOIN tnodo on nodos.fktnodo=tnodo.idtiponodo WHERE fkroles='0'";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function NUpdate($fktnodo, $gdA, $title, $pais, $ciudad, $codigo, $nombreN, $url, $video, $kmz,$id)
    {
        $sql = "UPDATE nodos SET fktnodo='$fktnodo',gdA='$gdA',title='$title',pais='$pais',ciudad='$ciudad',codigo='$codigo',nombreN='$nombreN',url='$url',video='$video',kmz='$kmz'  WHERE id='$id'";
        $res = mysqli_query($this->con, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function PsUpdate($psswd, $id)
    {
        $sql = "UPDATE nodos SET psswd='$psswd' WHERE id='$id'";
        $res = mysqli_query($this->con, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function Nsingle_record($id)
    {
        $sql = "SELECT * FROM nodos where id='$id' ";
        $res = mysqli_query($this->con, $sql);
        $return = mysqli_fetch_object($res);
        return $return;
    }

    public function Psread()
    {
        $sql = "SELECT * FROM nodos WHERE fkroles = '0'";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

//FUNCIONES DE TIPO DE NODO

public function TpUpdate($tnodo, $idtiponodo)
{
    $sql = "UPDATE tnodo SET tnodo='$tnodo' WHERE idtiponodo='$idtiponodo'";
    $res = mysqli_query($this->con, $sql);
    if ($res) {
        return true;
    } else {
        return false;
    }
}

public function Tpsingle_record($idtiponodo)
{
    $sql = "SELECT * FROM tnodo where idtiponodo='$idtiponodo'";
    $res = mysqli_query($this->con, $sql);
    $return = mysqli_fetch_object($res);
    return $return;
}

public function Tread()
{
    $sql = "SELECT * FROM tnodo;";
    $res = mysqli_query($this->con, $sql);
    return $res;
}

//FUNCIONES DE INTEGRANTES

public function Inread()
{
    $sql = "SELECT * FROM integrantes WHERE fkroles = '2'";
    $res = mysqli_query($this->con, $sql);
    return $res;
}



public function Isingle_record($id_inte)
{
    $sql = "SELECT * FROM integrantes where id_inte='$id_inte' ";
    $res = mysqli_query($this->con, $sql);
    $return = mysqli_fetch_object($res);
    return $return;
}


public function Iread()
{
    $sql = "SELECT * FROM integrantes LEFT JOIN nodos on nodos.id=integrantes.fkid_nodo;";
    $res = mysqli_query($this->con, $sql);
    return $res;
}

public function InteUpdate($nombreinte, $formaciongd, $formacionpg, $area_ex, $contacto,$id_inte)
    {
        $sql = "UPDATE integrantes SET nombreinte='$nombreinte',formaciongd='$formaciongd',formacionpg='$formacionpg',area_ex='$area_ex',contacto='$contacto' WHERE id_inte='$id_inte'";
        $res = mysqli_query($this->con, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function Interead()
    {
        $sql = "SELECT * FROM integrantes";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    

//FUNCIONES PARA WEBINARS

public function Innread()
{
    $sql = "SELECT * FROM webinars LEFT JOIN integrantes on integrantes.id_inte=webinars.fkid_nodo";
    $res = mysqli_query($this->con, $sql);
    return $res;
}

    public function Wbnsread()
    {
        $sql = "SELECT * FROM webinars LEFT JOIN nodos on nodos.id=webinars.fkid_nodo ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function WbnsIread()
    {
        $sql = "SELECT * FROM webinars LEFT JOIN integrantes on integrantes.id_inte=webinars.fkid_nodo ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function Wbnspdate($titulo, $subtitulo, $resumen, $autor_wbns, $codigo,$id_wbns)
    {
        $sql = "UPDATE webinars SET titulo='$titulo',subtitulo='$subtitulo',resumen='$resumen',autor_wbns='$autor_wbns',codigo='$codigo' WHERE id_wbns='$id_wbns'";
        $res = mysqli_query($this->con, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function Wbnsspsingle_record($id_wbns)
    {
        $sql = "SELECT * FROM webinars WHERE id_wbns='$id_wbns'";
        $res = mysqli_query($this->con, $sql);
        $return = mysqli_fetch_object($res);
        return $return;
    }

//FUNCIONES WEBSERIE

public function WbsIread()
    {
        $sql = "SELECT * FROM webserie LEFT JOIN integrantes on integrantes.id_inte=webserie.fkid_nodo ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

public function Wbsread()
{
    $sql = "SELECT * FROM webserie LEFT JOIN nodos on nodos.id=webserie.fkid_nodo;";
    $res = mysqli_query($this->con, $sql);
    return $res;
}

public function Wbspdate($titulo, $videowbs, $autor_wbs, $codigo,$id_wbs)
{
    $sql = "UPDATE webserie SET titulo='$titulo',videowbs='$videowbs',autor_wbs='$autor_wbs',codigo='$codigo' WHERE id_wbs='$id_wbs'";
    $res = mysqli_query($this->con, $sql);
    if ($res) {
        return true;
    } else {
        return false;
    }
}

public function Wbsspsingle_record($id_wbs)
{
    $sql = "SELECT * FROM webserie WHERE id_wbs='$id_wbs'";
    $res = mysqli_query($this->con, $sql);
    $return = mysqli_fetch_object($res);
    return $return;
}

//LIBROS
public function Lread()
{
    $sql = "SELECT * FROM libro LEFT JOIN nodos on nodos.id=libro.fkid_nodo;";
    $res = mysqli_query($this->con, $sql);
    return $res;
}

public function ILread()
    {
        $sql = "SELECT * FROM libro LEFT JOIN integrantes on integrantes.id_inte=libro.fkid_nodo ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

//OTRAS FUNCIONES
public function Bread()
{
    $sql = "SELECT * FROM blog";
    $res = mysqli_query($this->con, $sql);
    return $res;
}

public function Cread()
{
    $sql = "SELECT * FROM control ORDER by id desc;";
    $res = mysqli_query($this->con, $sql);
    return $res;
}



    
}
