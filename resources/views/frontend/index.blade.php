@extends('layouts.frontend-template')

@section('content')

<!-- START HOME -->
<section id="home" class="home_parallax ripple" style="background-image: url(assets/img/bg/uyuni.jpg);  background-size:cover; background-position: center center;">
    <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="hero-text">
                <h1> turismo de altura</h1>
                <p>Ofrecemos impresionantes paisajes naturales y un verdadero turismo con calidad y calidez, <br />haciendo experencias perfectas e inolvidables. .</p>
                <a href="#special_package" class="btn btn-default btn-home-bg">Buscar Sugerencias</a>
            </div>
          </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>
<!-- END  HOME DESIGN -->







@livewire('home.paquetes')

@livewire('home.destinos')

















 <!-- START TOP DEALS -->
 <section id="nuevos_destinos" class="top_deals section-padding">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-12" data-aos="fade-up">
                 <div class="section-title text-center">
                     <h2>PromoS</h2>
                     <span></span>
                     <p>Te ofrecemos las promocionesmas recientes que hermos seleccionado para tí.</p>
                 </div>
             </div><!-- END COL -->
         </div><!-- END ROW -->
         <div class="row" data-aos="fade-up">
             <div class="col-sm-4 col-xs-12 no-padding">
                 <div class="grid">
                     <figure class="effect-sadie">
                         <img src="assets/img/portfolio/1.jpg" alt=""/>
                         <figcaption>
                             <h4>Paquete Promocional</h4>
                             <p><a href="tour-details.html">ver detalles</a></p>
                         </figcaption>
                     </figure>
                 </div><!--- END GRID -->
             </div><!--- END COL -->
             <div class="col-sm-4 col-xs-12 no-padding">
                 <div class="grid">
                     <figure class="effect-sadie">
                         <img src="assets/img/portfolio/2.jpg" alt=""/>
                         <figcaption>
                             <h4>Paquete Promocional</h4>
                             <p><a href="tour-details.html">ver detalles</a></p>
                         </figcaption>
                     </figure>
                 </div><!--- END GRID -->
             </div><!--- END COL -->
             <div class="col-sm-4 col-xs-12 no-padding">
                 <div class="grid">
                     <figure class="effect-sadie">
                         <img src="assets/img/portfolio/3.jpg" alt=""/>
                         <figcaption>
                             <h4>Paquete Promocional</h4>
                             <p><a href="tour-details.html">ver detalles</a></p>
                         </figcaption>
                     </figure>
                 </div><!--- END GRID -->
             </div><!--- END COL -->
             <div class="col-sm-4 col-xs-12 no-padding">
                 <div class="grid">
                     <figure class="effect-sadie">
                         <img src="assets/img/portfolio/4.jpg" alt=""/>
                         <figcaption>
                             <h4>Paquete Promocional</h4>
                             <p><a href="tour-details.html">ver detalles</a></p>
                         </figcaption>
                     </figure>
                 </div><!--- END GRID -->
             </div><!--- END COL -->
             <div class="col-sm-4 col-xs-12 no-padding">
                 <div class="grid">
                     <figure class="effect-sadie">
                         <img src="assets/img/portfolio/5.jpg" alt=""/>
                         <figcaption>
                             <h4>Paquete Promocional</h4>
                             <p><a href="tour-details.html">ver detalles</a></p>
                         </figcaption>
                     </figure>
                 </div><!--- END GRID -->
             </div><!--- END COL -->
             <div class="col-sm-4 col-xs-12 no-padding">
                 <div class="grid">
                     <figure class="effect-sadie">
                         <img src="assets/img/portfolio/6.jpg" alt=""/>
                         <figcaption>
                             <h4>Paquete Promocional</h4>
                             <p><a href="tour-details.html">ver detalles</a></p>
                         </figcaption>
                     </figure>
                 </div><!--- END GRID -->
             </div><!--- END COL -->
         </div><!--- END ROW -->
     </div><!--- END CONTAINER-FLUID -->
 </section>
 <!-- END TOP DEALS -->


