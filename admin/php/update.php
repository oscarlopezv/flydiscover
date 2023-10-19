<?php
session_start();
include_once("conexion.php");
$sql=new conectar();
$sql->mysqlsrv();
$costosocio=0;
$costonosocio=0;
extract($_GET);
extract($_POST);
if ($id=="suscripcion"){
    $queryconf="select estado from clientes where idclientes=".$idcot;
    $resconf=mysql_query($queryconf);
    $rowconf=mysql_fetch_assoc($resconf);
    $estadopre=$rowconf["estado"];
}

switch ($id) {
	case "Usuarios":
		$query="Update usuarios set Nick='$Nick',Correo='$Correo',fecha_creacion=now() where idUsuarios=$idUsuarios";
	break;
    case "paquetes":
        /*if ($verindex=="true"){
            $queryindex="update paquetes_menu set verindex=0 where 1";
            mysql_query($queryindex) or die ("Error index");
        }*/
        
		$query="Update paquetes_menu set		descripcion='$descripcion',imagen='$imagen',imagen_header='$imagen2',categoria='$categoria',jerarquia='$jerarquia',fecha_creacion=now(),verindex=$verindex,promocion=$promocion,solicitado=$solicitado,detalle='".htmlentities(addslashes($detalle))."' ,precio='$precio',logo='$logo',alias='$alias', tags='$tags',programacruceros='$programacrucero',archivo='$archivo'
		where idpaquetes_menu=$idpaquete";		
	break;
    case "menu":
        $jerarquia=($jerarquia=="undefined")?"":$jerarquia;
		$query="Update paquetes_menu set		descripcion='$descripcion',imagen='$imagen',imagen_header='$imagen2',categoria='$categoria',jerarquia='$jerarquia',verindex=$verindex
		where idpaquetes_menu=$idpaquete";		
	break;
	case "indexpaquetes":
		$json = json_decode($paquetes, true);
		$query='update paquetes_menu set `index` = case idpaquetes_menu ';		
		foreach($json as $K=>$V){
			$querypd.= $V[0].",";
			$queryp.=' when '.$V[0].' then '.$K;			
		}
		$query.=$queryp.' end where idpaquetes_menu in ('.substr($querypd, 0, -1).')';
	break;
	case "indeximgpaquetes":
		$json = json_decode($paquetes, true);
		$query='update imagenes_paquete set `index` = case idimagenes_paquete ';		
		foreach($json as $K=>$V){
			$querypd.= $V[0].",";
			$queryp.=' when '.$V[0].' then '.$K;			
		}
		$query.=$queryp.' end where idimagenes_paquete in ('.substr($querypd, 0, -1).')';
	break;
    case "clientes":
		$query="Update clientes set nombres='$nombres',apellidos='$apellidos',mail='$mail',telefonos='$telefonos',domicilio='$domicilio',contrato='$contrato',observacion='$observacion' where idclientes=$idn";
	break;
    case "eliminarpopular":
		$query="Update paquetes_menu set solicitado=0 where idpaquetes_menu=".$idpromo;
	break;
    case "eliminarpromo":
		$query="Update paquetes_menu set promocion=0 where idpaquetes_menu=".$idpromo;
	break;
    case "cotizacionespaq":
		$query="Update cotizacionespaq set observacion='$observacion',precio='$precio',estado='$estado',payoneer='$link' where idcotizacionespaq=$idcot";
	break;
    case "cotizacionesg":
		$query="Update cotizacionesg set observacion='$observacion',precio='$precio',estado='$estado',payoneer='$link' where idcotizacionesg=$idcot";
	break;
    case "suscripcion":
		$query="Update clientes set observacion='$observacion',precio='$precio',estado='$estado',payoneer='$link' where idclientes=$idcot";
	break;
}

$stmt= mysql_query($query) or die ($query.mysql_error());
if ($id=="cotizacionespaq"){
        if ($estado=="Confirmado (Payoneer)" || $estado=="Confirmado (Deposito)"){
            $idc=mysql_insert_id();
            if ($estado=="Confirmado (Payoneer)"){
                $correo="mails/cotpaqpayoneer.php";
            } else if ($estado=="Confirmado (Deposito)"){
                $correo="mails/cotpaqdeposito.php";
            }
            
            $título="Cotización confirmada";            
            $varsmail="idv=".base64_encode($idcot)."&pass=".base64_encode($pass);
            $from='"INNOVA TOUR" <info@innovatourclub.com>';
            //$mail='mneira@grupovilaseca.com';
            include_once("correo.php");   
        }
}
if ($id=="cotizacionesg"){
        if ($estado=="Confirmado (Payoneer)" || $estado=="Confirmado (Deposito)"){
            $idc=mysql_insert_id();
            if ($estado=="Confirmado (Payoneer)"){
                $correo="mails/cotpayoneerg.php";
            } else if ($estado=="Confirmado (Deposito)"){
                $correo="mails/cotdepositog.php";
            }
            
            $título="Cotización confirmada";            
            $varsmail="idv=".base64_encode($idcot)."&pass=".base64_encode($pass);
            $from='"INNOVA TOUR" <info@innovatourclub.com>';
            //$mail='mneira@grupovilaseca.com';
            include_once("correo.php");   
        }
}
if ($id=="suscripcion"){
        if ($estado=="Confirmado (Payoneer)" || $estado=="Confirmado (Deposito)" || $estado=="Activo"){
            
            if ($estado=="Confirmado (Payoneer)"){
                $título="PAGO MEMBRESIA";  
                $correo="mails/suscpayoneer.php";
            } else if ($estado=="Confirmado (Deposito)"){
                $título="PAGO MEMBRESIA";  
                $correo="mails/suscdeposito.php";
            } else if ($estado=="Activo"){
                
                if ($estadopre!='Activo'){
                    $título="MEMBRESIA ACTIVA";  
                    $pass=uniqid('INNOVA');
                    $queryn="update clientes set password=md5('$pass') where idclientes=".$idcot;
                    $copia='Cc: security@innovatourclub.com' . "\r\n";
                    $copia.='Cc: geekdev.ec@gmail.com' . "\r\n";
                    $stmtn= mysql_query($queryn) or die ($query.mysql_error());
                    $correo="mails/membresias-admin.php";
                } else {
                    die ('');
                }
            }
             
            $varsmail="idv=".base64_encode($idcot)."&pass=".$pass;
            $from='"INNOVA TOUR" <info@innovatourclub.com>';
            //$mail='mneira@grupovilaseca.com';
            include_once("correo.php");   
        }
}

?>