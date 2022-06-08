
<!DOCTYPE html>
<html lang="es">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title>Potosi Tours</title>
        <link rel="icon" type="image/x-icon" href="/favicons/favicon.ico">
		<!-- Latest Bootstrap min CSS -->
        {!! Html::style('assets/bootstrap/css/bootstrap.min.css') !!}
		{{-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> --}}
		<!-- Google Font -->
        {!! Html::style('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800&display=swap') !!}
        {!! Html::style('https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap&subset=latin-ext') !!}
		 {{-- <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800&display=swap" rel="stylesheet">
		 <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap&subset=latin-ext" rel="stylesheet"> --}}

		<!-- Font Awesome CSS -->
        {!! Html::style('assets/fonts/font-awesome.min.css') !!}
		{{-- <link rel="stylesheet" href="assets/fonts/font-awesome.min.css"> --}}
		<!--- owl carousel Css-->
        {!! Html::style('assets/owlcarousel/css/owl.carousel.css') !!}
        {!! Html::style('assets/owlcarousel/css/owl.theme.css') !!}
		{{-- <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css"> --}}
 	    <!--Flex slider-->
         {!! Html::style('assets/css/flexslider.css') !!}
        {{-- <link rel="stylesheet" href="assets/css/flexslider.css"> --}}
		<!-- component CSS -->
        {!! Html::style('assets/css/aos.css') !!}
		{{-- <link rel="stylesheet" href="assets/css/aos.css"> --}}
		<!-- Style CSS -->
        {!! Html::style('assets/css/style.css') !!}
		{{-- <link rel="stylesheet" href="assets/css/style.css"> --}}
		<!-- CSS FOR COLOR SWITCHER -->
        {!! Html::style('assets/css/switcher/switcher.css') !!}
        {!! Html::style('assets/css/switcher/style1.css') !!}
		{{-- <link rel="stylesheet" href="assets/css/switcher/switcher.css"> --}}
		{{-- <link rel="stylesheet" href="assets/css/switcher/style1.css" id="colors"> --}}

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

        @livewireStyles
        @stack('styles')
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
			  <a class="navbar-brand" href="/"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
				<ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#paquetes">Paquetes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#destinos">Destinos</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="#nuevos_destinos">Nuevos destinos</a></li> --}}
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
			</div>
        </nav>
		<!-- END NAVBAR -->











            @yield('content')




		<!-- START FOOTER -->
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<div class="copyright">
							<p>Copyright &copy; 2022 |  All Rights Reserved D.I.M..</p>
						</div><!--- END FOOTER COPYRIGHT -->
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</div>
		<!-- END FOOTER -->

		<!-- STYLE SWITCHER -->
		 <div id="style-switcher">
			<h2>Configurar tema<a href="#"><i class="fa fa-cog fa-spin"></i></a></h2>
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

		<!-- Latest jQuery -->
        {!! Html::script('assets/js/jquery-1.12.4.min.js') !!}
        {{-- {!! Html::script('assets/js/popper.min.js') !!} --}}
			{{-- <script src="assets/js/jquery-1.12.4.min.js"></script>
			<script src="assets/js/popper.min.js"></script> --}}
		<!-- Latest compiled and minified Bootstrap
			<script src="assets/bootstrap/js/bootstrap.min.js"></script>-->
            {!! Html::script('assets/bootstrap/js/bootstrap.min.js') !!}
		<!-- modernizer JS -->
        {!! Html::script('assets/js/modernizr-2.8.3.min.js') !!}
			{{-- <script src="assets/js/modernizr-2.8.3.min.js"></script> --}}
		<!-- jquery smooth-scroll JS -->
        {!! Html::script('assets/js/smooth-scroll.js') !!}
			{{-- <script src="assets/js/smooth-scroll.js"></script> --}}
		<!-- jquery nav JS -->
        {!! Html::script('assets/js/jquery.nav.js') !!}
			{{-- <script src="assets/js/jquery.nav.js"></script> --}}
		<!-- jquery smooth-scroll JS -->
        {!! Html::script('assets/js/smooth-scroll.js') !!}
			{{-- <script src="assets/js/smooth-scroll.js"></script> --}}
		<!-- owl-carousel min js  -->
        {!! Html::script('assets/owlcarousel/js/owl.carousel.min.js') !!}
			{{-- <script src="assets/owlcarousel/js/owl.carousel.min.js"></script> --}}
		<!-- stellar js -->
        {!! Html::script('assets/js/jquery.stellar.min.js') !!}
			{{-- <script src="assets/js/jquery.stellar.min.js"></script> --}}
		<!-- countTo js -->
        {!! Html::script('assets/js/jquery.inview.min.js') !!}
			{{-- <script src="assets/js/jquery.inview.min.js"></script> --}}
		<!-- jquery flexslider min js -->
        {!! Html::script('assets/js/jquery.flexslider-min.js') !!}
			{{-- <script src="assets/js/jquery.flexslider-min.js"></script> --}}
		<!-- switcher js -->
        {!! Html::script('assets/js/switcher.js') !!}
			{{-- <script src="assets/js/switcher.js"></script> --}}
		<!-- scrolltopcontrol js -->
        {!! Html::script('assets/js/scrolltopcontrol.js') !!}
			{{-- <script src="assets/js/scrolltopcontrol.js"></script> --}}
		<!-- form-contact js -->
        {!! Html::script('assets/js/form-contact.js') !!}
			{{-- <script src="assets/js/form-contact.js"></script> --}}
		<!-- aos js -->
        {!! Html::script('assets/js/aos.js') !!}
			{{-- <script src="assets/js/aos.js"></script> --}}
		<!-- ripples js -->
        {!! Html::script('assets/js/ripples-min.js') !!}
			{{-- <script src="assets/js/ripples-min.js"></script> --}}
		<!-- map js -->
			<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>				 -->
		<!-- scripts js -->
        {!! Html::script('assets/js/scripts.js') !!}
			{{-- <script src="assets/js/scripts.js"></script> --}}

        @livewireScripts
        @stack('scripts')
    </body>
</html>
