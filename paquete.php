<?php 
session_start();

include_once("admin/php/conexion.php");
$sql=new conectar();
$sql->mysqlsrv();
$query="select * from paquetes_menu where categoria='Paquete' and idpaquetes_menu=".$_GET["id"];
$res=mysql_query($query) or die ("error");
$row=mysql_fetch_array($res);
// include_once("validarlogin.php");
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
         <script src="js/min/jquery-v1.10.2.min.js" type="text/javascript"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FLY DISCOVER</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
    
    
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/set1.css" />
        <link rel="stylesheet" type="text/css" href="css/style7.css" />
        <link rel="stylesheet" href="css/style-calendar.css">
        
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
    
    
    <!--Required libraries-->
   
    <script src="js/min/jquery-finger-v0.1.0.min.js" type="text/javascript"></script>

    <!--Include flickerplate-->
	<link href="css/flickerplate.css"  type="text/css" rel="stylesheet">
    <script src="js/min/flickerplate.min.js" type="text/javascript"></script>
	
	<!--Execute flickerplate-->
	<script>
	$(document).ready(function(){
		
		$('.flicker-example').flicker();
	});
	</script>
    <style>
    ::placeholder{
        color: #72388d
        }
    .descripcionpaq table{
        display: none
    }
        .buscar::placeholder{
            color:#fff
        }
        figure.effect-milo h2{
            white-space: initial
        }
        
        @media (max-width: 500px) {


            
            .grid figure{
                height: 200px;
            }


        }
        
    </style>
    <link rel="stylesheet" href="css/dsr.css">
   <style>
        
    </style>

