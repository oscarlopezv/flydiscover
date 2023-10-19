<?php
session_start();
include_once("../admin/php/conexion.php");
$sql=new conectar();
$sql->mysqlsrv();
extract($_POST);
extract($_GET);
$pass=uniqid('INNOVA');
$query="Update clientes set password=md5('$pass') where mail='$mail' and estado='Activo'";
$res=mysql_query($query) or die ("error".$query);
$idv=mysql_insert_id();
$correo="mails/recoverpass.php";
$título="Recuperar Clave";
$varsmail="idv=".base64_encode($idv)."&pass=".base64_encode($pass);
$from='"FLY DISCOVER" <info@innovatourclub.com>';
//$mail='mneira@grupovilaseca.com';
include_once("correo.php"); 
echo "<script> document.location.href='../felicidades-recover.php?idv=".base64_encode($idv)."' </script>";
?>