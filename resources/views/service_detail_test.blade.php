@extends('layouts/master')


{{-- @dd('$data ?? '' ?? ''->nama-pelayanan ') --}}

 {{-- @foreach ($service as $data )
    

 {{ $data->id }}
{{ $data->nama_pelayanan }}


@endforeach --}}

{{-- @dd($service)  --}}

{{-- @dd($data) --}}

{{-- @dd($data->nama_pelayanan ) --}}

 @foreach ($data as $dt )
    

 {{ $dt->id }}
{{ $dt->category->name_category }}


@endforeach




@section('content')


<!-- start page-title -->
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="title-breadcrumb">
                    <h2>Services</h2>
                    <ol class="breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Services</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>        
<!-- end page-title -->


<!-- start work-process-section -->
<section class="work-process-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-3 col-md-4">
                <div class="section-title-s4">
                    <span>Work Process</span>
                    <h2>How We Work</h2>
                </div>
            </div>
            <div class="col col-lg-8 col-md-8">
                <p>Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea commodo con sequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
            </div>
        </div>   

       {{-- @include('components.serviceComponen') --}}

       


<!-- start all-services-section -->
{{-- <section class="all-services-section section-padding">
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
                <div class="services-grids">
                    <div class="grid">
                        <div class="img-overlay">
                            <img src="assets/images/services/img-1.jpg" alt>
                            <div class="overlay">
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="details">
                            <h3>Steel Industry</h3>
                            <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                            <div class="read-more">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="img-overlay">
                            <img src="assets/images/services/img-2.jpg" alt>
                            <div class="overlay">
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="details">
                            <h3>Knitwear Production</h3>
                            <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                            <div class="read-more">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="img-overlay">
                            <img src="assets/images/services/img-3.jpg" alt>
                            <div class="overlay">
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="details">
                            <h3>Timber Industry</h3>
                            <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                            <div class="read-more">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="img-overlay">
                            <img src="assets/images/services/img-4.jpg" alt>
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
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section> --}}
<!-- end all-services-section -->


 <!-- start service-singel-section -->
 <section class="service-singel-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-8 col-md-push-4">
                <div class="service-single-content">
                    <div>
                        <img src="assets/images/service-single-info.jpg" alt>
                    </div>

                    @foreach ($data as $item)
                        
                   

                    <div class="title">
                        <h3>{!! $item->nama_pelayanan !!}</h3>
                        <div class="download">
                            <a href="#"><i class="fa fa-file-word-o"></i> Download Doc</a>
                            <a href="#"><i class="fa fa-file-pdf-o"></i> Download PDF</a>
                        </div>
                    </div>
                    <div class="details">
                        <p> {!! $item->description !!} </p>
                        <ul>
                            <li><i class="fa fa-plus"></i> Mollis Pharetra Euismod Tellus Fermentum</li>
                            <li><i class="fa fa-plus"></i> Vulputate sem Pellentesque Adipiscing</li>
                            <li><i class="fa fa-plus"></i> Cursus sit Tortor Ligula Nullam</li>
                        </ul>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!</p> --}}
                        {{-- <h4>Sem Aenean Pharetra</h4> --}}
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!</p> --}}
                        {{-- <a href="#" class="theme-btn-s2">Contact us</a> --}}

                        @endforeach
                    </div>
                </div> <!-- end service content -->
            </div> <!-- end col -->
            
            <div class="col col-md-4 col-md-pull-8">
                <div class="service-single-sidebar">
                    <div class="services-link-widget widget">
                        <ul>

                            @foreach ($data as $item)
                                

                            {{-- <li class="current"><a href="#">Power and energy</a></li> --}}

                            <li>
                                <a href="{{ $item->id }}"> 
                                {{ $item->nama_pelayanan }} </a></li>

                            @endforeach

                            {{-- <li><a href="meterial-engineering.html">Meterial engineering</a></li>
                            <li><a href="mechanical-engineering.html">Mechanical engineering</a></li>
                            <li><a href="chemical-research.html">Chemical research</a></li>
                            <li><a href="alternate-energy.html">Alternate energy</a></li>
                            <li><a href="agricultural-processing.html">Agricultural processing</a></li> --}}
                        </ul>
                    </div>
                    <div class="download-brocher-widget widget">
                        <a href="#"><i class="fa fa-file-pdf-o"></i> Download brochure</a>
                    </div>
                    <div class="widget contact-widget">
                        <h3>Contact us for help?</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste assumenda unde, ut.Iste assumenda unde, ut.</p>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end service-single-section -->      



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