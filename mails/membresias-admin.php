<?php
session_start();
include_once("../admin/php/conexion.php");
$sql=new conectar();
$sql->mysqlsrv();
$query="select * from clientes where idclientes=".base64_decode($_GET["idv"]) ;
$res=mysql_query($query) or die ("error".$query);
$row=mysql_fetch_array($res);
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>GENERAL</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>

<style>

.contefotos{
	width:100%;
	height:auto;
	position:relative;
	float:left;
	margin-bottom:20px;
	margin-top:20px;}
	.lafoto{
	width:48%;
	margin:1%;
	height:auto;
	float:left;
	position:relative;}

.boton-pro{
			width:50%;
			margin-left:25%;
			height:40px;
			background-color:rgba(255,110,0,1);
			color:rgba(255,255,255,1);
			text-align:center;
			padding-top:20px;
			font-size:13px;
			margin-top:0px;
			margin-bottom:30px;
			float:left;
			position:relative;
			opacity:1;
			border-radius: 30px;
			transition-duration: 0.3s;
			}
			
			.boton-pro:hover{
			
			opacity:0.8;
			border-radius: 30px;
			transition-duration: 0.3s;
			}
			
		.boton-pro a{
			color:rgba(255,255,255,1);
			font-size:13px;
			}

.texto-pro{
			width:100%;
		float:left;
		color:#666;
		font-size:14px;
		font-weight:300;
		}
		
		.texto-pro a{
		font-size:16px;
		color:rgba(255,114,0,1);
		text-decoration:underline;
		margin-left:15px;
		
		}
		
		.texto-pro a:hover{
		font-size:16px;
		color:rgba(255,153,0,1);
		text-decoration:underline;
		
		}

.pro-cen{
	width:100%;
	height:auto;
	float:right;
	position:relative;
	z-index:50;
	font-size:12px;
	color:rgba(153,153,153,1);
	font-weight:300;
	
	}
	
	.pro-cen h1{
		font-size:24px;
		font-weight:100;
		color:rgba(0,0,0,1);
		text-align:center;
		margin-bottom:1px;
	}
	
	.pro-cen h2{
		font-size:18px;
		font-weight:100;
		color:rgba(102,102,102,1);
		
	
	}
	
	
	.contenido-pro2{
			width:50%;
			float:left;
			position:relative;
			text-align:center;
			}
			
			.contenido-pro3{
			width:100%;
			float:left;
			text-align:center;
			position:relative;
			text-align:center;
			margin-bottom:50px;
			}
	
body{
	background-color:#fff;}
	
	.general
{
	border:none;
	padding-top:30px;
	color:#000;
	margin:0 auto;
	width:600px;
	min-height:20px;
	background-color:#F4F6F7;
	
	}
	

.estimado
{
	border:none;
	font-size:24px;
	font-family: 'Roboto', sans-serif;
	text-align:center;
	font-weight:200;
	color:#000;
	background-color:#F4F6F7;
	
	}
	
	.nombre
{
	font-size:24px;
	font-family: 'Roboto', sans-serif;
	text-align:center;
	font-weight:200;
	color:#333;
	padding-top:51x;
	padding-bottom:20px;
	
	}
	
	
	.unsus
{
	font-size:8px;
	font-family: 'Roboto', sans-serif;
	text-align:center;
	font-weight:300;
	color:#333;
	padding-top:10px;
	padding-left:50px;
	padding-right:50px
	
	}
	
	.unsus a
{
	
	color:#333;
	
	
	}
	
	.textounocentro
{
	font-size:14px;
	font-family: 'Roboto', sans-serif;
	text-align:center;
	font-weight:300;
	color:#333;
	padding-top:10px;
	padding-left:50px;
	padding-right:50px
	
	}
	
	.textounocentro a
    {
	color:#657F96;
	text-decoration:none;
	}
	
	.textounocentro a:hover
    {
	color:#000;
	text-decoration:none;
	}
	
	
	
	.textouno
{
	font-size:14px;
	font-family: 'Roboto', sans-serif;
	text-align:justify;
	font-weight:300;
	color:#333;
	padding-top:10px;
	padding-left:50px;
	padding-right:50px
	
	}
	
	.textodos
{
	font-size:14px;
	font-family: 'Roboto', sans-serif;
	text-align:center;
	font-weight:300;
	color:#333;
	padding-left:50px;
	padding-right:50px
	
	}
	
	.textodos span
{
	color:#FF6E02;
	
	}
	
	
	.textouno span
{
	font-weight:400;
	color:#000;
	}
	
	
	.textouno span2
{
	text-align:center;
	}
	
	
	

	@media screen and (max-width: 1000px) {
		
		.general
{
	border:none;
	margin-top:0px;
	margin-bottom:0px;
	color:#000;
	width:600px;
	min-height:20px;
	background-color:#F4F6F7;
	
	}
		
		}
		
		
		@media screen and (max-width: 600px) {
		
		.general
{
	border:none;
	margin-top:0px;
	margin-bottom:0px;
	color:#000;
	width:100%;
	min-height:20px;
	background-color:#F4F6F7;
	
	}
		
		}

.butt{
        font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #72388d;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
}
</style>



<body>


<table class="general" border="0" align="center">
  <tr>
    <td class="general"><img src="http://innovatourclub.com/flydiscover/images/sus.jpg" width="100%" height="auto"></td>
  </tr>
</table>



<table class="general" border="0" align="center">
 
 
  <tr>
  
  <td class="textodos"><br><br>
    Felicidades <h3><?php echo strtoupper($row["cliente"]) ?></h3><br>
    <br>
    Tu membresia ha sido activada con éxito.<br>
    Ahora puedes disfrutar de todos los beneficios   <br>
     como miembro de la familia FLY DISCOVER.
      <p></p>
      Tus credenciales para poder acceder<br> a nuestro sitio web son las siguientes:
      <h5>Usuario o Mail: <?php echo $row["mail"]?> <br>
      Password: <?php echo $_GET["pass"] ?></h5>
      <p></p>
      <a class="butt" href="http://innovatourclub.com/login.php">Iniciar sesión</a>
 <br>
</td>
     </tr>
     
      
     
    <td class="textouno">
    

                    
                   
                  
</td>
  </tr>
   <tr>
   
  </tr>
  
</table>



<table class="general" border="0" align="center">
  <tr>
    
  </tr>
</table>




<table width="50%" border="0" align="center">
  
  
</table>


</body>
</html>
