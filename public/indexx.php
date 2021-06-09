<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->

<head>
	<!-- meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Rentex</title>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.theme.css">
	<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css">
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
				<script src="assets/js/html5shiv.js"></script>
				<script src="assets/js/respond.js"></script>
			<![endif]-->

	<!--[if IE 8]>
		    	<script src="assets/js/selectivizr.js"></script>
		    <![endif]-->
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}" title="HOME"><i class="ion-home"></i> Rentex <span>Bolivia</span></a>
			</div> <!-- /.navbar-header -->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.html" style="color: black;">Inicio</a></li>
					<li class="active"><a href="index.html" style="color: black;">Alquiler</a></li>
					<li class="active"><a href="index.html" style="color: black;">Algo </a></li>
					@if (Route::has('login'))
					<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
						@auth
						<a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
						@else
						<a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

						@if (Route::has('register'))
						<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
						@endif
						@endauth
					</div>
					@endif
					<!-- <li><a href="about.html">about</a></li>
					<li><a href="services.html">services</a></li>
					<li><a href="contact.html">contact</a></li> -->
				</ul> <!-- /.nav -->
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
	</nav>

	<!-- Home -->
	<div id="header">
		<div class="flexslider">
			<ul class="slides">
				<li class="slider-item" style="background-image: url('assets/images/item-1.png')">
					<div class="intro container">
						<div class="inner-intro">
							<section class="tour section-wrapper container">
								<!-- <h2 class="section-title" style="color: #60c9eb;">
									Alquiler de Habitaciones
								</h2> -->
								<div class="offering">
									<div class="percent" style="color:white;">
										<span>Alquiler de Habitaciones</span>
									</div>
								</div>
								<br><br>
								<div class="row">
									<div class="col-md-3 col-sm-6">
										<form role="form" class="form-dropdown">
											<div class="form-group">
												<label for="sel1">Select list (select one):</label>
												<select class="form-control border-radius" id="sel1">
													<option>Chuquisaca</option>
													<option>Cochabamba</option>
													<option>Tarija</option>
													<option>Potosi </option>
												</select>
											</div>
										</form>
									</div>

									<div class="col-md-3 col-sm-6">
										<div class="input-group">
											<input type="text" class="form-control border-radius border-right" placeholder="Arrival" />
											<span class="input-group-addon border-radius custom-addon">
												<i class="ion-ios-calendar"></i>
											</span>
										</div>
									</div>

									<div class="col-md-3 col-sm-6">
										<div class="input-group">
											<input type="text" class="form-control border-radius border-right" placeholder="Departure" />
											<span class="input-group-addon border-radius custom-addon">
												<i class="ion-ios-calendar"></i>
											</span>
										</div>
									</div>

									<div class="col-md-3 col-sm-6">
										<div class="btn btn-default border-radius custom-button">
											Buscar
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</li>
			</ul> <!-- /.slides -->
		</div> <!-- /.flexslider -->
	</div> <!-- /#header -->


	<!-- Our Blazzing offers -->
	<section class="offer section-wrapper">
		<div class="container">
			<h2 class="section-title">
				Nuestras Ofertas
			</h2>
			<p class="section-subtitle">
				Lorem Ipsum is simply dummy text of the industry.
			</p>
			<div class="row">
				<div class="col-sm-4 col-xs-6">
					<div class="offer-item">
						<div class="icon">
							<i class="ion-social-euro"></i>
						</div>
						<h3>
							El mejor precio
						</h3>
						<p>
							Los mejores precios de Bolivia.
						</p>
					</div>
				</div> <!-- /.col-md-3 -->

				<div class="col-sm-4 col-xs-6">
					<div class="offer-item">
						<div class="icon">
							<i class="ion-ios-home"></i>
						</div>
						<h3>
							Para todo gusto
						</h3>
						<p>
							Encuentra la habitacion segun tus necesidades.
						</p>
					</div>
				</div> <!-- /.col-md-3 -->

				<div class="col-sm-4 col-xs-6">
					<div class="offer-item">
						<div class="icon">
							<i class="ion-ios-locked"></i>
						</div>
						<h3>
							Seguro
						</h3>
						<p>
							Todas las habitaciones publicadas se verifican previamente.
						</p>
					</div>
				</div> <!-- /.col-md-3 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.offer -->

	<div class="offer-cta">
		<div class="container">
			<div class="offering">
				<div class="percent" style="color:white;">
					<span>Rapido Seguro Efeciente </span>
				</div>
			</div> <!-- /.offering -->
		</div> <!-- /.container -->
	</div> <!-- /.offer-cta -->

	<!-- Top place to visit -->
	<section class="visit section-wrapper">
		<div class="container">
			<h2 class="section-title">
				Mas vistos
			</h2>
			<p class="section-subtitle">
				Lorem Ipsum is simply dummy text of the industry.
			</p>

			<div class="owl-carousel visit-carousel" id="">
				<div class="item">
					<img src="assets/images/7.jpg" alt="visit-image" class="img-responsive visit-item">
				</div>
				<div class="item">
					<img src="assets/images/8.jpg" alt="visit-image" class="img-responsive visit-item">
				</div>
				<div class="item">
					<img src="assets/images/9.jpg" alt="visit-image" class="img-responsive visit-item">
				</div>
				<div class="item">
					<img src="assets/images/7.jpg" alt="visit-image" class="img-responsive visit-item">
				</div>
				<div class="item">
					<img src="assets/images/8.jpg" alt="visit-image" class="img-responsive visit-item">
				</div>
				<div class="item">
					<img src="assets/images/9.jpg" alt="visit-image" class="img-responsive visit-item">
				</div>
			</div>
		</div> <!-- /.container -->
	</section> <!-- /.visit -->



	<!-- /.Additional-services -->



	<div class="subscribe section-wrapper">
		<a class="brand-logo" href="index.html" title="HOME"><i class="ion-home"></i> Rentex <span>Bolivia</span></a>
		<p class="subscribe-now">
			Recibir ofertas
		</p>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
					<div class="input-group">
						<input type="email" class="form-control border-radius" placeholder="Correo">
						<span class="input-group-btn">
							<button class="btn btn-default border-radius custom-sub-btn" type="button">Enviar</button>
						</span>
					</div><!-- /input-group -->
				</div>
			</div>
		</div>



		<ul class="social-icon">
			<li><a href="#"><i class="ion-social-twitter"></i></a></li>
			<li><a href="#"><i class="ion-social-facebook"></i></a></li>
			<li><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
			<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
		</ul>
	</div> <!-- /.subscribe -->


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<div class="text-left">
						&copy; Copyright Rentex Bolivia
					</div>
				</div>
				<div class="col-xs-4">
				</div>
				<div class="col-xs-4">
					<div class="top">
						<a href="#header">
							<i class="ion-arrow-up-b"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<script src="assets/js/jquery-1.11.2.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/contact.js"></script>
	<script src="assets/js/jquery.flexslider.js"></script>
	<script src="assets/js/script.js"></script>






</body>

</html>