<?php
session_start();
include_once("conexion.php");
$sql=new conectar();
$sql->mysqlsrv();
extract($_GET);
extract($_POST);
switch ($id) {
	case "Usuarios":
		$query="select * from usuarios";		
	break;
    case "paquetes":
		$query="select * from paquetes_menu where jerarquia='$jerarquia' order by `index`";		
	break;
	case "imagenespaquetes":
		$query="select * from imagenes_paquete where idpaquete='$idpaquete' order by `index`";		
	break;
    case "cotizaciones":
		$query="select * from cotizaciones order by `idcotizaciones`";		
	break;
    case "membresias":
		$query="select * from clientes order by `idclientes` desc";		
	break;
    case "verifymail":
		$query="select mail from clientes where mail='$mail' and estado='Activo'";		
	break;
    case "verifysusc":
		$query="select mail from suscriptores where mail='$mail'";		
	break;
    case "suscriptores":
		$query="select * from suscriptores";		
	break;
    case "promocion":
		$query="select * from paquetes_menu where promocion=1  ";		
	break;
	case "popular":
		$query="select * from paquetes_menu where solicitado=1";		
	break;
    case "cotpaquetes":
		$query="select a.*,CONCAT(b.nombres,' ',b.apellidos) cliente,b.mail,b.telefonos from cotizacionespaq a 
                inner join clientes b on a.idcliente=b.idclientes order by a.idcotizacionespaq desc";		
	break;
    case "cotgenerales":
		$query="select a.*,CONCAT(b.nombres,' ',b.apellidos) cliente,b.mail,b.telefonos from cotizacionesg a 
                inner join clientes b on a.idcliente=b.idclientes order by a.idcotizacionesg desc";		
	break;
    case "sugerencias":
		$query="select a.*,CONCAT(b.nombres,' ',b.apellidos) cliente,b.telefonos,b.mail from sugerencias a 
                inner join clientes b on a.idcliente=b.idclientes";		
	break;
    case "ventas":
		$query="select * from ventas order by idventas desc";		
	break;
}
$resultado=mysql_query($query) or die (mysql_error());
$rows = array();
$i=0;
while( $row = mysql_fetch_array($resultado) ) {
	$rows[] = $row;
}
print json_encode($rows);
?>