{{--

<!-- START BLOG -->
<section id="blog" class="blog_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section-title text-center wow zoomIn">
                    <h2>Our Blog</h2>
                    <span></span>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                </div>
            </div><!-- END COL -->
        </div><!-- END ROW -->
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single_home_blog">
                    <div class="post-slide">
                        <div class="post-img">
                            <a href="#"><img src="assets/img/blog/1.jpg" alt=""></a>
                            <div class="post-date-blog">
                                <span class="month">Mar</span>
                                <span class="date">25</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h5 class="post-title"><a href="blog.html">Why you should Always First</a></h5>
                            <p class="post-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum maxime recusandae repudiandae similique.
                            </p>
                            <a href="blog.html">read more</a>
                        </div>
                    </div>
                </div>
            </div><!-- END COL  -->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single_home_blog">
                    <div class="post-slide">
                        <div class="post-img">
                            <a href="#"><img src="assets/img/blog/2.jpg" alt=""></a>
                            <div class="post-date-blog">
                                <span class="month">Mar</span>
                                <span class="date">26</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h5 class="post-title"><a href="blog.html">Why you should Always First</a></h5>
                            <p class="post-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum maxime recusandae repudiandae similique.
                            </p>
                            <a href="blog.html">read more</a>
                        </div>
                    </div>
                </div>
            </div><!-- END COL  -->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single_home_blog">
                    <div class="post-slide">
                        <div class="post-img">
                            <a href="#"><img src="assets/img/blog/3.jpg" alt=""></a>
                            <div class="post-date-blog">
                                <span class="month">Mar</span>
                                <span class="date">27</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h5 class="post-title"><a href="blog.html">Why you should Always First</a></h5>
                            <p class="post-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum maxime recusandae repudiandae similique.
                            </p>
                            <a href="blog.html">read more</a>
                        </div>
                    </div>
                </div>
            </div><!-- END COL  -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>
<!-- END BLOG -->
 --}}


  <!-- START SERVICES -->
