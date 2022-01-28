
@extends('layouts/master')


{{-- @dd($service) --}}


@section('content')


<!-- start page-title -->
{{-- <section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="title-breadcrumb">
                    <h2>Contact</h2> --}}
                    {{-- <ol class="breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Contact</li>
                    </ol> --}}

                    
                {{-- </div>
            </div>
        </div>  --}}
        <!-- end row -->
    {{-- </div> --}}
<!-- end container -->
{{-- </section>     --}}
<!-- end page-title -->    


<!-- start page-title -->
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12"> 
            
            </div> 
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>    
<!-- end page-title -->    

<div class="left-col">
    <div class="location-map" id="map"></div>
</div>


<!-- start contact-pg-contact-section -->  
<section class="contact-pg-contact-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-8 col-sm-8">
                <div class="contact-form">
                    {{-- <form class="row contact-validation-active"  id="contact-form-s2"> --}}

                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
           
                        {{-- action= "/contact/store" --}}



                        <form class="row contact-validation-active"  method="POST"  enctype="multipart/form-data"   action=" {!! url('/contact/store')!!}">

                            {{ csrf_field() }}


                        <div class="col col-sm-6">
                            <label for="f-name">Nama</label>
                            <input type="text" class="form-control" id="f-name" name="nama" value="{{ old('nama') }}" >

                            @if ($errors->has('nama'))
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                            @endif

                        </div>
                        <div class="col col-sm-6">
                            <label for="email"> Email </label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" >

                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        </div>
                        <div class="col col-sm-6">
                            <label for="perusahaan">Perusahaan</label>
                            <input type="text" class="form-control" id="l-name" name="perusahaan" value="{{ old('perusahaan') }}" >
                            @if ($errors->has('perusahaan'))
                            <span class="text-danger">{{ $errors->first('perusahaan') }}</span>
                        @endif
                        </div>
                        <div class="col col-sm-6">
                            <label for="phone">Phone</label>
                            <input type="phone" class="form-control" id="l-name" name="phone" value="{{ old('phone') }}" >
                            @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                        </div>
                        {{-- <div class="col col-sm-6">
                            <label for="phone"> Service </label>
                            <input type="text" class="form-control" id="phone" name="phone"value="{{ old('service') }}">
                        </div> --}}
                        

                         <div class="form-group col col-sm-6">
                            <label for="inputState">Service</label>
                            <select id="inputState" class="form-control" name="service" >
                              {{-- <option  value="" > Service.. </option> --}}
                              <option value="laut " >Laut</option>
                              <option value="darat" >Darat</option>
                              <option value="kereta" >Kereta</option>

                            </select>
                           
                          </div>

                        {{-- <div class="col col-sm-6">
                            <label for="phone">Lampiran</label>
                            <input type="text" class="form-control" id="phone" name="phone"value="{{ old('lampiran') }}">
                        </div> --}}

                        <div class="form-group col col-sm-6 ">
                            <label for="exampleFormControlFile1">Lampiran</label>
                            <input type="file" class="form-control" id="exampleFormControlFile1" name="lampiran" value="{{ old('lampiran') }}">
                            @if ($errors->has('lampiran'))
                            <span class="text-danger">{{ $errors->first('lampiran') }}</span>
                        @endif
                          </div>

                        <div class="col col-xs-12">
                            <label for="message"  >Message</label>
                            <textarea id="message" name="pesan" class="form-control" value="{{ old('pesan') }}"></textarea>
                            @if ($errors->has('pesan'))
                            <span class="text-danger">{{ $errors->first('pesan') }}</span>
                        @endif
                        </div>
                        <div class="col col-xs-12">
                            <div class="submit-btn">
                                <button type="submit" class="theme-btn-s2">Submit</button>
                                <div id="loader">
                                    <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xs-12">
                            <div class="error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later. </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-4">
                <div class="contact-info">
                    <h3>Drop us a line Request</h3>
                    <p>For any kind of query, contact us with the details below.</p>
                    <ul>
                        <li><i class="fa fa-phone"></i> {!!setting('site.phone') !!} </li>
                        <li><i class="fa fa-envelope"></i> {!! setting('site.email') !!}</li>
                        <li><i class="fa fa-home"></i> {!!setting('site.alamat')!!} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end contact-pg-contact-section -->


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

@endsection