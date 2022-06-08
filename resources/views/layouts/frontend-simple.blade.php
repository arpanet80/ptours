{{-- Detalle destinos: . {{ $id }} --}}


<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Potosi Tours</title>
		<link rel="icon" type="image/x-icon" href="/favicons/favicon.ico">
		{!! Html::style('assets/bootstrap/css/bootstrap.min.css') !!}s">		
		{!! Html::style('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800&display=swap') !!}
        {!! Html::style('https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap&subset=latin-ext') !!}
		{!! Html::style('assets/fonts/font-awesome.min.css') !!}
		{!! Html::style('assets/owlcarousel/css/owl.carousel.css') !!}
        {!! Html::style('assets/css/style.css') !!}
        {!! Html::style('assets/css/switcher/switcher.css') !!}
        {!! Html::style('assets/css/switcher/style1.css') !!}
	</head>
	
    <body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER -->
		<div class="preloader">
			<div class="status">
				<div class="status-mes"></div>
			</div>
		</div>
		<!-- END PRELOADER -->	

		<!-- START NAVBAR -->
		  <nav class="navbar navbar-toggleable-sm fixed-top navbar-light bg-faded site-navigation">
			<div class="container">
			  <a class="navbar-brand" href="/">
                
                <img src="{{asset('assets/img/logo.png')}}" alt="">
            </a>          
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
				<ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#paquetes">Paquetes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#destinos">Destinos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#reservas">Reservas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Galeria</a></li>
                    <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
				</ul>
                <div class="container">
                    <div class="d-flex justify-content-end">
                        @if (Route::has('login'))
                            <div class="">
                                @auth
                                    <a href="{{ url('/admin') }}" class="text-white">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-white ">Log in |</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ms-4 text-white">Regitrar</a>
                                    @endif
                                @endif
                            </div>
                        @endif
                    </div>
			  </div>
			</div>
		  </nav>      
		<!-- END NAVBAR -->

        <!-- START TITLE TOP -->
		<section class="section-content section-padding" style="background-image: url({{asset('assets/img/bg/uyuni.jpg')}});  background-size:cover; background-position: center center;">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1 class="section-blog-title">Detalle de Destino</h1>
					</div>
				</div>
			</div>
		</section>
		<!-- END TITLE TOP -->

		<!-- START BLOG -->
		<section class="tour_details section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="single_tour_details">
							<img src="{{asset('assets/img/bg/ripple-bg.jpg')}}" class="img-responsive" alt="image" />
							<span>5 days 4 night</span>
							<h2 class="title">creativity is intelligence having fun</h2>
							<p>Lorem ipsum dosectetur adipisicing elit, sed doLorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempo Sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis. Seddo Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus Lorem ipsum dosectetur a dipisicing elit at leo dignissim congue.</p><br>
							<p>Lorem ipsum dosectetur adipisicing elit, sed doLorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempo Sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis. Seddo Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus Lorem ipsum dosectetur a dipisicing elit at leo dignissim congue.</p>
						</div>						
					</div><!--- END COL -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="book_now">
							<h4>Tour Booking</h4>
							<form id="contact-form" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="form-group col-md-12">
										<input type="text" name="name" class="form-control" id="first-name" placeholder="Name" required="required">
									</div>
									<div class="form-group col-md-12">
										<input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
									</div>
									<div class="form-group col-md-12">
										<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required="required">
									</div>
									<div class="form-group col-md-12">
										<input type="text" name="date" class="form-control" id="date" placeholder="Date" required="required">
									</div>
									<div class="form-group col-md-12">
										<input type="text" name="person" class="form-control" id="person" placeholder="No of Person" required="required">
									</div>
									<div class="col-md-12">
										<div class="actions">
											<input type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Submit Your Message!" />
										</div>
									</div>
								</div>
							</form>	
						</div>
						<div class="tag">
							<h4 class="blog_sidebar_title">Tag cloud</h4>
							<a class="btn btn-default btn-tag-bg" href="#">Travel</a>
							<a class="btn btn-default btn-tag-bg" href="#">tour</a>
							<a class="btn btn-default btn-tag-bg" href="#">portfolio</a>
							<a class="btn btn-default btn-tag-bg" href="#">Photopgraphy</a>		
							<a class="btn btn-default btn-tag-bg" href="#">Responsive</a>
							<a class="btn btn-default btn-tag-bg" href="#">agency</a>
						</div>
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END BLOG -->
		
		<!-- START DEALS & DISCOUNT -->
{{--         
		<section id="deals_discount" class="deals_discount section-padding">
			<div class="container">		
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>Deals &amp; discount</h2>
							<span></span>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->					
				<div class="row">	
					<div class="col-md-12">
						<div id="discount-slider" class="owl-carousel">
							<div class="single-discount">
								<div class="single-img">
									<img src="assets/img/discount/1.jpg" class="img-fluid" alt=""/>
									<div class="post-date">
										<h4><del>$650</del> $450</h4>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>								
								</div>	
								<div class="single_discount_dsc">
									<h3>Black sea</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
									<a href="tour-details.html" target="_blank">View details</a>
								</div>
							</div><!-- END SINGLE DISCOUNT -->
							<div class="single-discount">
								<div class="single-img">
									<img src="assets/img/discount/2.jpg" class="img-fluid" alt=""/>
									<div class="post-date">
										<h4><del>$650</del> $450</h4>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>								
								</div>	
								<div class="single_discount_dsc">
									<h3>Gallipoli</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
									<a href="tour-details.html" target="_blank">View details</a>
								</div>
							</div><!-- END SINGLE DISCOUNT -->
							<div class="single-discount">
								<div class="single-img">
									<img src="assets/img/discount/3.jpg" class="img-fluid" alt=""/>
									<div class="post-date">
										<h4><del>$650</del> $450</h4>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>								
								</div>	
								<div class="single_discount_dsc">
									<h3>Pamukkale</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
									<a href="tour-details.html" target="_blank">View details</a>
								</div>
							</div><!-- END SINGLE DISCOUNT -->
							<div class="single-discount">
								<div class="single-img">
									<img src="assets/img/discount/4.jpg" class="img-fluid" alt=""/>
									<div class="post-date">
										<h4><del>$650</del> $450</h4>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>								
								</div>	
								<div class="single_discount_dsc">
									<h3>Ephesus</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
									<a href="tour-details.html" target="_blank">View details</a>
								</div>
							</div><!-- END SINGLE DISCOUNT -->
							<div class="single-discount">
								<div class="single-img">
									<img src="assets/img/discount/5.jpg" class="img-fluid" alt=""/>
									<div class="post-date">
										<h4><del>$650</del> $450</h4>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>								
								</div>	
								<div class="single_discount_dsc">
									<h3>Cappadocia</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
									<a href="tour-details.html" target="_blank">View details</a>
								</div>
							</div><!-- END SINGLE DISCOUNT -->
							<div class="single-discount">
								<div class="single-img">
									<img src="assets/img/discount/6.jpg" class="img-fluid" alt=""/>
									<div class="post-date">
										<h4><del>$650</del> $450</h4>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>								
								</div>	
								<div class="single_discount_dsc">
									<h3>Istanbul</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
									<a href="tour-details.html" target="_blank">View details</a>
								</div>
							</div><!-- END SINGLE DISCOUNT -->	
						</div>	
					</div>												
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section> --}}
		<!-- END DEALS & DISCOUNT -->
				
		<!-- START FOOTER -->
		<div class="footer">
			<div class="container">
				<div class="row">					
					<div class="col-xs-12 text-center">
						<div class="copyright">
							<p>Copyright &copy; 2020 |  All Rights Reserved.</p>
						</div><!--- END FOOTER COPYRIGHT -->
					</div><!--- END COL -->			
				</div><!--- END ROW -->				
			</div><!--- END CONTAINER -->
		</div>
		<!-- END FOOTER -->	

		<!-- STYLE SWITCHER -->
		 <div id="style-switcher">
			<h2>Your Awesome Color<a href="#"><i class="fa fa-cog fa-spin"></i></a></h2>
			<div>
			  <ul class="colors" id="color1">
				<li><a href="#" class="style1"></a></li>
				<li><a href="#" class="style2"></a></li>
				<li><a href="#" class="style3"></a></li>
				<li><a href="#" class="style4"></a></li>
				<li><a href="#" class="style5"></a></li>
				<li><a href="#" class="style6"></a></li>
				<li><a href="#" class="style7"></a></li>
				<li><a href="#" class="style8"></a></li>
				<li><a href="#" class="style9"></a></li>
				<li><a href="#" class="style10"></a></li>
				<li><a href="#" class="style11"></a></li>
				<li><a href="#" class="style12"></a></li>
			  </ul>
			</div>
		 </div>  
		 <!-- END OF STYLE SWITCHER -->
			 
        {!! Html::script('assets/js/jquery-1.12.4.min.js') !!}
        {!! Html::script('assets/bootstrap/js/bootstrap.min.js') !!}
        {!! Html::script('assets/js/modernizr-2.8.3.min.js') !!}
        {!! Html::script('assets/js/jquery.nav.js') !!}
        {!! Html::script('assets/js/smooth-scroll.js') !!}
        {!! Html::script('assets/owlcarousel/js/owl.carousel.min.js') !!}
        {!! Html::script('assets/js/jquery.stellar.min.js') !!}
        {!! Html::script('assets/js/jquery.inview.min.js') !!}
        {!! Html::script('assets/js/jquery.flexslider-min.js') !!}
        {!! Html::script('assets/js/scrolltopcontrol.js') !!}
        {!! Html::script('assets/js/form-contact.js') !!}
        {!! Html::script('assets/js/aos.js') !!}
        {!! Html::script('assets/js/switcher.js') !!}
        {!! Html::script('assets/js/scripts.js') !!}
    </body>
</html>