<section id="servicios" class="our_services">
    <div class="container">
         <div class="row">
             <div class="col-md-12 text-center">
                 <div class="section-title">
                     <h2>nuestros servicios</h2>
                     <span></span>
                     <p>Nuestra misión es trabajar para ustedor invidunt ut labore et dolore magna aliquyam erat.</p>
                 </div>
             </div>
         </div>
         <div class="row text-center">
             <div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
                 <div class="service">
                     <div class="icon"><i class="fa fa-bed"></i></div>
                     <h4>Reservas de Hotel</h4>
                     <p>Tenemos los mejores servicios de hospedaje que haran detu estadía una experiencia reconfortante ylo más parecido a estar en casa mejorarándo asi tu estadía en nuestro país.</p>
                 </div>
             </div><!-- END COL -->
             <div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
                 <div class="service">
                     <div class="icon"><i class="fa fa-plane"></i></div>
                     <h4>Reserva de transporte</h4>
                     <p>El servicio de transporte de primera es uno de los piulares fundamentales de una buena experiencia turística por lo que nos preocupamos de conseguirte el mejor servicio..</p>
                 </div>
             </div><!-- END COL -->
             <div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
                 <div class="service">
                     <div class="icon"><i class="fa fa-ticket"></i></div>
                     <h4>Reserva de Pasajes</h4>
                     <p>Con nosotrso puedes hacer diratamente tus reservas de pasajes y vuelos internacionales, esto hace que no tengas que preocuparte por solicitar intermediarios ni tener que perder tiempo visitando terminales y aeropuertos.</p>
                 </div>
             </div><!-- END COL -->
             <div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
                 <div class="service">
                     <div class="icon"><i class="fa fa-ship"></i></div>
                     <h4>Guias experimentados</h4>
                     <p>Contamos con un staff de guias turísticos con una larga experiencia y del más alto nivel que cvubren lso destinos turisticos que ofrecemos haciendo placenteras las visitas con interccion en mas de siete idiomas.</p>
                 </div>
             </div><!-- END COL -->
             <div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
                 <div class="service">
                     <div class="icon"><i class="fa fa-train"></i></div>
                     <h4>Restaurant y Catering</h4>
                     <p>Para hacer tu visita más placentera contamos como afiliados a los restaurantes más prestigiosos del pais que atendran ñas exigencias mas exquisitas de tu paladar, con la culinaria mas representativa del pais asi como la culinaria internacional..</p>
                 </div>
             </div><!-- END COL -->
             <div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
                 <div class="service">
                     <div class="icon"><i class="fa fa-home"></i></div>
                     <h4>Increibles tours</h4>
                     <p>Los tours que ofrecemos incluyen una amplia gama de actividades deportivas, entretenimiento, deportes extremos, y diferentes circuitos que te dejaran maravillado en tu visita deseandoretornar a nuestro país para concoer mas lugares atractivos y divertidos con tu famuilia y amigos..</p>
                 </div>
             </div><!-- END COL -->
         </div><!-- END ROW -->
     </div><!-- END CONTAINER -->
 </section>
 <!-- END SERVICES -->

 <!-- START WHY CHOOSE US -->
 <section data-stellar-background-ratio="0.3" class="why_choose section-padding"  style="background-image: url(assets/img/bg/service-bg.jpg);  background-size:cover; background-position: center center;">
     <div class="container">
         <div class="row">
             <div class="col-md-12" data-aos="fade-up">
             <div class="section-title text-center">
                 <h2 class="section-title-white">Por que elegirnos</h2>
                     <span class="section-title-white"></span>
                     <p class="section-title-white">Somo una empresa seria con más de 10 años en el mercado del turismo ofreciendo lo mejor en destinos y en calidad de servicio..</p>
                 </div>
             </div><!-- END COL -->
         </div><!-- END ROW -->
         <div class="row text-center">
             <div class="col-sm-4 col-xs-12" data-aos="fade-up">
                 <div class="single-choose">
                     <i class="fa fa-star"></i>
                     <h4>los mejores Hoteles</h4>
                     <p>Nuestroa filiados son los hoteles con la clasificacion mas alta del pais, los que reunen lasmejores condiciones de confort y calidad.</p>
                 </div>
             </div><!-- END COL -->
             <div class="col-sm-4 col-xs-12" data-aos="fade-up">
                 <div class="single-choose">
                     <i class="fa fa-globe"></i>
                     <h4>Servicio de clase mundial</h4>
                     <p>Nuestro servicio se compara con las mejores empresas del mundo caracterizadas por la calidad, cualidad y calidez para  nuestros clientes.</p>
                 </div>
             </div><!-- END COL -->
             <div class="col-sm-4 col-xs-12" data-aos="fade-up">
                 <div class="single-choose">
                     <i class="fa fa-thumbs-up"></i>
                     <h4>mejor precio garantizado</h4>
                     <p>Los costos que  pagas por nuestros servicios son los más competitivos del mercado lo que no disonuye la calidad, al contrario te ofrecemos solo lo mejor.</p>
                 </div>
             </div><!-- END COL -->
         </div><!-- END ROW -->
     </div><!-- END CONTAINER -->
 </section>
 <!-- END WHY CHOOSE US -->

 <!-- START COUNTER -->
 <section class="complete-project-area counter_feature section-padding">
     <div class="container">
         <div class="row ">
             <div class="col-md-3 col-sm-6 col-xs-12 no-padding" data-aos="fade-up">
                 <div class="single-project-complete">
                     <h2 class="counter-num">32652</h2>
                     <h3>Clientes satisfechos</h3>
                 </div>
             </div><!-- END COL -->
             <div class="col-md-3 col-sm-6 col-xs-12 no-padding" data-aos="fade-up">
                 <div class="single-project-complete">
                     <h2 class="counter-num">1821</h2>
                     <h3>Paquetes increibles</h3>
                 </div>
             </div><!-- END COL -->
             <div class="col-md-3 col-sm-6 col-xs-12 no-padding" data-aos="fade-up">
                 <div class="single-project-complete">
                     <h2 class="counter-num">5660</h2>
                     <h3>Destinos maravillosos</h3>
                 </div>
             </div><!-- END COL -->
             <div class="col-md-3 col-sm-6 col-xs-12 no-padding" data-aos="fade-up">
                 <div class="single-project-complete brnone">
                     <h2 class="counter-num">11859</h2>
                     <h3>Hoteles y restaurantes</h3>
                 </div>
             </div><!-- END COL -->
         </div><!-- END ROW -->
     </div><!-- END CONTAINER -->
 </section>
 <!-- END COUNTER -->





 <!-- START GALLERY -->
 <section id="gallery" class="our_gallery section-padding">
     <div class="container">
         <div class="row">
             <div class="col-md-12" data-aos="fade-up">
                 <div class="section-title text-center">
                     <h2>Galeria</h2>
                     <span></span>
                     <p>Observa alguna imagenes y videos de los atractivos que ofretamos para que te hagas una idea de lo que te espera si vienes con nosotros.</p>
                 </div>
             </div><!-- END COL -->
         </div><!-- END ROW -->
         <div class="row">
             <div class="col-md-12" data-aos="fade-up">
                 <div id="gallery-slider" class="owl-carousel">
                     <div class="single_gallery">
                         <img src="assets/img/gallery/1.jpg" class="img-gallery" alt="" />
                         <div class="gallery_info">
                             <h1>Paquetes</h1>
                             <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                         </div>
                     </div><!-- END SINGLE GALLERY -->
                     <div class="single_gallery">
                         <img src="assets/img/gallery/2.jpg" class="img-gallery" alt="" />
                         <div class="gallery_info">
                             <h1>Destinos</h1>
                             <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                         </div>
                     </div><!-- END SINGLE GALLERY -->
                     <div class="single_gallery">
                         <img src="assets/img/gallery/3.jpg" class="img-gallery" alt="" />
                         <div class="gallery_info">
                             <h1>Entretenimiento</h1>
                             <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                         </div>
                     </div><!-- END SINGLE GALLERY -->
                     <div class="single_gallery">
                         <img src="assets/img/gallery/4.jpg" class="img-gallery" alt="" />
                         <div class="gallery_info">
                             <h1>hoteles</h1>
                             <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                         </div>
                     </div><!-- END SINGLE GALLERY -->
                 </div>
             </div><!-- END COL -->
         </div><!-- END ROW -->
     </div><!-- END CONTAINER -->
 </section>
 <!-- END GALLERY -->



 <!-- START TESTIMONIAL -->
 <section class="testimonial-demo section-padding">
     <div class="container">
         <div class="row">
             <div class="col-md-12 text-center" data-aos="fade-up">
                 <div class="section-title">
                     <h2>Lo que nuestros clientes opinan</h2>
                     <span></span>
                     <p>Lee algunos de los comentarios que dejaron nuestros clientes luego de su visita a nuestro pais con nuestra empresade turismo.</p>
                 </div>
             </div><!-- END COL -->
         </div><!-- END ROW -->
         <div class="row">
             <div class="col-md-12">
                 <div id="testimonial-slider" class="owl-carousel">
                     <div class="testimonial">
                         <div class="testimonial-content">
                             <div class="testimonial-icon">
                                 <i class="fa fa-quote-left"></i>
                             </div>
                             <p class="description">
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                             </p>
                         </div>
                         <h3 class="title">Juan Perez</h3>
                         <span class="post">España</span>
                     </div>

                     <div class="testimonial">
                         <div class="testimonial-content">
                             <div class="testimonial-icon">
                                 <i class="fa fa-quote-left"></i>
                             </div>
                             <p class="description">
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                             </p>
                         </div>
                         <h3 class="title">Cristina Cohelo</h3>
                         <span class="post">Portugal</span>
                     </div>

                     <div class="testimonial">
                         <div class="testimonial-content">
                             <div class="testimonial-icon">
                                 <i class="fa fa-quote-left"></i>
                             </div>
                             <p class="description">
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                             </p>
                         </div>
                         <h3 class="title">Larry Christman</h3>
                         <span class="post">USA</span>
                     </div>
                     <div class="testimonial">
                         <div class="testimonial-content">
                             <div class="testimonial-icon">
                                 <i class="fa fa-quote-left"></i>
                             </div>
                             <p class="description">
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                             </p>
                         </div>
                         <h3 class="title">Anthony Hopkins</h3>
                         <span class="post">Inglaterra</span>
                     </div>
                     <div class="testimonial">
                         <div class="testimonial-content">
                             <div class="testimonial-icon">
                                 <i class="fa fa-quote-left"></i>
                             </div>
                             <p class="description">
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                             </p>
                         </div>
                         <h3 class="title">Stephen Cahos</h3>
                         <span class="post">Italia</span>
                     </div>
                     <div class="testimonial">
                         <div class="testimonial-content">
                             <div class="testimonial-icon">
                                 <i class="fa fa-quote-left"></i>
                             </div>
                             <p class="description">
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                             </p>
                         </div>
                         <h3 class="title">Pedro alizares</h3>
                         <span class="post">Argentina</span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- END TESTIMONIAL -->



 <section class="partners ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" data-aos="fade-up">
                <div class="section-title">
                    <h2>nuestros partners</h2>
                </div>
            </div><!-- END COL -->
        </div><!-- END ROW -->
        <div class="row">
            <!-- START COMPANY PARTNER LOGO  -->
            <div data-stellar-background-ratio="0.3" class="partner-logo" style="background-image: url(assets/img/bg/partner-bg.jpg);  background-size:cover; background-position: center center;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" data-aos="fade-up">
                            <div class="partner">
                                <a href="#"><img src="assets/img/partner/1.jpg" alt="image"></a>
                                <a href="#"><img src="assets/img/partner/2.jpg" alt="image"></a>
                                <a href="#"><img src="assets/img/partner/3.jpg" alt="image"></a>
                                <a href="#"><img src="assets/img/partner/4.jpg" alt="image"></a>
                                <a href="#"><img src="assets/img/partner/5.jpg" alt="image"></a>
                                <a href="#"><img src="assets/img/partner/6.jpg" alt="image"></a>
                                <a href="#"><img src="assets/img/partner/1.jpg" alt="image"></a>
                                <a href="#"><img src="assets/img/partner/2.jpg" alt="image"></a>
                                <a href="#"><img src="assets/img/partner/3.jpg" alt="image"></a>
                                <a href="#"><img src="assets/img/partner/4.jpg" alt="image"></a>
                                <a href="#"><img src="assets/img/partner/5.jpg" alt="image"></a>
                                <a href="#"><img src="assets/img/partner/6.jpg" alt="image"></a>
                            </div>
                        </div><!-- END COL  -->
                    </div><!--END  ROW  -->
                </div><!-- END CONTAINER  -->
            </div>
            <!-- END COMPANY PARTNER LOGO -->
        </div>
    </div>
