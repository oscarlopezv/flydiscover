<?php
session_start();
include_once("../admin/php/conexion.php");
$sql=new conectar();
$sql->mysqlsrv();
extract($_POST);
$query="Insert into clientes (nombres,apellidos,mail,telefonos,domicilio,fecha_registro,tipo,estado)
values ('$nom','$ape','$mail','$tel','$dir',now(),'Web','Ingresado')";
$res=mysql_query($query) or die ("error");
$idv=mysql_insert_id();
$correo="mails/solmembresias.php";
$título="SOLICITUD DE MEMBRESÍA";

$varsmail="idv=".base64_encode($idv)."&pass=".base64_encode($pass);
$from='"FLY DISCOVER" <info@innovatourclub.com>';
//$mail='mneira@grupovilaseca.com';
include_once("correo.php"); 
echo "<script> document.location.href='../felicidades-perfil.php?idv=".base64_encode($idv)."' </script>";
?>