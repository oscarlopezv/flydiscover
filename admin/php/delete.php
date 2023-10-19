<?php
session_start();
include_once("conexion.php");
$sql=new conectar();
$sql->mysqlsrv();
extract($_GET);
extract($_POST);
switch ($id) {
	case "Usuarios":
		$query="Delete From usuarios where idUsuarios=$idUsuarios";		
	break;
    case "paquetes":
		$query="Delete From paquetes_menu where idpaquetes_menu=$paquete or jerarquia='$paquete'";		
	break;
	case "imagenpaquete":
		$query="Delete From imagenes_paquete where idimagenes_paquete=$idimg";		
	break;
    
}
$stmt= mysql_query($query) or die ("Fallo la creacion".mysql_error());
?>