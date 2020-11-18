<?php

$footer =DB::table('pages')->where('id', 14)->first();
$footerservice =DB::table('pages')->where('id', 15)->first();

?>
  <!-- FOOTER-SEC START -->

    <footer class="footer py-6">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                    <div class="company-info">
                        <figure class="mb-3"><img src="{{asset($logo2->img_path)}}"  alt="logo-footer"></figure>
                        <?=html_entity_decode($footer->content)?>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
                    <div class="quick-links">
                        <h4 class="mb-2">Quick Links</h4>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('matterport')}}">Matterport 3D</a></li>
                            <li><a href="{{url('virtual-house')}}">Live Virtual Open House</a></li>
                            <li><a href="{{url('google-virtual-tour')}}">Google Virtual Tours</a></li>
                            <li><a href="{{url('hdrphotograph')}}">HDR Photography</a></li>
                            <li><a href="{{url('aerial-view')}}">Aerial Views</a></li>
                            <li><a href="{{url('industries')}}">Industries</a></li>
                            <li><a href="{{url('preparation')}}">Preparation</a></li>
                            <li><a href="{{url('book-services')}}">Book Service</a></li>
                            <li><a href="{{url('faq')}}">FAQ</a></li>
                            <li><a href="{{url('about')}}">About us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".6s">
                    <div class="footer-social mb-3">
                        <h4 class="mb-2">Follow Us</h4>
                        <ul class="list-inline">
                            <li><a href="{{ App\Http\Traits\HelperTrait::returnFlag(682) }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ App\Http\Traits\HelperTrait::returnFlag(1960) }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ App\Http\Traits\HelperTrait::returnFlag(1963) }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{ App\Http\Traits\HelperTrait::returnFlag(1962) }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ App\Http\Traits\HelperTrait::returnFlag(1964) }}" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                    <div class="service-area">
                       <?=html_entity_decode($footerservice->content)?>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <div class="footer-contact">
                        <h4 class="mb-2">Contact Us</h4>
                        <ul>
                            <li><a href="javascript:void(0)"><i class="fa fa-map-marker"></i>{{ App\Http\Traits\HelperTrait::returnFlag(519)}}</a></li>
                            <li><a href="tel:{{ App\Http\Traits\HelperTrait::returnFlag(59)}}"><i class="fa fa-phone"></i> (123) 456 7890</a></li>
                            <li><a href="mailto:{{ App\Http\Traits\HelperTrait::returnFlag(218)}}"><i class="fa fa-envelope"></i>
                                   {{ App\Http\Traits\HelperTrait::returnFlag(218)}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<section class="copyright-sec">
        <div class="container">
            <div class="row nav-flex">
                <div class="col-md-6 col-xs-12 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s">
                    <h5>{{ App\Http\Traits\HelperTrait::returnFlag(499)}}</h5>
                </div>
                <div class="col-md-6 col-xs-12 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <ul class="list-inline float-r">
                        <li><a href="#">Privacy Policy</a></li><span>|</span>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>