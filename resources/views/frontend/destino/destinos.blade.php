{{-- @extends('layouts.frontend-template')

@section('content') --}}



<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Potosi Tours</title>
        {!! Html::style('assets/bootstrap/css/bootstrap.min.css') !!}
        {!! Html::style('assets/fonts/font-awesome.min.css') !!}
        {!! Html::style('assets/css/aos.css') !!}
        {!! Html::style('assets/css/style.css') !!}
        {!! Html::style('assets/css/destinos.css') !!}

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
          <a class="navbar-brand" href="index.html">
                <img src="{{asset('assets/img/logo.png')}}" alt="">
            </a>
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
                                <a href="{{ url('/dashboard') }}" class="text-white">Dashboard</a>
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





        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>




    <!-- START BLOG -->
    <section>

        @livewire('frontend.listadestino')

    </section>
    <!-- END BLOG -->




    <!-- START FOOTER -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="copyright">
                        <p class="">
                            <a href="#"><i class="fa  fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-whatsapp"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </p>
                        <p>Copyright &copy; 2022 | All Rights Reserved D.I.M..</p>
                    </div>
                    <!--- END FOOTER COPYRIGHT -->
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </div>
    <!-- END FOOTER -->

        {!! Html::script('assets/js/jquery-1.12.4.min.js') !!}
        {{-- {!! Html::script('assets/js/popper.min.js') !!} --}}
        {!! Html::script('assets/bootstrap/js/bootstrap.min.js') !!}
        {!! Html::script('assets/js/jquery.stellar.min.js') !!}
        {!! Html::script('assets/js/aos.js') !!}
        {!! Html::script('assets/js/scripts.js') !!}
        {{-- {!! Html::script('assets/js/modernizr-2.8.3.min.js') !!}
        {!! Html::script('assets/js/smooth-scroll.js') !!}

        {!! Html::script('assets/js/jquery.nav.js') !!}

        {!! Html::script('assets/js/smooth-scroll.js') !!}

        {!! Html::script('assets/owlcarousel/js/owl.carousel.min.js') !!}
        {!! Html::script('assets/js/jquery.inview.min.js') !!}

        {!! Html::script('assets/js/jquery.flexslider-min.js') !!}
        {!! Html::script('assets/js/switcher.js') !!}
        {!! Html::script('assets/js/scrolltopcontrol.js') !!}
        {!! Html::script('assets/js/form-contact.js') !!}
        --}}
        {{-- {!! Html::script('assets/js/ripples-min.js') !!} --}}
    @livewireScripts
    @stack('scripts')
</body>

</html>
