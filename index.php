<?php

;
session_start();
include_once("admin/php/conexion.php");
$sql=new conectar();
$sql->mysqlsrv();
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122693131-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122693131-1');
</script>

        <script src="js/jquery-2.1.4.min.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FLY DISCOVER</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="La empresa brinda una asistencia profesional a todos aquellos que necesiten un servicio de viaje. Damos un servicio a medida a todos nuestros clientes que desean viajar ya sea por vacaciones o negocios." />
        <meta name="title" content="FLY DISCOVER" />
	<meta name="keywords" content="TOURS, VIAJES, AGENCIA, FLY DISCOVER" />
	<meta name="author" content="geekdev.ec" />
        <meta name="robots" content="index,nofollow,noodp,nosnippet" />
        
    
     
    
    
        <link rel="shortcut icon" href="../favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/set1.css" />
        <link rel="stylesheet" type="text/css" href="css/style7.css" />
  		<script src="js/modernizr.custom.js"></script>
        
        

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        
        
        <style>
#hoverd {
  <?php if ($_GET['ver']=='y'){ ?>
    display: none;
  <?php } ?>
  position: fixed;
  background: #fff;
  width: 100%;
  height: 100%;
  opacity: 0.9;
    z-index:90000;
	margin-top:-30px;
	overflow:hidden;
}
#flags a{
    text-align: left;
     display: grid; 
     align-items: center;
}          
#flags {
  margin-top: 30px;
  top:30%;
  position: fixed;
  padding: 0px 0px;
  /* height/2 + padding-top */
  text-align: center;
 z-index:909090909090909099;
}
.link-popup{
    color:#000;
    text-align: center
}
a:hover .link-popup {
    color: #2c1eff;
}
@media only screen and (max-width: 1024px) {
    #flags a{
        display: inline-flex;  
    }
}
</style>  
</head>
<body>
    
    <div id="hoverd" style="width:100%; height:150%;position:fixed;background-color:#fff;opacity:0.9;overflow:hidden;z-index:909090990900909"></div>

  
