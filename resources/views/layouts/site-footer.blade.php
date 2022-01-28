 {{-- @dd($service ?? '' ?? '') --}}

 {{-- @dd($service) --}}
 

 <!-- start site-footer -->
 <footer class="site-footer">
    <div class="upper-footer">
        <div class="container">
            <div class="row">
                <div class="col col-md-3 col-sm-6">
                    <div class="widget about-widget">
                        <div class="footer-logo"><img src=" {!! Voyager::image (setting('site.logo')) !!} " style=" display: block;
                            margin-left: auto;
                            margin-right: auto;
                            width: 50%; " alt></div>
                        {{-- <a class="navbar-brand" href=" {{ '/' }} "><img src="assets/images/LogoPM-3.png" alt>
                        
                            <h4> <span> PRAJA MITRA MANDIRI </span>  </h5>
                        </a> --}}
                        <p> {!! setting('site.description') !!} </p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col col-md-3 col-sm-6">
                    <div class="widget services-widget">
                        <h3>Services</h3>
                        <ul>

                            @foreach ($service as $item)
                            
                            <li><a href=" {{ url('/service/' . $item->slug ) }} "><i class="fa fa-angle-right"></i> {{ $item->nama_pelayanan }}</a></li>

                            @endforeach

                           

                            {{-- <li><a href="#"><i class="fa fa-angle-right"></i> Chemical Research</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Metal Engineering</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Mechanical Engineering</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Petroleum & Gas</a></li> --}}
                        </ul>
                    </div>
                </div>

                <div class="col col-sm-3 col-sm-6">
                    <div class="widget services-widget">
                        <h3>About</h3>
                        <ul>
                           
                            <li><a href=" {{ '/' }}"><i class="fa fa-angle-right"></i> Home</a></li>
                        
                            <li><a href=" {{ '/about' }} "><i class="fa fa-angle-right"></i> About</a></li>

                            <li><a href=" {{ '/service' }} "><i class="fa fa-angle-right"></i> Service</a></li>

                            <li><a href=" {{ '/contact' }} "><i class="fa fa-angle-right"></i> Contact</a></li>


                        </ul>
                    </div>
                </div>

                {{-- <div class="col col-md-3 col-sm-6">
                    <div class="widget recent-post-widget">
                        <h3>Recent Posts</h3>
                        <ul>
                            <li>
                                <div class="entry-media">
                                    <img src="assets/images/blog/thumb/img-1.jpg" alt>
                                </div>
                                <div class="entry-details">
                                    <h4><a href="#">China industrial profit growth slows to low</a></h4>
                                    <span class="date">5 hours ago</span>
                                </div>
                            </li>
                            <li>
                                <div class="entry-media">
                                    <img src="assets/images/blog/thumb/img-2.jpg" alt>
                                </div>
                                <div class="entry-details">
                                    <h4><a href="#">Industrial space to remain tight</a></h4>
                                    <span class="date">5 hours ago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div> <!-- end container -->
    </div> <!-- end upper-footer -->
    <div class="copyright-info">
        <div class="container">
            <p>2018 &copy; All Rights Reserved by <a href="http://templatespoint.net">TemplatesPoint</a></p>
        </div>
    </div>
</footer>
<!-- end site-footer -->
</div>