<?php
session_start();
include_once("conexion.php");
$sql=new conectar();
$sql->mysqlsrv();
extract($_GET);
extract($_POST);

switch ($id) {
	case "Usuarios":
		$query="Insert into usuarios (nick,correo,password,fecha_creacion) values ('$Nick','$Correo',MD5('$Nick'),now())";		
	break;
    case "paquetes":
		$query="Insert into paquetes_menu (descripcion,jerarquia,categoria,fecha_creacion,imagen,imagen_header,`index`,logo,alias,precio) 
				Select '$descripcion','$jerarquia','$categoria',now(),'$imagen','$imagen2',IF(max(`index`) IS NULL or max(`index`) = '', 1, max(`index`)+1),'$logo','$nalias','0'
				from paquetes_menu where jerarquia='$jerarquia'";		
	break;
    case "menu":
        $jerarquia=($jerarquia=="undefined")?"":$jerarquia;
		$query="Insert into paquetes_menu (descripcion,jerarquia,categoria,fecha_creacion,imagen,imagen_header,`index`,precio) 
				Select '$descripcion','$jerarquia','$categoria',now(),'$imagen','$imagen2',IF(max(`index`) IS NULL or max(`index`) = '', 1, max(`index`)+1),'0'
				from paquetes_menu ";		
	break;
	case "imagenespaquetes":
		$query="Insert into imagenes_paquete (imagen,idpaquete,`index`) 
				Select '$imagen','$paquete',IF(max(`index`) IS NULL or max(`index`) = '', 1, max(`index`)+1)
				from imagenes_paquete";
	break;
    case "clientes":
        $pass=uniqid('INNOVA');
		$query="Insert into clientes (nombres,apellidos,mail,telefonos,domicilio,tipo,contrato,password,observacion,fecha_registro,estado) values  ('$nombres','$apellidos','$mail','$telefonos','$domicilio','Administrador','$contrato',md5('$pass'),'$observacion',now(),'Activo')";		
	break;
}
$stmt= mysql_query($query) or die ("Fallo la creacion".mysql_error());
if ($id=="clientes"){
        $idc=mysql_insert_id();
        $correo="mails/membresias-admin.php";
        $título="Bienvenido";
        $copia='Cc: security@innovatourclub.com' . "\r\n";
        $copia.='Cc: geekdev.ec@gmail.com' . "\r\n";
        $varsmail="idv=".base64_encode($idc)."&pass=".$pass;
        $from='"INNOVA TOUR" <info@innovatourclub.com>';
        //$mail='mneira@grupovilaseca.com';
        include_once("correo.php");   
}
?>