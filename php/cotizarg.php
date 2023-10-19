<?php
session_start();
include_once("../admin/php/conexion.php");
$sql=new conectar();
$sql->mysqlsrv();
extract($_POST);
extract($_GET);
$query="insert into cotizacionesg (origen,destino,idcliente,fida,fvuelta,adultos,ninos,infante,estado,fecha_registro,tipo)
values ('$origen','$destino','".$_SESSION["usuariop-id"]."','$fida','$fvuelta',$adul,$ninos,$infa,'Ingresado',now(),'$tipo')";
//$res=mysql_query($query) or die ("error");
die ($query);
$idv=mysql_insert_id();
$correo="mails/cotizarpaquete.php";
$título="COTIZACIÓN FLY DISCOVER";

$varsmail="idv=".base64_encode($idv)."&pass=".base64_encode($pass);
$from='"FLY DISCOVER" <info@innovatourclub.com>';
//$mail='mneira@grupovilaseca.com';
include_once("correo.php"); 
echo "<script> document.location.href='../felicidades-cot.php?idv=".base64_encode($idv)."' </script>";
?>