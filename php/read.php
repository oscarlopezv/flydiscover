<?php
session_start();
include_once("../admin/php/conexion.php");
$sql=new conectar();
$sql->mysqlsrv();
extract($_GET);
extract($_POST);
switch ($id) {	
    case "ciudades":
		$query="select Concat(b.Pais,' - ',a.Ciudad) Ciudad from Ciudades a
                inner join Paises b on a.Paises_Codigo=b.Codigo   where ciudad like '%".$filter["filters"]["0"]["value"]."%'";		
	break;	
    case "ciudades2":
		$query="select Concat(b.Pais,' - ',a.Ciudad) id,Concat(b.Pais,' - ',a.Ciudad) label,Concat(b.Pais,' - ',a.Ciudad) value from Ciudades a
                inner join Paises b on a.Paises_Codigo=b.Codigo   where ciudad like '%$ciudad%'";		
	break;	
    
}
$resultado=mysql_query($query) or die (mysql_error());
$rows = array();
$i=0;
while( $row = mysql_fetch_assoc($resultado) ) {
	$rows[] = $row;
}
print json_encode($rows);
?>