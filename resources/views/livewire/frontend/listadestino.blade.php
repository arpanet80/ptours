<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section-title text-center wow zoomIn">
                    <h2>Nuestros Destinos turisticos</h2>
                    <span></span>
                    <p>Le presentamos nustra selección de destinos para que puea elegir el destuno a visitar en su
                        proximo viaje.</p>
                </div>
            </div><!-- END COL -->
        </div><!-- END ROW -->
        {{-- <div class="viewtype__select">         NO FUNCIONA
            <span class="text">Ver</span>
            <div class="select">
                <select wire:model="perPage" >
                    <option value="9">9 por paghina</option>
                    <option value="9">27 por paghina</option>
                    <option value="9">45 por paghina</option>
                    <option value="9">90 por paghina</option>
                </select>
            </div>
        </div> --}}
        <div class="row">
            @foreach ($destinos as $destino)
                <div class="col-md-4 col-sm-12 col-xs-12"  data-aos="fade-up">
                    <div class="single_home_blog">
                        <div class="post-slide">
                            <div class="post-img">
                                <a href="/destinos/detalle/{{ $destino->id }}">
                                    @php
                                        $images = App\Models\Media::where('mediable_id', $destino->id )->first();
                                    @endphp
                                        
                                    @if (!$images)
                                        <img src="{{ env('APP_URL') . '/assets/img/no-pic.jpg' }}" alt="">
                                    @else
                                        <img src="{{ env('APP_URL') . $images->url }}" alt="">
                                    @endif
  
                                </a>
                            </div>
                            <div class="post-content">
                                <h5 class="post-title">{{ $destino->title }}<span class="pull-right">$799</span></h5>
                                {{-- <p class="post-description">{{ $destino->description_short }}</p> --}}
                                <p class="post-description">{{ $destino->title }}</p>
                                <p class="post-description">{{ $destino->id }}</p>
                                <div class="packages-review">
                                    <p>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>2544 votos</span>
                                    </p>
                                </div><!--/.packages-review-->
                                <a href="/destinos/detalle/{{ $destino->id }}">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END COL  -->

            @endforeach

        </div>
        <!--- END ROW -->
        <div class="ps-pagination">
            {{ $destinos->links('pagination::bootstrap-4') }}
        </div>
    </div>
    <!--- END CONTAINER -->


</div>
