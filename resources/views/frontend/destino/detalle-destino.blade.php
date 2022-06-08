 @extends('layouts.frontend-template')

{{-- Detalle destinos: . {{ $id }} --}}


@php
    $images = App\Models\Media::where('mediable_id', $destino->id )->first();
    if(!$images)
        $imagesurl = asset('/assets/img/no-pic.jpg');
    else
        $imagesurl = asset($images->url);
@endphp

<!-- START TITLE TOP -->
<section class="section-content section-padding" style="background-image: url({{ asset($imagesurl) }});  background-size:cover; background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="section-blog-title">Detalle Destino</h1>
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
                    <img src="{{ $imagesurl }}" class="img-responsive" alt="">
                    <span>5 days 4 night</span>
                    {{-- <h2 class="title">{{ $destino->title }}</h2> --}}
                    <p>{{ $destino->description_large }}</p>
                </div>
            </div><!--- END COL -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="book_now">
                    <h4>detalles</h4>
                    <form id="contact-form" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <h3>{{ $destino->title }}</h3>
                            <div class="form-group col-md-12">
                                Precio: {{ $destino->price }} $us.
                            </div>
                            <br/>
                            <div class="form-group col-md-12">
                                Calificacion:
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>

                            <div class="col-md-12">
                                <div class="actions">
                                    <input type="submit" value="COMPRAR" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Submit Your Message!" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>

                <div class="tag">
                    <h4 class="blog_sidebar_title">Tags</h4>
                    <a class="btn btn-default btn-tag-bg" href="#">Destino</a>
                    <a class="btn btn-default btn-tag-bg" href="#">circuito</a>
                    <a class="btn btn-default btn-tag-bg" href="#">popular</a>
                    <a class="btn btn-default btn-tag-bg" href="#">viajes</a>
                    <a class="btn btn-default btn-tag-bg" href="#">paraiso</a>
                    <a class="btn btn-default btn-tag-bg" href="#">turismo</a>
                </div>
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>
<!-- END BLOG -->

@livewire('home.paquetes')


{{--
<!-- START DEALS & DISCOUNT -->

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
</section>
<!-- END DEALS & DISCOUNT -->
 --}}





