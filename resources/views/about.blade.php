 
 @extends('layouts/master')


 {{-- @dd($client) --}}

 {{-- @dd($category) --}}

 {{-- @foreach ($category as $item)
     
    {{ $item->name_category }}

    {{ $item->service->nama_pelayanan }}

 @endforeach --}}

 {{-- @dd($service) --}}


{{-- @foreach ($service as $service)

{{ $service->id }}

{{ $service->nama_pelayanan }}
{{ $service->category->name_category }}
{{ $service->description }}

{{ $service->slug }}
@endforeach --}}


{{-- @dd($area) --}}

{{-- @dd($data) --}}


 @section('content')
     
 

 
 
 <!-- start page-title -->
 <section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="title-breadcrumb">
                    <h2>About {{setting('site.title')}}</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>About {{setting('site.title')}}</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>        
<!-- end page-title -->


<!-- start about-section-s3 -->
<section class="about-section-custom section-padding-custom">
    <div class="container">
        <div class="row">
            <div class="col col-md-6">
                <div class="about-img">
                    <img src="assets/images/about-img.png" alt>
                </div>
            </div>
            <div class="col col-md-6">
                <div class="about-text">
                    <div class="title">
                        {{-- <span>{!! $about->title !!}</span> --}}
                        <h2>{!! $data->title !!}</h2>
                        {{-- <h2>We Build Everything</h2> --}}
                    </div>
                    <p>{!! html_entity_decode ($data->description) !!} <br> 
                        {!! html_entity_decode ($data->visi) !!} <br>

                        {!! html_entity_decode ($data->misi) !!}
                    </p>


                    <div class="signature">
                        <img src="{!! $data->image!!}" alt>
                    </div>
                </div>

                {{-- <div class="fun-fact">
                    <div class="fun-fact-grids start-count">
                        <div class="grid">
                            <div class="icon">
                                <img src="assets/images/fun-fact/icon-1.png" alt>
                            </div>
                            <h3>
                                <span class="counter" data-count="1200">00</span><span>+</span>
                            </h3>
                            <p>projects</p>
                        </div>

                        <div class="grid">
                            <div class="icon">
                                <img src="assets/images/fun-fact/icon-2.png" alt>
                            </div>
                            <h3>
                                <span class="counter" data-count="400">00</span><span>+</span>
                            </h3>
                            <p>Factories</p>
                        </div>

                        <div class="grid">
                            <div class="icon">
                                <img src="assets/images/fun-fact/icon-3.png" alt>
                            </div>
                            <h3>
                                <span class="counter" data-count="1000">00</span><span>+</span>
                            </h3>
                            <p>Employees</p>
                        </div>
                    </div> 
                </div> --}}
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end about-section-s3 -->


<!-- start services-section-s2 -->
<section class="services-section-s2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                <div class="section-title">
                    <h2> Area Pengiriman </h2>
                    <p> Kami menawarkan cara yang sederhana dan efisien untuk memenuhi proses pengiriman antara industri dan pelanggan mereka di seluruh Indonesia . </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-xs-12">
                <div class="services-grids ">

                    
                    <div class="grid">

                        @foreach ($area as $item)
                            
                        

                        <div class="box">
                            <div class="service-title">
                                {{-- <div class="icon"><img src="assets/images/services/icon-1.png" alt></div> --}}
                                <h3> {!!$item->nama_kota !!} </h3>
                            </div>
                            <p> {!!$item->description !!} </p>
                            {{-- <div class="more">
                                <a href="#">Read More</a>
                            </div> --}}
                        </div>


                        @endforeach
                     
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row">
            <div class="col col-xs-12">
                <p class="view-all-services"> Click here to view <a href="#">All Services <i class="fa fa-long-arrow-right"></i></a></p>
            </div>
        </div>                 --}}
    </div> <!-- end container -->
</section>
<!-- end services-section-s2 -->


<!-- start work-process-section -->
<section class="work-process-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                <div class="section-title">
                    <h2> Partnership </h2>
                    {{-- <span> {{setting('site.Service_descrip')}} </span>  --}}
                </div>
            </div>
        </div>
        
    </div> <!-- end container -->
</section>
<!-- end work-process-section -->







<!-- start partners-section-s3 -->
{{-- <section class="partners-section-s3">
    <h2 class="hidden">Partners</h2>
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="partners-slider">
                    @foreach ($client as $client )
                    <div class="grid">
                        <img src="{!! Voyager::image ($client->logo) !!}" alt>

                    </div>
                    @endforeach
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end partners-section-s3 -->







<!-- start testimonials-section-s2 -->
{{-- <section class="testimonials-section-s2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-3 col-md-4">
                <div class="section-title-s2">
                    <h2>Our<br>Clients</h2>
                </div>
            </div>
            <div class="col col-lg-8 col-md-8">
                <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archite.</p>
            </div>
        </div> --}}


 {{-- <section class="testimonials-section-s2 section-padding">

        <div class="container">
            <div class="row">
                @include('client')

            </div>
        </div>
    </div>
 </section> --}}


 <section class="partners-section">
    <h2 class="hidden">Partners</h2>
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="partners-slider">
                    @foreach ($client as $client )
                    <div class="grid">
                        <img src="{!! Voyager::image ($client->logo) !!}" alt>

                        <P> {!! $client->perusahaan !!} </P>
                    </div>
                    @endforeach
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>


        {{-- <div class="row">
            <div class="col col-lg-11 col-lg-offset-1">
                <div class="testimonials-grids testimonials-slider">
                    <div class="grid">
                        <div class="img-holder">
                            <img src="assets/images/testimonials/img-1.jpg" alt>
                        </div>
                        <div class="details">
                            <h3>“Impressive Performance & Productivity”</h3>
                            <span class="client-info">- Daniel Craig, Google</span>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non num quam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commo di conse quatur.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="img-holder">
                            <img src="assets/images/testimonials/img-1.jpg" alt>
                        </div>
                        <div class="details">
                            <h3>“Impressive Performance & Productivity”</h3>
                            <span class="client-info">- Daniel Craig, Google</span>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non num quam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commo di conse quatur.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    {{-- </div> --}}
{{-- </section>  --}}
<!-- end testimonials-section-s2 -->


<!-- start contact-info-map-section -->
<section class="contact-info-map-section">
    <div class="content">
        <div class="left-col">
            <div class="location-map" id="map"></div>
        </div>
        <div class="right-col">
            <div class="inner">
                <div class="title-text">
                    <h3>Drop us a line</h3>
                    <p>For any kind of query, contact us with the details below.</p>
                </div>
                <div class="contact-info">
                    <ul>
                        <li><i class="fa fa-phone"></i> {!! setting('site.phone') !!} </li>
                        <li><i class="fa fa-envelope"></i> {!! setting('site.email') !!}  </li>
                        <li><i class="fa fa-home"></i> {!! setting('site.alamat')!!} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- end content -->
</section>
<!-- end contact-info-map-section -->


<!-- start news-letter-section -->
<section class="news-letter-section">
    <div class="container">
        <div class="row">
            <div class="col col-md-7">
                <h3>Subscribe your E-mail for our <span>Newsletter &amp; Business Tips</span></h3>
            </div>
            <div class="col col-md-5">
                <div class="newsletter-form">
                    <form>
                        <div>
                            <input type="text" class="form-control" placeholder="email address..">
                            <button type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end news-letter-section -->

@endsection