</section>



 <!-- START CONTACT FORM-->
 <section id="contact" class="contact_area">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-6 col-sm-12 col-xs-12 no-padding" data-aos="fade-up">
                 <div class="contact_address">
                     <h3>Contactanos</h3>
                     <ul>
                         <li><i class="fa fa-rocket"></i>Calle bolivar Nº 624, Murillo 723</li>
                         <li><i class="fa fa-phone"></i>(+591) 67924400</li>
                         <li><i class="fa fa-envelope"></i>Info@potositours.com</li>
                         <li><i class="fa fa-clock-o"></i>De Lunes - Viernes: 08.00 - 18.00</li>
                     </ul>
                 </div>
             </div><!-- END COL -->
             <div class="col-lg-6 col-sm-12 col-xs-12 no-padding" data-aos="fade-up">
                 <div class="contact">
                     <form id="contact-form" method="post" enctype="multipart/form-data">
                         <div class="row">
                             <div class="form-group col-md-6">
                                 <input type="text" name="name" class="form-control" id="first-name" placeholder="Nombre" required="required">
                             </div>
                             <div class="form-group col-md-6">
                                 <input type="email" name="email" class="form-control" id="first-email" placeholder="Email" required="required">
                             </div>
                             <div class="form-group col-md-12">
                                 <input type="text" name="subject" class="form-control" id="subject" placeholder="Asunto" required="required">
                             </div>
                             <div class="form-group col-md-12">
                                 <textarea rows="6" name="message" class="form-control" id="description" placeholder="Escribe tu mensaje" required="required"></textarea>
                             </div>
                             <div class="col-md-12">
                                 <div class="actions">
                                     <input type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Submit Your Message!" />
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div><!-- END COL -->
         </div><!--- END ROW -->
     </div><!--- END CONTAINER -->
 </section>
 <!-- END CONTACT FORM -->

 <!-- START MAP -->
 {{-- <div id="map"></div> --}}
 <!-- END MAP -->
@endsection








