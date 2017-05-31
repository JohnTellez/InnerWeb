<!DOCTYPE html>
<html lang="en">
<head>
<title>InnerConsulting</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
<!-- Favicon -->
<link rel="shortcut icon" href="/images/favicon%20(1).ico" type="image/x-icon">
<link rel="icon" href="/images/favicon%20(1).ico" type="image/x-icon">
<!-- Favicon -->
<!-- font-awesome iconos -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- font-awesome iconos -->
<!-- fuente -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- fuente -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/functions.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- animation -->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!-- //animation --> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<div id="preloader">
	    <h3>Cargando...</h3>
	</div>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<div class="header">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="agileits-logo">
								<h1><a href="index.php"><img src="images/logo1.png" alt="" /></a></h1>
							</div>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav>
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.php">Inicio</a></li>
									<li><a href="#about" class="scroll">Nosotros</a></li>
									<li><a href="#events" class="scroll">Portafolio</a></li>
									<li><a href="#team" class="scroll">Casos de Éxito</a></li>
									<li><a href="#news" class="scroll">Aliados</a></li>
									<li><a href="#mail" class="scroll">Revisar Mensajes</a></li>
								</ul>
							</nav>
                            </div>
				        <!-- Menu de Login -->
				        <div class="cn-logout">
				        	<b>Bienvenido </b><?php echo $_SESSION['user'] ?><br>
				        	<form id="form" name="form" action="index.php" method="post">
				        		<input type="hidden" name="logout" value="1">
								<a href="#" class="scroll" title="Cerrar sesión" onclick="subLogout(document.form)">Logout</a>
							</form>
				        </div>
				
							<div class="modal about-modal fade" id="myModal2" tabindex="-1" role="dialog">
                                  
                                <form method="post" id="loginForm" action="http://innerconsulting.com/webmail/index.html">
                                    <fieldset id="body">
                                        <fieldset>
                                            <label for="email">Correo Electrónico</label>
                                            <input type="email" name="user" id="user" />
                                        </fieldset>
                                        <fieldset>
                                            <label for="password">Contraseña</label>
                                            <input type="password" name="pass" id="pass" />
                                        </fieldset>
                                    <input href="http://innerconsulting.com/webmail/index.php" type="submit" id="login" value="Ingresar" />
                                    <label for="checkbox"><input type="checkbox" id="checkbox" />Recuérdame</label>
                                    </fieldset>
                                    <span><a href="#">¿Olvidó su contraseña?</a></span>
                                </form>
                           
                          </div>
							
						
						<!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
			<div class="w3layouts-banner-info">
				<div class="container">
					<div class="w3ls-text">
						<h2>Integradora de servicios</h2>
					</div>
					<div class="w3-arrow bounce animated">
						<a href="#indro" class="scroll"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- introduction -->
	<div class="introduction" id="indro">
		<div class="container">
			<div class="w3l-heading">
				<h3>Soluciones tecnológicas que impulsan negócios</h3>
				<div class="w3ls-border"> </div>
			</div>
			<div class="col-md-6 about-grid video">
				<div class="col-xs-3 about-grid-left">
					<span class="glyphicon glyphicon-play-circle effect-1" aria-hidden="true" data-toggle="modal" href="#myModal"></span>
				</div>
				<div class="col-xs-9 about-grid-right">
					<h4 class="txtNormal">Mira nuestro video</h4>
					<p>Itaque earum rerum hic tenetur a sapiente delectus 
					reiciendis maiores alias consequatur aut</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="introduction-info">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus iaculis lacus in pharetra. Morbi tincidunt nisi et bibendum varius. Aliquam erat volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin vulputate arcu consequat enim vulputate posuere. Aenean malesuada quam vitae mi ullamcorper, vel lobortis risus rutrum.</p>
			</div>
		</div>
	</div>

	<div class="bs-example">
    <!-- Modal HTML -->
	    <div id="myModal" class="modal fade modal-video">
	        <div class="modal-dialog modal-lg">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> X </button>
	                    <h4 class="modal-title txtNormal">InnerConsulting</h4>
	                </div>
	                <div class="modal-body">
	                    <iframe id="frmVideo" width="850" height="500" src="https://www.youtube.com/embed/bqzFz6ijq9E?autoplay=0" frameborder="0" allowfullscreen ></iframe>
	                </div>
	            </div>
	        </div>
	    </div>
	</div> 

	<!-- //introduction -->
	<!-- about -->
	<div class="about" id="about">
		<div class="container">
			<div class="w3l-heading about-heading">
				<h3>Nosotros</h3>
				<div class="w3ls-border about-border"> </div>
			</div>
			<div class="agileits-about-grids">
				<div class="about-grids">
					<div class="col-md-6 about-grid">
						<div class="col-xs-3 about-grid-left">
							<span class="glyphicon glyphicon-asterisk effect-1" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 about-grid-right">
							<h4>Cum soluta nobis est</h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus 
							reiciendis maiores alias consequatur aut</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 about-grid">
						<div class="col-xs-3 about-grid-left">
							<span class="glyphicon glyphicon-road effect-1" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 about-grid-right">
							<h4>Soluta nobis est cum</h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus 
							reiciendis maiores alias consequatur aut</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="about-grids1">
					<div class="col-md-6 about-grid">
						<div class="col-xs-3 about-grid-left">
							<span class="glyphicon glyphicon-plane effect-1" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 about-grid-right">
							<h4>Eligendi cum soluta nobis</h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus 
							reiciendis maiores alias consequatur aut</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 about-grid">
						<div class="col-xs-3 about-grid-left">
							<span class="glyphicon glyphicon-bed effect-1" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 about-grid-right">
							<h4>Nobis cum soluta est</h4>
							<p>Itaque earum rerum hic tenetur a sapiente delectus 
							reiciendis maiores alias consequatur aut</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- gallery -->
	<div class="gallery" id="events">
		<div class="container">
			<div class="w3l-heading">
				<h3>Portafolio</h3>
				<div class="w3ls-border"> </div>
			</div>
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home-main" id="home-tab" role="tab" data-toggle="tab" aria-controls="home-main" aria-expanded="true">Todos</a></li>
						<li role="presentation"><a href="#learning" role="tab" id="learning-tab" data-toggle="tab" aria-controls="learning">Categoria 1</a></li>
						<li role="presentation"><a href="#playing" role="tab" id="playing-tab" data-toggle="tab" aria-controls="playing">Categoria 2</a></li>
						<li role="presentation"><a href="#painting" role="tab" id="painting-tab" data-toggle="tab" aria-controls="painting">Categoria 3</a></li>
						<li role="presentation"><a href="#school" role="tab" id="school-tab" data-toggle="tab" aria-controls="school">Categoria 4</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home-main" aria-labelledby="home-tab">
							<div class="w3_tab_img">
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/g1.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/g1.jpg" alt=" " class="img-responsive" />
										  </figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Lorem</h5>
										<p>Consectetur</p>
									</div>
								</div>
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/g2.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/g2.jpg" alt=" " class="img-responsive" />
										  </figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Ipsum</h5>
										<p>Adipiscing </p>
									</div>
								</div>
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/g3.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/g3.jpg" alt=" " class="img-responsive" />
											</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Vivamus</h5>
										<p>Ullamcorper  </p>
									</div>
								</div>
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/g4.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/g4.jpg" alt=" " class="img-responsive" />
										</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Fusce</h5>
										<p>Tristique</p>
									</div>
								</div>
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/g5.jpg">
											<figure class="imghvr-shutter-in-out-diag-2"><img src="images/g5.jpg" alt=" " class="img-responsive" />
											</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Nullam</h5>
										<p>accumsan</p>
									</div>
								</div>
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/g6.jpg">
											<figure class="imghvr-shutter-in-out-diag-2"><img src="images/g6.jpg" alt=" " class="img-responsive" />
											</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Donec</h5>
										<p>Vulputate</p>
									</div>
								</div>
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/g7.jpg">
											<figure class="imghvr-shutter-in-out-diag-2"><img src="images/g7.jpg" alt=" " class="img-responsive" />
											</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Vivamus</h5>
										<p>Sodales</p>
									</div>
								</div>
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/g1.jpg">
											<figure class="imghvr-shutter-in-out-diag-2"><img src="images/g1.jpg" alt=" " class="img-responsive" />
											</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Morbi</h5>
										<p>Ornare </p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="learning" aria-labelledby="learning-tab">
							<div class="w3_tab_img">
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/g2.jpg">
											<figure class="imghvr-shutter-in-out-diag-2"><img src="images/g2.jpg" alt=" " class="img-responsive">
											</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Vivamus</h5>
										<p>Eleifend</p>
									</div>
								</div>
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/g3.jpg">
											<figure class="imghvr-shutter-in-out-diag-2"><img src="images/g3.jpg" alt=" " class="img-responsive">
											</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Cras</h5>
										<p>Pulvinar</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="playing" aria-labelledby="playing-tab">
							<div class="w3_tab_img">
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/g4.jpg">
											<figure class="imghvr-shutter-in-out-diag-2"><img src="images/g4.jpg" alt=" " class="img-responsive">
											</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Maecenas</h5>
										<p>Blandit</p>
									</div>
								</div>
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/g5.jpg">
											<figure class="imghvr-shutter-in-out-diag-2"><img src="images/g5.jpg" alt=" " class="img-responsive">
											</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Sodales</h5>
										<p>Vivamus</p>
									</div>
								</div>
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/g6.jpg">
											<figure class="imghvr-shutter-in-out-diag-2"><img src="images/g6.jpg" alt=" " class="img-responsive">
											</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Vivamus</h5>
										<p>Eleifend</p>
									</div>
								</div>
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/g7.jpg">
											<figure class="imghvr-shutter-in-out-diag-2"><img src="images/g7.jpg" alt=" " class="img-responsive">
											</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Maecenas</h5>
										<p>Blandit</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="painting" aria-labelledby="painting-tab">
							<div class="w3_tab_img">
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/g1.jpg">
											<figure class="imghvr-shutter-in-out-diag-2"><img src="images/g1.jpg" alt=" " class="img-responsive">
											</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Morbi</h5>
										<p>Ornare </p>
									</div>
								</div>
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/g2.jpg">
											<figure class="imghvr-shutter-in-out-diag-2"><img src="images/g2.jpg" alt=" " class="img-responsive">
											</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Cras</h5>
										<p>Pulvinar</p>
									</div>
								</div>
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/g3.jpg">
											<figure class="imghvr-shutter-in-out-diag-2"><img src="images/g3.jpg" alt=" " class="img-responsive">
											</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Donec</h5>
										<p>Vulputate</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="school" aria-labelledby="school-tab">
							<div class="w3_tab_img">
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/g4.jpg">
											<figure class="imghvr-shutter-in-out-diag-2"><img src="images/g4.jpg" alt=" " class="img-responsive">
											</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Lorem</h5>
										<p>Consectetur</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
			</div>
			<script src="js/jquery.tools.min.js"></script>
			<script src="js/jquery.mobile.custom.min.js"></script>
			<script src="js/jquery.cm-overlay.js"></script>
			<script>
				$(document).ready(function(){
					$('.cm-overlay').cmOverlay();
				});
			</script>
		</div>
	</div>
	<!-- //gallery -->
	<!-- team -->
	<div class="team jarallax" id="team">
		<div class="team-dot">
			<div class="container">
				<div class="w3l-heading about-heading">
					<h3>Casos de Éxito</h3>
					<div class="w3ls-border about-border"> </div>
				</div>
				<div class="agileits-team-grids">
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src="images/t1.jpg" alt="" />
							<div class="team-caption"> 
								<h4>ETITC</h4>
								<p>Instituto Tecnico Central</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src="images/t2.jpg" alt="" />
							<div class="team-caption"> 
								<h4>SIPE</h4>
								<p>Caja de Seguro Social Panamá</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src="images/t3.jpg" alt="" />
							<div class="team-caption"> 
								<h4>SmartCloud International</h4>
								<p>Container Datacenter</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src="images/t4.jpg" alt="" />
							<div class="team-caption"> 
								<h4>Universidad Autonoma</h4>
								<p>Centro de Datos</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
		
	<!-- news -->
	<div class="news" id="news">
		<div class="container">
			<div class="w3l-heading">
				<h3>Aliados Estrategicos</h3>
				<div class="w3ls-border"> </div>
			</div>
			<div class="wthree-news-grids">
				<!-- date -->
				<div id="design" class="date">
					<div id="cycler">   
						<div class="wthree-news-grid">
							<div class="wthree-news-left">
								<h4>03 <span>Jan 2017</span></h4>
							</div>
							<div class="date-text">
								<a href="#" data-toggle="modal" data-target="#myModal2"> Lorem ipsum dolor sit amet</a>
								<p>Morbi felis sapien, pulvinar quis pharetra rutrum, auctor sit amet ipsum. Aliquam dictum massa ut porttitor ultricies. Duis non enim eros. Aliquam sed porttitor lectus.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="wthree-news-grid">
							<div class="wthree-news-left">
								<h4>08 <span>Sept 2017</span></h4>
							</div>
							<div class="date-text">
								<a href="#" data-toggle="modal" data-target="#myModal2"> Cras vestibulum dapibus <span class="blinking"><img src="images/new.png" alt="" /></span></a>
								<p>Curabitur egestas porttitor erat quis cursus. Aliquam nec sapien urna. Curabitur tincidunt dolor sed metus maximus dapibus. Integer ligula enim, condimentum id commodo eget</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="wthree-news-grid">
							<div class="wthree-news-left">
								<h4>17 <span>July 2017</span></h4>
							</div>
							<div class="date-text">
								<a href="#" data-toggle="modal" data-target="#myModal2"> Fusce id molestie mauris</a>
								<p>Cras blandit felis augue, nec faucibus lectus hendrerit vitae. Vestibulum rutrum, magna id pellentesque fermentum, est risus scelerisque leo, at consequat nunc sem non tortor.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="wthree-news-grid">
							<div class="wthree-news-left">
								<h4>15 <span>Aug 2017</span></h4>
							</div>
							<div class="date-text">
								<a href="#" data-toggle="modal" data-target="#myModal2"> Aliquam vulputate arcu enim <span class="blinking"><img src="images/new.png" alt="" /></span></a>
								<p>Aliquam sed porttitor lectus. Donec sagittis magna non eros convallis, dapibus iaculis nunc tincidunt. Pellentesque quam nisi, cursus non vestibulum ac, vehicula eu tortor.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="wthree-news-grid">
							<div class="wthree-news-left">
								<h4>24 <span>Sept 2017</span></h4>
							</div>
							<div class="date-text">
								<a href="#" data-toggle="modal" data-target="#myModal2"> Donec ac turpis aliquet</a>
								<p>Curabitur facilisis fermentum gravida. Nunc suscipit nec enim ut suscipit. Mauris mollis lectus at mi vehicula rutrum vel non dolor. Nulla ut purus arcu. Pellentesque sed finibus</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="wthree-news-grid">
							<div class="wthree-news-left">
								<h4>24 <span>Oct 2017</span></h4>
							</div>
							<div class="date-text">
								<a href="#" data-toggle="modal" data-target="#myModal2"> Morbi nec justo ut ex rhoncus luctus</a>
								<p>Nullam accumsan imperdiet elementum. Quisque volutpat sapien sed ipsum condimentum elementum. Suspendisse potenti. Maecenas fermentum justo sit amet interdum viverra.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>						
					<script>
						function blinker() {
							$('.blinking').fadeOut(500);
							$('.blinking').fadeIn(500);
						}
						setInterval(blinker, 1000);
					</script>
					<script>
						function cycle($item, $cycler){
							setTimeout(cycle, 2000, $item.next(), $cycler);
												
							$item.slideUp(1000,function(){
								$item.appendTo($cycler).show();        
							});
						}
						cycle($('#cycler div:first'),  $('#cycler'));
					</script>
				</div>
				<!-- //date -->
			</div>
		</div>
	</div>
	<!-- //news -->
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						<h4 class="modal-title">Aliado 1</h4>
						<h5>24 Sept 2017</h5>
					</div> 
					<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/1bk%20(2).jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	
	<!-- contact -->
	<div class="contact" id="mail">
		<div class="container">
			<div class="w3l-heading about-heading">
				<h3>Mensajes</h3>
				<div class="w3ls-border about-border"> </div>
			</div>
		</div>
	</div>
	<div class="contact-form">
		<div class="contentTable">
			<table class="table .table-striped">
				<thead>
					<tr>
						<th>TEMA</th>
						<th>MENSAJE</th>
						<th>NOMBRE CONTACTO</th>
						<th>TELÉFONO</th>
						<th>EMAIL</th>
					</tr>
				</thead>
				<tbody>
					<?php getMessages(); ?>
				</tbody>
			</table>
		</div>
	</div>
	<!-- contacto -->
	<!-- footer -->
	<footer>
		<div class="container">
			<p>© 2017 InnerConsulting . Todos los derechos reservados  | Diseñada por <a href="http://innerconsulting.com/"> Innerconsulting</a> </p>
		</div>
		
    <!-- Contador de Visitas -->
		<div class="visitas">
                
                <script type="text/javascript" src="https://counter9.fcs.ovh/private/counter.js?c=q1fybr6j6yfegb65mwtwfm1pkr291uug"></script>
                
                <noscript><a href="https://www.contadorvisitasgratis.com" title="contador de visitas com"><img src="https://counter9.fcs.ovh/private/contadorvisitasgratis.php?c=q1fybr6j6yfegb65mwtwfm1pkr291uug" border="0" title="contador de visitas com" alt="contador de visitas com"></a>
                </noscript>
                
                            
                </div>
    <!-- Contador de Visitas -->
	</footer>
	<!-- //footer -->
	<script src="js/login.js"></script>
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/modal.js"></script>
	<script type="text/javascript">
    
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
		
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- begin olark code -->
<script type="text/javascript" async> ;(function(o,l,a,r,k,y){if(o.olark)return; r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0]; y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r); y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)}; y.extend=function(i,j){y("extend",i,j)}; y.identify=function(i){y("identify",k.i=i)}; y.configure=function(i,j){y("configure",i,j);k.c[i]=j}; k=y._={s:[],t:[+new Date],c:{},l:a}; })(window,document,"static.olark.com/jsclient/loader.js");
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('9731-959-10-3533');</script>
<!-- end olark code -->



</body>	
</html>