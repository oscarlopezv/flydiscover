<?php
session_start();
include_once("../admin/php/conexion.php");
$sql=new conectar();
$sql->mysqlsrv();
extract($_POST);
extract($_GET);
if (isset($mail) && $mail!=""){
    $query="insert into suscriptores (mail,fecha_registro) values ('$mail',now())";
    $res=mysql_query($query) or die ("Error");
    $idv=mysql_insert_id();
    $correo="mails/suscripcion.php";
    $título="SUSCRIPCIÓN";
    $varsmail="idv=".base64_encode($idv)."&pass=".base64_encode($pass);
    $from='"FLY DISCOVER" <info@innovatourclub.com>';
    //$mail='mneira@grupovilaseca.com';
    include_once("correo.php"); 
    echo "<script> document.location.href='../felicidades-susc.php?idv=".base64_encode($idv)."' </script>";
    
} else {
    echo "<script> document.location.href='../index.php' </script>";
}
?>