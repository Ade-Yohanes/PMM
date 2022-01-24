@extends('layouts/master')



@section('content')

{{-- @dd($area); --}}

    {{-- <div class="row"> --}}

         <!-- start of hero -->   


         <section class="hero hero-slider-wrapper hero-style-3">
            <div class="hero-slider">

                @foreach ($data as $item)

                <div class="slide">
                    
                    <img src="{!! Voyager::image ($item->image )!!}" style="width:50%" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-6 col-md-8 col-sm-10 slide-caption">
                                <h2> {!! $item->title !!}</h2>
                                <p>{!! $item->description !!}</p>

                                
                                {{-- <div class="btns">
                                    <a href="#" class="theme-btn">Our Industries</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    

                </div>

                @endforeach


            
            </div>
        </section>
        <!-- end of hero slider -->


        <!-- start cta-section -->
        <section class="cta-section">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="cta-text">
                            <h3> {!! setting('site.description') !!} </h3>
                            <a href=" {!! '/contact' !!} " class="theme-btn-s2">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end cta-section -->

        <section class="all-services-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2> Service </h2>
                            <span> {{setting('site.Service_descrip')}} </span> 
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="services-grids">
        
                            @foreach ($service as $item)
                      
                            <div class="grid">
                                <div class="img-overlay">
                                    {{-- <img src="assets/images/services/img-1.jpg" alt> --}}
                                    <img src="{{ Voyager::image ($item->img) }}" style="  " alt>

                                    {{-- <div class="overlay">
                                        
                                    </div> --}}
                                </div>
                                <div class="details">
                                    
                                    <h3 href="{{ url('/service/' . $item->slug ) }}"> {{ $item->nama_pelayanan }} </h3>
                                    {{-- <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p> --}}
                                    <div class="read-more">
                                        <a href="{{ url('/service/' . $item->slug ) }}">Read More</a>
                                    </div>
                                </div>
                            </div>
        
                            @endforeach
        
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>


        <!-- start services-section -->
        {{-- <section class="services-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Industries Served</h2>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="services-grids services-slider">
                            <div class="grid">
                                <div class="img-overlay">
                                    <img src="assets/images/services/img-1.jpg" alt>
                                    <div class="overlay">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Mechanical Engineering</h3>
                                    <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                    <div class="read-more">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-overlay">
                                    <img src="assets/images/services/img-5.jpg" alt>
                                    <div class="overlay">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Automotive Services</h3>
                                    <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                    <div class="read-more">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-overlay">
                                    <img src="assets/images/services/img-6.jpg" alt>
                                    <div class="overlay">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Bridge Construction</h3>
                                    <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                    <div class="read-more">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-overlay">
                                    <img src="assets/images/services/img-1.jpg" alt>
                                    <div class="overlay">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Mechanical Engineering</h3>
                                    <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                    <div class="read-more">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <p class="view-all-services"> Click here to view <a href="#">All Services <i class="fa fa-long-arrow-right"></i></a></p>
                    </div>
                </div>
            </div> <!-- end container -->
        </section> --}}
        <!-- end services-section -->


        <!-- start about-section -->
        {{-- <section class="about-section">
            <div class="content">
                <div class="left-col">
                    <div class="inner">
                        <h3>We provide full range of Premium Industrial Services for your business</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="social">
                            <span>Get Connected With Us:</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="right-col">
                    <div class="video-holder">
                        <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe">
                            <i class="fa fa-play"></i> Play Video
                        </a>
                    </div>
                </div>
            </div> <!-- end content -->
        </section> --}}
        <!-- end about-section -->


        <!-- start projects-section -->
        {{-- <section class="projects-section section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Featured Projects</h2>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-xs-12 sortable-gallery">
                        <div class="gallery-filters">
                            <ul>
                                <li><a data-filter="*" href="#" class="current">All</a></li>
                                <li><a data-filter=".construction" href="#">Construction</a></li>
                                <li><a data-filter=".plant" href="#">Oil Plant</a></li>
                                <li><a data-filter=".mechanical" href="#">Mechanical</a></li>
                                <li><a data-filter=".welding" href="#">Welding</a></li>
                            </ul>
                        </div>

                        <div class="gallery-container">
                            <div class="box construction">
                                <img src="assets/images/projects/img-1.jpg" alt>
                                <div class="details">
                                    <div class="info">
                                        <span class="cat">Melbourne, AU</span>
                                        <h3><a href="#">Mechanical Works</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="box construction plant">
                                <img src="assets/images/projects/img-2.jpg" alt>
                                <div class="details">
                                    <div class="info">
                                        <span class="cat">Melbourne, AU</span>
                                        <h3><a href="#">Mechanical Works</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="box plant construction">
                                <img src="assets/images/projects/img-3.jpg" alt>
                                <div class="details">
                                    <div class="info">
                                        <span class="cat">Melbourne, AU</span>
                                        <h3><a href="#">Mechanical Works</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="box construction mechanical">
                                <img src="assets/images/projects/img-4.jpg" alt>
                                <div class="details">
                                    <div class="info">
                                        <span class="cat">Melbourne, AU</span>
                                        <h3><a href="#">Mechanical Works</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="box plant welding">
                                <img src="assets/images/projects/img-5.jpg" alt>
                                <div class="details">
                                    <div class="info">
                                        <span class="cat">Melbourne, AU</span>
                                        <h3><a href="#">Mechanical Works</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="box mechanical">
                                <img src="assets/images/projects/img-6.jpg" alt>
                                <div class="details">
                                    <div class="info">
                                        <span class="cat">Melbourne, AU</span>
                                        <h3><a href="#">Mechanical Works</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="box construction">
                                <img src="assets/images/projects/img-7.jpg" alt>
                                <div class="details">
                                    <div class="info">
                                        <span class="cat">Melbourne, AU</span>
                                        <h3><a href="#">Mechanical Works</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="box plant welding">
                                <img src="assets/images/projects/img-8.jpg" alt>
                                <div class="details">
                                    <div class="info">
                                        <span class="cat">Melbourne, AU</span>
                                        <h3><a href="#">Mechanical Works</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end projects-section -->



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
        <section class="all-services-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2> Partnership </h2>
                            <span> {{setting('site.Service_descrip')}} </span> 
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>  
        <!-- end testimonials-section -->


        <!-- start partners -->
        <section class="partners-section">
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
        <!-- end partners -->

       


        <!-- start contact-section -->
        
        <!-- end contact-section -->


        <!-- start news-section -->
      
        <!-- end news-section -->


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
        {{-- <section class="news-letter-section">
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
        </section> --}}
        <!-- end news-letter-section -->

    {{-- </div> --}}

@endsection
