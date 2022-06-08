<div>

 <!-- START SPECIAL PACKAGE -->
 <section id="destinos" class="special_package section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>destinos mas visitados</h2>
                    <span></span>
                    <p>A estos destinos prefieren ir nuestros turistas por los escenarios mas hgermosos y llamatios del planeta, estos destinos fueron preferidos duranteel ultimo trimestre y los recomendamos plenamente..</p>
                </div>
            </div><!-- END COL -->
        </div><!-- END ROW -->
        <div class="row text-center">
            <div class="col-md-12" data-aos="fade-up">
                <div id="package-slider" class="owl-carousel">
                    @foreach ($destinos as $destino)
                        <?php 
                            $images = App\Models\Media::where('mediable_id', $destino->id )->first() ;
                            if (!$images) {
                                $imagesurl = asset('/assets/img/no-pic.jpg');
                            }
                            else {
                                $imagesurl = asset($images->url);
                            }
                        ?>
                        
                        <a href="/destinos/detalle/{{ $destino->id }}" >
                            <div class="single_package">
                                <img class="img-fluid" src="{{ $imagesurl }}" alt="">
                                <h5 class="package-name">{{ $destino->title }}</h5>
                                <div class="package-hover">
                                    <h5>{{ $destino->title }}</h5>
                                    <span>Starting from $236</span>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt</p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="time_zone">5 days 4 night</span>
                                </div>
                            </div><!-- END SINGLE PACKAGE -->
                        </a>
                    @endforeach
                </div>
            </div><!-- END COL -->
        </div><!-- END ROW -->
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="/destinos" class="btn btn-lg btn-contact-bg">Ver todos los destinos</a>
            </div><!-- END COL -->
        </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</section>
<!-- END SPECIAL PACKAGE -->


</div>
