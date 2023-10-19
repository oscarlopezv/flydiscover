<?php
session_start();
include_once("../admin/php/conexion.php");
$sql=new conectar();
$sql->mysqlsrv();
extract($_POST);
$query="Insert into sugerencias (idcliente,sugerencia,fecha_registro)
values ('".$_SESSION["usuariop-id"]."','$suge',now())";
$res=mysql_query($query) or die ("error");
$idv=mysql_insert_id();
$correo="mails/sugerencias.php";
$título="SUGERENCIA RECIBIDA";
$mail="a2daniel@hotmail.com";
$varsmail="idv=".base64_encode($idv)."&pass=".base64_encode($pass);
$from='"FLY DISCOVER" <info@innovatourclub.com>';
//$mail='mneira@grupovilaseca.com';
include_once("correo.php"); 
echo "<script> document.location.href='../felicidades-sug.php?idv=".base64_encode($idv)."' </script>";
?>