</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo">
                        <div class="logo"><a href="index.php"><img src="images/logo3.png" width="100%" height="auto"></a> </div>
                    </h1>
                    
                    
					
				</div>
			</div>
		</header>
        <div class="buscador">
        <div class="buscar-texto">
        <form method="get" id="busquedaf" action="busqueda.php">
        <input name="buscartext" value="<?php echo $_GET["buscartext"] ?>" id="buscartext" type="text" placeholder="BUSCAR PAQUETES" class="buscar">
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
	
	
        
    
    
    
    
	<div class="parallax">
        <?php
            $queryhead="select * from paquetes_menu where idpaquetes_menu=".$row["jerarquia"];
            $reshead=mysql_query($queryhead);
            $rowhead=mysql_fetch_array($reshead);
        ?>
    <img src="admin/images/<?php echo $rowhead["imagen_header"] ?>" width="100%" height="auto">
    </div>
    
      <div class="espacio" style="text-align:left">
		

	<div id="fh5co-hotel-section">
		
        
        <div class="paquete">
        	<div class="paquete-izq">
            
            <!--Basic example-->
	<div class="flicker-example" data-block-text="false">
		
		<ul>
			<?php
            $queryslide="select * from imagenes_paquete where idpaquete=".$_GET["id"]." order by `index`";
            $resslide=mysql_query($queryslide);
            while ($rowslide=mysql_fetch_array($resslide)){
            ?>
			<li data-background="admin/images/<?php echo $rowslide["imagen"] ?>">
				
			</li>
			<?php } ?>
			
			
		</ul>
		
	</div>
    
    </div>
            <?php

                if ($_SESSION["usuariop"]!='' || isset($_SESSION["usuariop"])){

            ?>
            <div class="paquete-der">
            	<h1><?php echo $row["descripcion"] ?></h1>
                <p><?php echo $row["alias"] ?> </p>
                <span><?php echo $row["precio"] ?></span>
                <div class="boton" onclick="cotizar()">COTIZAR</div>
            </div>
            
            <?php } ?>
            <div class="paquete-total">
                <form action="php/cotizarpaq.php" method="post" id="formcotpaq">
            <!--<form action="php/cotizarpaq.php" method="post" id="formcotpaq">
              
              
              <div class="tit-form-text">Fecha de ida</div>
              <div class="tit-form-text">Fecha de regreso</div>
              
              <div class="form-text">
              	
               
			<div class="calendar-wrapper">
		<div class="calendar-base">
		<div class="calendar-header">
		<div class="month-wrapper">
			<div class="header-prev-month"></div>
			<div class="header-current-month">September</div>
			<div class="header-next-month"></div>
		</div>

			<div class="header-current-day-number">, 23</div>
			
		<div class="year-wrapper">
			<div class="header-prev-year"></div>
			<div class="header-current-year">2014</div>
			<div class="header-next-year"></div>
		</div>

		</div>
			<div class="small-wrapper">
			<div class="calendar">
				<div class="column">
					<div class="column-item weekday">Su</div>
					<div class="column-item prev-month">29</div>
					<div class="column-item">5</div>
					<div class="column-item">12</div>
					<div class="column-item">19</div>
					<div class="column-item">26</div>
				</div>

				<div class="column">
					<div class="column-item weekday">Mo</div>
					<div class="column-item prev-month">30</div>
					<div class="column-item">6</div>
					<div class="column-item">13</div>
					<div class="column-item">20</div>
					<div class="column-item">27</div>
				</div>

				<div class="column">
					<div class="column-item weekday">Tu</div>
					<div class="column-item prev-month">31</div>
					<div class="column-item">7</div>
					<div class="column-item">14</div>
					<div class="column-item">21</div>
					<div class="column-item">28</div>
				</div>

				<div class="column">
					<div class="column-item weekday">We</div>
					<div class="column-item">1</div>
					<div class="column-item">8</div>
					<div class="column-item">15</div>
					<div class="column-item">22</div>
					<div class="column-item">29</div>
				</div>

				<div class="column">
					<div class="column-item weekday">Th</div>
					<div class="column-item">2</div>
					<div class="column-item">9</div>
					<div class="column-item">16</div>
					<div class="column-item">23</div>
					<div class="column-item">30</div>
				</div>

				<div class="column">
					<div class="column-item weekday">Fr</div>
					<div class="column-item">3</div>
					<div class="column-item">10</div>
					<div class="column-item">17</div>
					<div class="column-item">24</div>
					<div class="column-item next-month">1</div>
				</div>

				<div class="column">
					<div class="column-item weekday">Sa</div>
					<div class="column-item">4</div>
					<div class="column-item">11</div>
					<div class="column-item">18</div>
					<div class="column-item">25</div>
					<div class="column-item next-month">2</div>
				</div>
			</div>
			</div>

 </div>
 </div>		
            	</div>
            	
            	
            	
            	
    <div class="form-text">
               
			<div class="calendar-wrapper">
		<div class="calendar-base">
		<div class="calendar-header">
		<div class="month-wrapper">
			<div class="header-prev-month"></div>
			<div class="header-current-month">September</div>
			<div class="header-next-month"></div>
		</div>

			<div class="header-current-day-number">, 23</div>
			
		<div class="year-wrapper">
			<div class="header-prev-year"></div>
			<div class="header-current-year">2014</div>
			<div class="header-next-year"></div>
		</div>

		</div>
			<div class="small-wrapper">
			<div class="calendar">
				<div class="column">
					<div class="column-item weekday">Su</div>
					<div class="column-item prev-month">29</div>
					<div class="column-item">5</div>
					<div class="column-item">12</div>
					<div class="column-item">19</div>
					<div class="column-item">26</div>
				</div>

				<div class="column">
					<div class="column-item weekday">Mo</div>
					<div class="column-item prev-month">30</div>
					<div class="column-item">6</div>
					<div class="column-item">13</div>
					<div class="column-item">20</div>
					<div class="column-item">27</div>
				</div>

				<div class="column">
					<div class="column-item weekday">Tu</div>
					<div class="column-item prev-month">31</div>
					<div class="column-item">7</div>
					<div class="column-item">14</div>
					<div class="column-item">21</div>
					<div class="column-item">28</div>
				</div>

				<div class="column">
					<div class="column-item weekday">We</div>
					<div class="column-item">1</div>
					<div class="column-item">8</div>
					<div class="column-item">15</div>
					<div class="column-item">22</div>
					<div class="column-item">29</div>
				</div>

				<div class="column">
					<div class="column-item weekday">Th</div>
					<div class="column-item">2</div>
					<div class="column-item">9</div>
					<div class="column-item">16</div>
					<div class="column-item">23</div>
					<div class="column-item">30</div>
				</div>

				<div class="column">
					<div class="column-item weekday">Fr</div>
					<div class="column-item">3</div>
					<div class="column-item">10</div>
					<div class="column-item">17</div>
					<div class="column-item">24</div>
					<div class="column-item next-month">1</div>
				</div>

				<div class="column">
					<div class="column-item weekday">Sa</div>
					<div class="column-item">4</div>
					<div class="column-item">11</div>
					<div class="column-item">18</div>
					<div class="column-item">25</div>
					<div class="column-item next-month">2</div>
				</div>
			</div>
			</div>

 </div>
 </div>		
            	</div>
             
             
              
               
              <input type="text" name="adul" id="adul" class="form-text" placeholder="Escribe el número de Adultos (+12 años)"/>
                <input type="text" name="ninos" id="ninos" class="form-text" placeholder=" Escribe el número de Niños (1 a 11 años)"/>
                 <input type="text" name="infa" id="infa" class="form-text" placeholder="Escribe el número de Infantes (0 a 11 meses)"/>
                <input type="submit" class="form-bot" value="Enviar"><br><br><br>
                <input type="hidden" name="idpaquete" value="<?php echo $_GET["id"] ?>" />
                <input type="hidden" name="paquete" value="<?php echo $row["descripcion"] ?>" />
                       
            </form>-->
            
                
            <div class="form formpaq" style="display:none">
            
    
            
            
   
      
       
  <div id="basicExample">
       <input type="text" name="fida" class="question date start" id="fida" required/>
  <label for="fida"><span>Fecha de Ida</span></label>
       
       <input type="text" name="fvuelta" class="question date end" id="fvuelta" required/>
  <label for="fvuelta"><span>Fecha de Regreso</span></label>

      
      </div>       
       
       <select name="tipo">
           <option>Vuelo</option>
           <option>Hospedaje</option>
           <option>Vuelo + Hospedaje</option>
       </select>
       <input type="text" name="adul" class="question" id="adul" required/>
  <label for="adul"><span>Adultos (+12 años)</span></label>
       <input type="text" name="ninos" class="question" id="ninos" required/>
  <label for="ninos"><span>Niños (1 a 11 años)</span></label>
       <input type="text" name="infa" class="question" id="infa" required/>
  <label for="infa"><span>Infantes (0 a 11 meses)</span></label>
       
       <br>
                <button type="submit" class="form-bot" value="Enviar" style="border:block;width:100%" >Enviar</button>
       <input type="hidden" name="idpaquete" value="<?php echo $_GET["id"] ?>" />
                <input type="hidden" name="paquete" value="<?php echo $row["descripcion"] ?>" />
      
                </form>
                
      </div> <br><br>     
            
            <div id="erroresmsgs"></div>
                <p></p>
            <div class="descripcionpaq">
            <?php echo html_entity_decode($row["detalle"]) ?>
            </div>
            <!--
            <div class="paquete-total-formulario" >
            <input name="NOMBRES" type="text" class="informacion" placeholder="NOMBRES">
            <input name="NOMBRES" type="text" class="informacion" placeholder="CORREO">
            <input name="NOMBRES" type="text" class="informacion" placeholder="TELÉFONO">
            <input name="NOMBRES" type="text" class="informacion" placeholder="OBSERVACIONES">
            <input name="NOMBRES" type="text" class="informacion" placeholder="CIUDAD">
            <input name="ENVIAR" type="button" class="boton2" value="ENVIAR">
            </div>
            -->
            
            
        </div>
        
        
        
        
        
        
        <div class="espacio">
    </div>
  
			
					<div class="section-title text-center">
						<div class="espacio-titulo"><h2>RELACIONADOS</h2></div>
						<div class="espacio-titulo"><h2><img src="images/relacionados.png" width="50" height="50" alt=""/></h2>
						</div>
					</div>
				
			
    
    <div id="fh5co-hotel-section">
		
   
				<div class="gridsd grid">
                    
                    <div class="modulesrelsd">
                    <?php
                        $queryrel="select * from paquetes_menu where jerarquia=".$row["jerarquia"]." and idpaquetes_menu<>".$row["idpaquetes_menu"];
                        $resrel=mysql_query($queryrel);
                        while ($rowrel=mysql_fetch_array($resrel)){
                    ?>
                    <div class="modulerelsd">
					<figure class="effect-milo" style="width:100%">
						<img src="admin/images/<?php  echo $rowrel["imagen"] ?>" alt="img11"/>
						<figcaption>
							<h2><?php  echo $rowrel["descripcion"] ?></h2>
							<p><?php  echo $rowrel["alias"] ?><br><span><?php  echo $rowrel["precio"] ?></span></p> 
                            
							<a href="paquete.php?id=<?php  echo $rowrel["idpaquetes_menu"] ?>">View more</a>
						</figcaption>			
					</figure>
                    </div>
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
	</div>
    </div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->
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
    
    <style>
        .paquete-total span {  text-align:right }
        .paquete-total table { width:100%; border: solid }
        .paquete-total td {  border: solid }
        
    </style>
    
    
      <script src="js/dsr.js"></script>
    <script>
			// For Demo purposes only (show hover effect on mobile devices)
			[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
				el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			} );
		</script>
       
    <script>
    

    $('#basicExample .date').datepicker({
        'format': 'yyyy-mm-dd',
        'autoclose': true
    });

    // initialize datepair
    var basicExampleEl = document.getElementById('basicExample');
    var datepair = new Datepair(basicExampleEl);
    function cotizar(){
        
        $(".form").show()
    }
</script>
        
        <script src="js/classie.js"></script>
		<script src="js/demo7.js"></script>
        
      
        
          
            

<script src="js/jquery-ui.min.js"></script>
<script  src="js/index.js"></script>
      

</body>
</html>