<?php if ($_GET["ver"]!='y'){ ?>
<div id="flags" class="col-md-6 col-md-offset-3">
    <div class="col-md-4 col-xs-12">
        <a href="https://flydiscover.club/?ver=y" class="col-xs-6 col-xs-offset-3" style="text-align: left">
        <img src="images/logo_fly.png" width='100px' class="margin-bottom-20"/>
        <span class="link-popup">FLYDISCOVER</span>
        </a>
    </div>
    <div class="col-md-4 col-xs-12" >
        <a href="https://exoeduca.com/" class="col-xs-6 col-xs-offset-3" style="text-align: left">
        <img src="http://www.nextmark.online/images/exoeduca_iso.png" width='100px' class="margin-bottom-20"/>
        <span class="link-popup">EXOEDUCA</span>
        </a>
    </div>
    <div  class="col-md-4 col-xs-12">
        <a href="https://salud.flydiscover.club/" class="col-xs-6 col-xs-offset-3" style="text-align: left">
        <img src="images/logo_salud.png" width='100px' class="margin-bottom-20"/>
        <span class="link-popup">SALUD</span>
        </a>
    </div>
</div>
<?php } ?>   
    
   
            
            
	<div id="fh5co-wrapper">
		
	<div id="fh5co-page">
    
   

            
            
            
            
        
        
    
    <div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo">
                    	<div class="logo"><a href="index.php"><img src="images/logo3.png" width="100%" height="auto"></a> </div>
                    </h1>
                    
                    
					
				</div>
			</div>
		</header>
        <div class="buscador">
        <div class="buscar-texto">
        <form method="get" id="busquedaf" action="busqueda.php">
        <input name="buscartext" id="buscartext" type="text" placeholder="BUSCAR PAQUETES" class="buscar"> 
        </form>
        </div>
        <div class="lupaa" onclick="buscarp()" style="cursor:pointer"><img src="images/lupa2.png" width="100%" height="auto"></div>
        </div>
        <?php if (isset($_SESSION["usuariop"]) && $_SESSION["usuariop"]!='') { ?>
         <div class="nom"><?php echo $_SESSION["usuariop-name"] ?></div>
         <a href="php/log-out.php"><div class="inicia">CERRAR SESION</div></a>
        <?php } else { ?>        
		<a href="login.php"><div class="inicia">INICIAR SESION</div></a>
        <?php } ?>
        <div class="user">
        	<img src="images/user.png" width="43" height="auto">
        </div>
	</div>
    
    
    
	
	<!-- end:fh5co-header -->
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
                
            <?php 
                $queryslide="select * from paquetes_menu where `verindex`=1 and categoria='Menu'";
                $resslide=mysql_query($queryslide);
                while ($rowslide=mysql_fetch_assoc($resslide)){
            ?>
		   	<li style="background-image: url(admin/images/<?php echo $rowslide["imagen"] ?>);">
		   		<div class="overlay-gradient"></div>
	   		  <div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span></span></p>
		   						<h2><?php echo $rowslide["descripcion"] ?></h2>
			   					<p>
			   						<a href="destinos.php?id=<?php echo $rowslide["idpaquetes_menu"] ?>" class="btn btn-primary btn-lg">Ver más</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<?php } ?>
		   	
		  	</ul>
	  	</div>
	</aside>
	<div class="wrap">
		<div class="container">
			<div class="row">
				<div id="availability">
					<form action="php/suscribir.php" method="post" id="susc">
						<div class="a-col alternate">
							<div class="input-field">
								<div class="lupa"><img src="images/lupa.png" width="100%" height="auto"></div>
                              <div class="texto-lupa">RECIBE NOTICIAS Y PROMOCIONES</div>
								<input name="mail" id="mail" type="text" class="ti-stamp" placeholder="INGRESA AQUI TUS DATOS">
							</div>
						</div>
						<div class="a-col action">
							<a href="Javascript:" onclick="$('#susc').submit()">
								<span>SUSCRIBIRME</span>
								
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
        <script src="js/dsr.js"></script>

    
    <div class="esparre">
    	
    </div>
    
    <div class="espacio">
    
  
			
					<div class="section-title text-center">
						<div class="espacio-titulo"><h2>DESTACADOS</h2></div>
						<div class="espacio-titulo"><h2><img src="images/destacados.png" width="50" height="50" alt=""/></h2>
						</div>
					</div>
				
			
    
    <div id="fh5co-hotel-section">
		
   
				<div class="grid">
                    <?php
                    $querydesc="Select * from paquetes_menu where categoria='Paquete' and solicitado=1 ";
                    $resdesc=mysql_query($querydesc) or die ("error".mysql_error());
                    while ($rowdesc=mysql_fetch_array($resdesc)){
                    ?>
					<figure class="effect-milo">
						<img src="admin/images/<?php echo $rowdesc["imagen"] ?>" alt="img11"/>
						<figcaption>
							<h2><?php echo $rowdesc["descripcion"] ?> <span></span></h2>
							<p><?php echo $rowdesc["alias"] ?><br><span><?php echo $rowdesc["precio"] ?></span></p>
                            
							<a href="paquete.php?id=<?php echo $rowdesc["idpaquetes_menu"] ?>">View more</a>
						</figcaption>			
					</figure>
                    <?php } ?>
                    
                    
                    
				</div>
                
                
                
                
	</div>
    </div>
        
        
    <div class="espacio">
    
  
			
					<div class="section-title text-center">
						<div class="espacio-titulo"><h2>PROMOCIONES</h2></div>
						<div class="espacio-titulo"><h2><img src="images/destacados.png" width="50" height="50" alt=""/></h2>
						</div>
					</div>
				
			
    
    <div id="fh5co-hotel-section">
		
   
				<div class="grid">
                    <?php
                    $querydesc="Select * from paquetes_menu where categoria='Paquete' and promocion=1 ";
                    $resdesc=mysql_query($querydesc) or die ("error".mysql_error());
                    while ($rowdesc=mysql_fetch_array($resdesc)){
                    ?>
					<figure class="effect-milo">
						<img src="admin/images/<?php echo $rowdesc["imagen"] ?>" alt="img11"/>
						<figcaption>
							<h2><?php echo $rowdesc["descripcion"] ?> <span></span></h2>
							<p><?php echo $rowdesc["alias"] ?><br><span><?php echo $rowdesc["precio"] ?></span></p>
                            
							<a href="paquete.php?id=<?php echo $rowdesc["idpaquetes_menu"] ?>">View more</a>
						</figcaption>			
					</figure>
                    <?php } ?>
                    
                    
                    
				</div>
                
                
                
                
	</div>
    </div>
    
    
    
    

	

	

	


	

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy; 2017 FLY DISCOVER. <br> 
                        
                        </small></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<h3>Menú</h3>
							<ul class="link">
								<li><a href="index.php">Inicio</a></li>
								
								<li><a href="nosotros.php">Nosotros</a></li>
								<li><a href="contacto.php">Contáctanos</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3>Paquetes</h3>
							<ul class="link">
                                <?php
                                $querymenu="SELECT * FROM paquetes_menu where jerarquia='' order by `index`";
                                $resmenu=mysql_query($querymenu) or die ("error".mysql_error());
                                while ($rowmenu=mysql_fetch_array($resmenu)){
                                ?>
								<li><a href="destinos.php?id=<?php echo $rowmenu["idpaquetes_menu"] ?>"><?php echo ucwords(strtolower($rowmenu["descripcion"])) ?></a></li>
								
                                <?php } ?>
							</ul>
						</div>
						<div class="col-md-6">
							<h3>Contáctanos</h3>
							 Email: info@innovatourclub.com <br>
                        Teléfono: 0423906268<br>
						0958967242 / 0992195393 <br>  
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="social-icons">
						<li>
							<a href="https://www.facebook.com/grupoinnovaec/" target="_blank"><i class="icon-facebook-with-circle"></i></a>
							<a href="https://www.instagram.com/grupoinnovaec/" target="_blank"><i class="icon-instagram-with-circle"></i></a>
							<a href="https://twitter.com/GrupoInnovaEc" target="_blank"><i class="icon-twitter-with-circle"></i></a>
							
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	</div>
	<!-- END fh5co-page -->
    
    
 
	</div> 
    <div id="hoverd" style="width:100%; height:100%;position:fixed;background-color:#000;opacity:0.7;overflow:hidden;z-index:909090990900909;visibility:hidden"></div>

  <div id="popup" style="">
    <div id="close" onclick="ocultar()">X</div>
    <iframe  height="450"  src="https://www.youtube.com/embed/tEwK-9RxG5Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    
        
        
     <section>
				
				<p><button id="trigger-overlay" type="button">-<br>-<br>-</button></p>
			</section>
            
	<!-- END fh5co-wrapper -->
    <div class="overlay overlay-contentpush">
			<button type="button" class="overlay-close">Close</button>
			<nav>
				<ul>
					<li></i><a href="index.php"><i class="fa fa-home fa-2x"></i>&nbsp;INICIO</a></li>
					<li><a href="nosotros.php"><i class="fa fa-users fa-2x"></i>&nbsp;NOSOTROS</a></li>
					<?php
                    $querymenu="SELECT * FROM paquetes_menu where jerarquia='' order by `index`";
                    $resmenu=mysql_query($querymenu) or die ("error".mysql_error());
                    while ($rowmenu=mysql_fetch_array($resmenu)){
                    ?>
					<li style="text-transform:uppercase"><a href="destinos.php?id=<?php echo $rowmenu["idpaquetes_menu"] ?>"><i class="fa fa-map fa-2x"></i>&nbsp;<?php echo $rowmenu["descripcion"] ?></a></li>
					<?php } ?>
                    <li></i><a href="cotizaciones.php"><i class="fa fa-credit-card-alt fa-2x"></i>&nbsp;COTIZAR</a></li>
					
					
					<li><a href="sugerencias.php"><i class="fa fa-telegram fa-2x"></i>&nbsp;SUGERENCIAS</a></li>
				</ul>
			</nav>
		</div>
        
	
	<!-- Javascripts -->
	
	<!-- Dropdown Menu -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Slider -->
	<!-- // <script src="js/owl.carousel.min.js"></script> -->
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>

	<script src="js/selectFx.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<script src="js/custom.js"></script>
    
    
    
    
    <script>
        function ocultar(){
            $("#hoverd").hide()
            $("#popup").hide()
        }
    </script>
    
    <script>
			// For Demo purposes only (show hover effect on mobile devices)
			[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
				el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			} );
		</script>
        
        
        <script src="js/classie.js"></script>
		<script src="js/demo7.js"></script>

</body>
</html>