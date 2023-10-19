<?php
session_start();
include_once("../admin/php/conexion.php");
$sql=new conectar();
$sql->mysqlsrv();
extract($_POST);
extract($_GET);
$query="select *,md5('$pass') passverificar from clientes where mail='$usu' and estado='Activo'";
$res=mysql_query($query);
$row=mysql_fetch_assoc($res);
if (mysql_num_rows($res)>0){
    if ($row["password"]==$row["passverificar"]){
        $_SESSION["usuariop"] = $row["mail"];
        $_SESSION["usuariop-id"] = $row["idclientes"];
        $_SESSION["usuariop-name"] = $row["nombres"]." ".$row["apellidos"];
        echo "<script> document.location.href='../index.php' </script>";
    } else {
        echo "<script> alert('El password ingresado no es el correcto') </script>";
        echo "<script> document.location.href='../login.php' </script>";
    }
} else {
    echo "<script> alert ('El mail ingresado es erroneo') </script>";
    echo "<script> document.location.href='../login.php' </script>";
}
?>