<header class="header">
        <div class="bottom-row wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".1s">
            <div class="container-fluid">
                <div class="row nav-flex">

                    <div class="mobile-nav">
                        <div class="mobile-header">
                            <div class="mobile-close">
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                        <div class="mobile-body"></div>
                    </div>

                    <div class="col-md-2 col-xs-12">
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="{{asset($logo->img_path)}}" alt="logo"></a>
                        </div>
                    </div>

                    <div class="col-md-8 hidden-sm hidden-xs">
                        <div class="navigation-list float-r">
                            <ul class="list-inline">
                                <li class="{{Request::path()=='/'? 'active':''}}"><a href="{{url('/')}}" >Home</a></li>
                                <li class="{{Request::path()=='matterport'? 'active':''}}"><a href="{{url('matterport')}}" >Matterport 3D</a></li>
                                <li class="{{Request::path()=='virtual'? 'active':''}}"><a href="{{url('virtual-house')}}" >Live Virtual Open House</a></li>
                                <li class="{{Request::path()=='google-virtual-tour'? 'active':''}}"><a href="{{url('google-virtual-tour')}}">Google Virtual Tours</a></li>
                                <li class="{{Request::path()=='hdrphotograph'? 'active':''}}"><a href="{{url('hdrphotograph')}}">HDR Photography</a></li>
                                <li class="{{Request::path()=='aerial-view'? 'active':''}}"><a href="{{url('aerial-view')}}">Aerial Views</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12 p-right-0">
                        <div class="other-links">
                            <ul class="list-inline  float-r">
                                <li>
                                    <div class="hamburger">
                                        <div class="hamburger-btn">
                                            <span class="hamburger-btn-1"></span>
                                            <span class="hamburger-btn-2"></span>
                                            <span class="hamburger-btn-3"></span>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">Hire Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>