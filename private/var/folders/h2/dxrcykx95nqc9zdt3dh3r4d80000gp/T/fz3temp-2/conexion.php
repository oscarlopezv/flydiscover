<?php
class conectar{
	function mysqlsrv(){
		global $conn,$bd;
		//$conn = mysql_connect( "186.3.229.195" , "creatlw6_ceti", "Ceti2014" ) or die ( print_r("Error de conexion ".mysql_error()));
		//$bd=mysql_select_db("creatlw6_cetitur") or die ("Error de conexion a la base de datos");
		$conn = mysql_connect( "localhost" , "innovdl8_UserWeb", "InnovaWeb2018." ) or die ( print_r("Error de conexionm ".mysql_error()));
		$bd=mysql_select_db("innovdl8_Innovaweb") or die ("Error de conexion a la base de datos");
	}
}
?>
