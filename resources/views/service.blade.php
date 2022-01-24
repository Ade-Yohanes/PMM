
@extends('layouts/master')


{{-- @dd('$data ?? '' ?? ''->nama-pelayanan ') --}}

{{-- @foreach ($data  as $data )
    
{{ $data->description }}

@endforeach --}}

{{-- @dd($service) --}}

{{-- @dd($area) --}}



@section('content')

    {{-- <div class="row"> --}}


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
<section class="all-services-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-3 col-md-4">
                <div class="section-title-s4">
                    <span>LINGKUP </span>
                    <h2>PELAYANAN</h2>
                </div>
            </div>
            <div class="col col-lg-8 col-md-8">
                <p>{{setting('site.Service_descrip')}}</p>
            </div>
        </div> 
    </div> <!-- end container -->
</section>  

       {{-- @include('components.serviceComponen') --}}

       


        <section class="all-services-section section-padding">
            <div class="container">
                {{-- <div class="row">
                    <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2> Service </h2>
                            <span> {{setting('site.Service_descrip')}} </span> 
                        </div>
                    </div>
                </div> --}}

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
</section>
<!-- end news-letter-section --> --}}

@endsection