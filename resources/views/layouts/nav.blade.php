
{{-- @dd('$service') --}}



    <!-- Start header -->
    <header id="header" class="site-header header-style-3">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-6">
                        {{-- <div class="office-hour">
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Monday - friday : 8:00 AM to 7:00 PM</li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="col col-sm-6">
                        <div class="contact-info">
                            <ul>
                                <li><i class="fa fa-phone"></i> {!! setting('site.phone') !!} </li>
                                <li><i class="fa fa-envelope"></i> {!! setting('site.email') !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div> <!-- end topbar -->

        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <a class="navbar-brand" href=" {{ '/' }} "><img src="{{ Voyager::image( setting('site.logo') ) }}" alt>

                    {{-- <a class="navbar-brand" href=" {{ '/' }} "><img src="assets/images/LogoPM-3.png" alt> --}}



                        
                        <h4> <span> PRAJA MITRA MANDIRI </span>  </h5>
                    </a>
                    
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                    <button class="close-navbar"><i class="fa fa-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li class="menu-item-has-children">
                            {{-- <a href=" {{ '/' }} ">Home</a> --}}
                            <li><a href=" {{ '/' }} ">Home</a></li>
                        </li>
                        <li><a href=" {{ '/about' }} ">About</a></li>
                        <li class="menu-item-has-children">
                            {{-- <a href=" {{ '/service'}} ">Services</a> --}}
                            <li><a href=" {{ '/service' }} ">Service</a></li>
                            {{-- <ul class="sub-menu">
                                <li><a href="services.html">Ground Shipping</a></li>
                                <li><a href="service-single.html">SEA Shipping</a></li>
                                <li><a href="oil-lubricant.html">Train Delivery</a></li>
                            
                            </ul> --}}
                        </li>
                        
                        <li><a href=" {{'/contact'}} ">Contact</a></li>
                    </ul>
                </div><!-- end of nav-collapse -->
                <div class="request-quote">
                    <a href="{{'/contact'}}">Request Quote</a>
                </div>
            </div><!-- end of container -->
        </nav>
    </header>
    <!-- end of header -->
