<?php
session_start();
extract($_GET);
extract($_POST);
$url=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
if ( strpos($url, '/') !== FALSE ){
	$url=explode('/', $url);
    array_pop($url);
    array_pop($url);
    
    
	$url=implode('/', $url);
}
$url= "http://".$_SERVER['SERVER_NAME'].$url."/";
$mensaje=file_get_contents($url.$correo."?".$varsmail);
$para  = $mail;
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'From: '.$from. "\r\n";
$cabeceras .= 'Cc: info@flydiscover.club' . "\r\n";
mail($para, $título, $mensaje, $cabeceras);
//echo "<script> document.location='".$url."/conf-cotizador.php?cl=".base64_encode($nombre)."' </script>";
?>