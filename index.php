<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Pegazo Net</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">	
	<link rel="shortcut icon" href="images/favicon.ico">
    
	<!-- CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
    
	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="js/superfish.min.js" type="text/javascript"></script>
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/owl.carousel.js" type="text/javascript"></script>
	<script src="js/jquery.mb.YTPlayer.js" type="text/javascript"></script>
	<script src="js/animate.js" type="text/javascript"></script>
	<script src="js/jquery.BlackAndWhite.js"></script>
	<script src="js/myscript.js" type="text/javascript"></script>
	<script>
		
		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
		
		//BlackAndWhite
		$(window).load(function(){
			$('.client_img').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height 
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});
		
	</script>
	
</head>
<body>

<!-- PRELOADER -->
<img id="preloader" src="images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">
	<!-- PAGE -->
	<div id="page">	
		<!-- HEADER -->
		<header>			
			<!-- MENU BLOCK -->
			<div class="menu_block">			
				<!-- CONTAINER -->
				<div class="container clearfix">					
					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="index.html" >
							<span class="b1">p</span>
							<span class="b2">e</span>
							<span class="b3">g</span>
							<span class="b4">a</span>
							<span class="b4">z</span>
							<span class="b5">o</span>
						</a>
					</div><!-- //LOGO -->	
					<!-- MENU -->
					<div class="pull-right">
						<nav class="navmenu center">
							<ul>
								<li class="first active scroll_btn"><a href="#home" >Home</a></li>
								<li class="scroll_btn"><a href="#about" >Nosotros</a></li>
								<!--<li class="scroll_btn"><a href="#projects" >Projectos</a></li>-->
								<li class="scroll_btn"><a href="#section-feature" >Servicios</a></li>								
								<li class="scroll_btn last"><a href="#contacts" >Contactanos</a></li>								
							</ul>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->	
		
		<!-- HOME -->
		<section id="home" class="padbot0">				
			<!-- TOP SLIDER -->
			<div class="flexslider top_slider">
				<ul class="slides">
					<li class="slide1">
						<div class="flex_caption1">
							<p class="title1 captionDelay2 FromTop">¿Necesitas</p>
							<p class="title2 captionDelay4 FromTop">una pagina Web</p>
							<p class="title3 captionDelay6 FromTop">para tu Negocio?..</p>
							<p class="title4 captionDelay7 FromBottom">Contactanos somos tu Mejor opcíon.</p>
						</div>
					</li>
					<li class="slide2">
						<div class="flex_caption1">
							<p class="title1 captionDelay2 FromTop">Te Diseñamos,</p>
							<p class="title2 captionDelay4 FromTop">Construmimos y</p>
							<p class="title3 captionDelay6 FromTop">Publicamos Tu Sitio Web</p>
							<p class="title4 captionDelay7 FromBottom">En Internet</p>
						</div>
					</li>					
					<li class="slide3">
						<div class="flex_caption1">
							<p class="title1 captionDelay2 FromTop">Creativos</p>
							<p class="title2 captionDelay4 FromTop">Diseños</p>
							<p class="title3 captionDelay6 FromTop">Para Tus Necesidades</p>
							<!--<p class="title4 captionDelay7 FromBottom">Paginas para cualquier Negocio que requiera atraer más Clientes.</p>-->
						</div>
					</li>
						<!--<a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>-->
										
				</ul>				
				<!-- VIDEO BACKGROUND -->
              <a name="P2" class="player" id="P2" data-property="{videoURL:'http://youtu.be/BsekcY04xvQ',containment:'.top_slider',autoPlay:true, mute:true, startAt:0, opacity:1}"></a>
              <!-- r1xohS2u69E -->

              <!-- //VIDEO BACKGROUND -->
			</div><!-- //TOP SLIDER -->
		</section><!-- //HOME -->
		<!-- ABOUT -->
		<section id="about">			
			<!-- SERVICES -->
			<div class="services_block padbot40" data-appear-top-offset="-200" data-animated="fadeInUp">				
				<!-- CONTAINER -->
				<div class="container">				
					<!-- ROW -->
					<div class="row">
						<div class="col-xs-12 col-md-12 col-lg-12">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Somos</b> un Equipo con Experiencia y Profesionalismo comprometidos al 100% con Nustro Trabajo.</p>
								<span>Ofrecemos nuestros servicios, Sitios Web Profesionales y Adapatables, para que tu pagina web se vea donde sea y Perfectamente Bien.</span>
							</a><br>							
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Facil</b> Personalización</p>
								<span>Calidad y Diseños muy confortables para la experiencia del Usuario.</span>
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Diseños</b> Modernos</p>
								<span>Calidad y diseño único que cumple con todos los requisitos y tendencias del diseño web moderno.</span>
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Diseño</b> Responsive</p>
								<span>Diseño que se mostrará igualmente bien en todos sus dispositivos, tabletas, teléfonos inteligentes o equipos de Computo.</span>
							</a>
						</div>						
					</div><!-- //ROW -->
				</div><!-- //CONTAINER -->
			</div><!-- //SERVICES -->
			
			<!-- CLEAN CODE -->
			<div class="cleancode_block">				
				<!-- CONTAINER -->
				<div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">					
					<!-- CASTOM TAB -->
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active clearfix" id="tab1">
							<p class="title"><b>Codigo</b> Limpio</p>
							<span>hacemos productos de alta calidad y por lo tanto nuestro código es muy limpio y ordenado. Cualquier persona puede modificar la plantilla a su gusto.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab2">
							<p class="title"><b>Soporte</b> Técnico</p>
							<span>Resolvemos tus dudas sobre su sitio web. <br>Ayudandolo a sacar el mayor provecho del sitio.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab3">
							<p class="title"><b>Diseño</b> Responsivo</p>
							<span>En la actualidad hay millones de medios para poder ver tu sitio web, por lo cual hacemos diseños adaptativos a diferentes dispositivos para que se vean exelentes en cualquier dispositivo.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab4">
							<p class="title"><b>Documentación</b></p>
							<span>Te Entregamos un manual de usuario para tu orientación si fuera necesario <br>(Wordpress)</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab5">
							<p class="title"><b>Calidad</b></p>
							<span>Calidad y Confianza para nuestros Clientes, <br>en <strong>Pegazo</strong> "Damos vida a tus ideas"</span>
						</div>						
					</div>
					<ul id="myTab" class="nav nav-tabs">
						<li class="active"><a class="i1" href="#tab1" data-toggle="tab" ><i></i><span>Clean Code</span></a></li>
						<li><a class="i2" href="#tab2" data-toggle="tab" ><i></i><span>Support</span></a></li>
						<li><a class="i3" href="#tab3" data-toggle="tab" ><i></i><span>Responsive</span></a></li>
						<li><a class="i4" href="#tab4" data-toggle="tab" ><i></i><span>Documentation</span></a></li>
						<li><a class="i5" href="#tab5" data-toggle="tab" ><i></i><span>Quality</span></a></li>
						<!-- <li><a class="i6" href="#tab6" data-toggle="tab" ><i></i><span>Support</span></a></li> -->
					</ul><!-- CASTOM TAB -->
				</div><!-- //CONTAINER -->
			</div><!-- //CLEAN CODE -->
			
			<!-- MULTI PURPOSE -->
			<div class="purpose_block">				
				<!-- CONTAINER -->
				<div class="container">
					
					<!-- ROW -->
					<div class="row">					
						<div class="col-lg-7 col-md-7 col-sm-7" data-appear-top-offset="-200" data-animated="fadeInLeft">
							<h2><b>Temas multiusos</b> de WordPress</h2>
							<p>Damos un diseño Diferente y unico a tu sitio adaptado a tus necesidades, Satisfaciendo los requisitos de tu sitio. <br>
							Siempre Basado en diseños que se Crean con la más alta Espectativa para el cliente.</p>				
						</div>						
						<div class="col-lg-5 col-md-5 col-sm-5 ipad_img_in" data-appear-top-offset="-200" data-animated="fadeInRight">
							<img class="ipad_img1" src="images/img1.png" alt="" />
						</div>
					</div><!-- //ROW -->
				</div><!-- //CONTAINER -->
			</div><!-- //MULTI PURPOSE -->
		</section><!-- //ABOUT -->		
		
		<!-- PROJECTS -->
		<section id="projects" class="padbot20" style="display: none;">
		
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Algunos proyectos que hemos relizado</b></h2>
			</div><!-- //CONTAINER -->
			
				
			<div class="projects-wrapper" data-appear-top-offset="-200" data-animated="fadeInUp">
				<!-- PROJECTS SLIDER -->
				<div class="owl-demo owl-carousel projects_slider">
					
					<!-- work1 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/1.jpg" alt="" />
								<a class="zoom" href="images/works/1.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="#" >Ginger Beast</a>
									<span>17 March, 2041</span>
								</div>
							</div>
						</div>
					</div><!-- //work1 -->
					
					<!-- work2 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/2.jpg" alt="" />
								<a class="zoom" href="images/works/2.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" >Ginger Beast</a>
									<span>17 March, 2041</span>
								</div>
							</div>
						</div>
					</div><!-- //work2 -->
					
					<!-- work3 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/3.jpg" alt="" />
								<a class="zoom" href="images/works/3.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" >Ginger Beast</a>
									<span>17 March, 2041</span>
								</div>
							</div>
						</div>
					</div><!-- //work3 -->
					
					<!-- work4 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/4.jpg" alt="" />
								<a class="zoom" href="images/works/4.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" >Ginger Beast</a>
									<span>17 March, 2041</span>
								</div>
							</div>
						</div>
					</div><!-- //work4 -->
					
					<!-- work5 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/5.jpg" alt="" />
								<a class="zoom" href="images/works/5.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" >Ginger Beast</a>
									<span>17 March, 2041</span>
								</div>
							</div>
						</div>
					</div><!-- //work5 -->
					
					<!-- work6 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/6.jpg" alt="" />
								<a class="zoom" href="images/works/6.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" >Ginger Beast</a>
									<span>17 March, 2041</span>
								</div>
							</div>
						</div>
					</div><!-- //work6 -->
					
					<!-- work7 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/7.jpg" alt="" />
								<a class="zoom" href="images/works/7.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" >Ginger Beast</a>
									<span>17 March, 2041</span>
								</div>
							</div>
						</div>
					</div><!-- //work7 -->
				</div><!-- //PROJECTS SLIDER -->
			</div>			
		</section><!-- //PROJECTS -->	
		
		<!-- TEAM -->
		<section  id="section-feature" class="container team">
		
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Nuestros</b> Servicios</h2>
				<!-- ROW --><div class="row">
			        <ul>
			            <li id="sf-innovation" class="col-md-4 col-sm-6 col-xs-12">
			                <div class="sf-wrap">
			                    <div class="sf-mdl-left">
			                        <div class="sf-icon">
			                            <!-- <i class="fa fa-fw fa-rocket fa-5x"></i> --><i class="fa fa-desktop fa-5x" aria-hidden="true"></i>
			                        </div>
			                        <h3>Diseño Grafico</h3>
			                    </div>
			                    <div class="sf-mdl-right">
			                        <div class="sf-icon">
			                            <i class="fa fa-desktop fa-5x" aria-hidden="true"></i>
			                        </div>
			                        <h3>Diseño Grafico</h3>
			                    </div>

			                    <div class="sf-mdl-left-full">
			                        <div class="sf-icon">
			                            <i class="fa fa-desktop fa-5x" aria-hidden="true"></i>
			                        </div>
			                        <h3><a href="#">Diseños Sorprendentes</a></h3>
			                        <p>Para tus sitios web.</p>
			                    </div>
			                    <div class="sf-mdl-right-full">
			                        <div class="sf-icon">
			                            <i class="fa fa-desktop fa-5x" aria-hidden="true"></i>
			                        </div>
			                        <h3><a href="#">Diseños Sorprendentes</a></h3>
			                        <p>Para tus sitios web.</p>
			                    </div>
			                </div>
			            </li>

			            <li id="sf-community" class="col-md-4 col-sm-6 col-xs-12">
			                <div class="sf-wrap">
			                    <div class="sf-mdl-left">
			                        <div class="sf-icon">
			                            <i class="fa fa-globe fa-5x" aria-hidden="true"></i>
			                        </div>
			                        <h3>Sitios Web</h3>
			                    </div>
			                    <div class="sf-mdl-right">
			                        <div class="sf-icon">
			                            <i class="fa fa-globe fa-5x" aria-hidden="true"></i>
			                        </div>
			                        <h3>Sitios Web</h3>
			                    </div>

			                    <div class="sf-mdl-left-full">
			                        <div class="sf-icon">
			                            <i class="fa fa-globe fa-5x" aria-hidden="true"></i>
			                        </div>
			                        <h3><a href="#">Paginas web</a></h3>
			                        <p>Todo lo que necesitas para atraer clientes</p>
			                    </div>
			                    <div class="sf-mdl-right-full">
			                        <div class="sf-icon">
			                            <i class="fa fa-globe fa-5x" aria-hidden="true"></i>
			                        </div>
			                        <h3><a href="#">Paginas web</a></h3>
			                        <p>Todo lo que necesitas para atraer clientes</p>
			                    </div>
			                </div>
			            </li>

			            <li id="sf-academy" class="col-md-4 col-sm-6 col-xs-12">
			                <div class="sf-wrap">
			                    <div class="sf-mdl-left">
			                        <div class="sf-icon">
			                            <i class="fa fa-suitcase fa-5x" aria-hidden="true"></i>
			                        </div>
			                        <h3>Directorio de Negocios</h3>
			                    </div>
			                    <div class="sf-mdl-right">
			                        <div class="sf-icon">
			                            <i class="fa fa-suitcase fa-5x" aria-hidden="true"></i>
			                        </div>
			                        <h3>Directorio de Negocios</h3>
			                    </div>

			                    <div class="sf-mdl-left-full">
			                        <div class="sf-icon">
			                           <i class="fa fa-suitcase fa-5x" aria-hidden="true"></i>
			                        </div>
			                        <h3><a href="#">Directorio Pegazo</a></h3>
			                        <p>Anunciate con Nosotros en nuestro Directorio</p>
			                    </div>
			                    <div class="sf-mdl-right-full">
			                        <div class="sf-icon">
			                            <i class="fa fa-suitcase fa-5x" aria-hidden="true"></i>
			                        </div>
			                        <h3><a href="#">Directorio Pegazo</a></h3>
			                        <p>Anunciate con Nosotros en nuestro Directorio</p>
			                    </div>
			                </div>
			            </li>

			            <li id="sf-opportunity" class="col-md-3 col-sm-6 col-xs-12" style="display: none">
			                <div class="sf-wrap">
			                    <div class="sf-mdl-left">
			                        <div class="sf-icon">
			                            <i class="fa fa-fw fa-star-half-o fa-5x"></i>
			                        </div>
			                        <h3>Idque Caesaris facere</h3>
			                    </div>
			                    <div class="sf-mdl-right">
			                        <div class="sf-icon">
			                            <i class="fa fa-fw fa-star-half-o fa-5x"></i>
			                        </div>
			                        <h3>Idque Caesaris facere</h3>
			                    </div>

			                    <div class="sf-mdl-left-full">
			                        <div class="sf-icon">
			                            <i class="fa fa-fw fa-star fa-5x"></i>
			                        </div>
			                        <h3><a href="#">Idque Caesaris facere</a></h3>
			                        <p>Morbi fringilla convallis sapien, id pulvinar odio volutpat. Contra legem facit qui id facit quod lex prohibet.</p>
			                    </div>
			                    <div class="sf-mdl-right-full">
			                        <div class="sf-icon">
			                            <i class="fa fa-fw fa-star fa-5x"></i>
			                        </div>
			                        <h3><a href="#">Idque Caesaris facere</a></h3>
			                        <p>Morbi fringilla convallis sapien, id pulvinar odio volutpat. Contra legem facit qui id facit quod lex prohibet.</p>
			                    </div>
			                </div>
			            </li>
			        </ul>
			    </div>
				<!-- //ROW -->



			</div><!-- //CONTAINER -->
		</section><!-- //TEAM -->

		<!-- NEWS -->
		<section id="news" style="display: none;">
		
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Servicios</b> y Precios</h2>
				
				<!-- TESTIMONIALS -->
				<div class="testimonials" data-appear-top-offset="-200" data-animated="fadeInUp">
						
					<!-- TESTIMONIALS SLIDER -->
					<div class="owl-demo owl-carousel testim_slider">
						
						<!-- TESTIMONIAL1 -->
						<div class="item">
							<div class="testim_content"><span>Landig Page</span>								
								<ul class="text-info">
									<li>1 alojamiento del sitio</li>
									<li>5 páginas de contenido diseñadas</li>
									<li>Leguaje en HTML5 o PHP</li>
									<li>1 hora de trabajo por mes para los cambios (esto es para cambios de texto sólo para sus páginas existentes)</li>
									<li>$ 3,000.00 MN.</li>
								</ul>						
							</div>
							<!-- <div class="testim_author">—  Anna Balashova, <b>Philosopher</b></div> -->
						</div><!-- TESTIMONIAL1 -->
						
						<!-- TESTIMONIAL2 -->
						<div class="item">
							<div class="testim_content"><span>Sitio Construido en Wordpress</span>
								<ul class="text-info">
									<li>1 alojamiento del sitio</li>
									<li>5 páginas de contenido diseñadas</li>
									<li>Manual de Usuario</li>
									<li>1 hora de trabajo por mes para los cambios (esto es para cambios de texto sólo para sus páginas existentes)</li>
									<li>$ 3,500.00 MN.</li>
								</ul>
							</div>
							
						</div><!-- TESTIMONIAL2 -->
						
						<!-- TESTIMONIAL3 -->
						<div class="item">
							<div class="testim_content"><span>Otros servicios</span>
								<ul class="text-info">
									<li>Diseño de sitios Web (PSD) de 1 a 5 paginas - $ 1,200.00 </li>
									<li>Maquetacion HTML Basado en PSD de 1 a 5 paginas con Responsive $ 1,200.00</li>
									<li>Maquetacion PHP Basado en PSD de 1 a 5 paginas con Responsive $ 1,500.00</li>
									<li>Maquetacion de Template para WordPress Basado en PSD de 1 a 5 paginas con Responsive $ 6,000.00</li>
								</ul>
							</div>
						</div><!-- TESTIMONIAL3 -->
					</div><!-- TESTIMONIALS SLIDER -->
					<div>
						<p>mas informacion a pagazo-net@gmail.com</p>
					</div>
				</div><!-- //TESTIMONIALS -->
				
				<!-- RECENT POSTS -->
				<div class="row recent_posts" data-appear-top-offset="-200" data-animated="fadeInUp">
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="images/blog/1.jpg" alt="" />
								<a class="link" href="#" ></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="#" >Inteligent Transitions In UX Design</a>
								<ul class="post_item_inf">
									<li><a href="javascript:void(0);" >Anna</a> |</li>
									<li><a href="javascript:void(0);" >Photography</a> |</li>
									<li><a href="javascript:void(0);" >10 Comments</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="images/blog/2.jpg" alt="" />
								<a class="link" href="#"></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="#" >Recent trends in storytelling</a>
								<ul class="post_item_inf">
									<li><a href="javascript:void(0);" >Anna</a> |</li>
									<li><a href="javascript:void(0);" >Web Design</a> |</li>
									<li><a href="javascript:void(0);" >No comment</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="images/blog/3.jpg" alt="" />
								<a class="link" href="#"></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="#" >Supernatural FX Showreel</a>
								<ul class="post_item_inf">
									<li><a href="javascript:void(0);" >Anna</a> |</li>
									<li><a href="javascript:void(0);" >Creative</a> |</li>
									<li><a href="javascript:void(0);" >3 Comments</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div><!-- RECENT POSTS -->
			</div><!-- //CONTAINER -->
		</section><!-- //NEWS -->
	</div><!-- //PAGE -->
	<!-- CONTACTS -->
	<?php include("mailfooter.php"); ?>
	<section id="contacts">
	</section><!-- //CONTACTS -->
	
	<!-- FOOTER -->
	<footer class="fondo_contacto"">
			
		<!-- CONTAINER -->
		<div class="container">
			
			<!-- ROW -->
			<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">			
				
				
				<div class="col-lg-6 col-md-6 col-sm-6 padbot30 foot_about_block">
					<h4><b>Nosot</b>ros</h4>
					<p>Diseñamos, Construimos y damos soporte a  sitios web, así como multimedia y Diseño Grafico <br>
						Contactanos sin compromiso, te damos presupuesto
					</p>

					<ul class="social">
						<!--<li><a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>-->
						<li><a href="#" ><i class="fa fa-facebook"></i></a></li>
						<!--<li><a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-pinterest-square"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="map_show fa fa-map-marker"></i></a></li>-->
					</ul>
				</div>
				
				<div class="respond_clear"></div>
				
				<div class="col-lg-6 col-md-6 padbot30">
					<h4><b>Contact</b>anos</h4>
					
					<!-- CONTACT FORM -->
					<div class="span9 contact_form">
						<div id="note"></div>
						<div id="fields">
							<form id="contact-form-face" class="clearfix" action="" method="post">
								<input type="text" name="name" value="Nombre" required="" />
								<input type="email" name="mail" value="Correo" required="" />
								<textarea name="message" required="">Mensage</textarea>
								<input class="contact_btn" type="submit" value="Enviar" />
							</form>
						</div>
					</div><!-- //CONTACT FORM -->
				</div>
			</div><!-- //ROW -->
			<div class="row copyright">
				<div class="col-lg-12 text-center">				
					<p>Diseñado por, <a href="#">Pegazo-net</a></p>
				</div>			
			</div><!-- //ROW -->
		</div><!-- //CONTAINER -->
	</footer><!-- //FOOTER -->
	
	
	<!-- MAP 
	<div id="map">
		<a class="map_hide" href="javascript:void(0);" ><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
		<iframe src="http://maps.google.com/maps?f=q&amp;give%20a%20hand=s_q&amp;hl=en&amp;geocode=&amp;q=london&amp;sll=37.0625,-95.677068&amp;sspn=42.631141,90.263672&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;ll=51.500141,-0.126257&amp;spn=0.026448,0.039396&amp;z=14&amp;output=embed" ></iframe>
	</div> //MAP -->

</div>
</body>
</html>