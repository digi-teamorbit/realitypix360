@extends('layouts.main')
@section('content')
    
    <!-- MAIN-SLIDER START -->

    <section class="main-slider">
        <img src="{{asset($banner->image)}}" class="img-responsive main-banner" alt="main-slider-banner">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="slider-caption">
                        <div class="slider-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7 col-xs-12 pull-right">
                                        <div class="content wow zoomIn" data-wow-duration="2s" data-wow-delay=".6s">

                                             <?=html_entity_decode($banner->description) ?>
                                            <a href="contact.html" class="primary-btn">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="slider-before">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-sm-8 col-xs-12 p-left-0">
                    <a href="#" class="big-img">
                        <img class="img-responsive" src="{{asset('images/slider-after-img-1.jpg')}}" alt="image" />
                    </a>

                    <a href="#" class="sm-img">
                        <img class="img-responsive" src="{{asset('images/slider-after-img-2.jpg')}}" alt="image" />
                    </a>
                </div>
            </div>
        </div>
    </div>


    <section class="about-sec py-6 pt-0">
        <div class="container">
            <div class="row nav-flex">
                <div class="col-md-6 col-xs-12 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="primary-heading color-dark mr-2">
                        

                         <?=html_entity_decode($truncated = Str::limit($cms_home1->content, 644)) ?>
                        <a href="{{url(about)}}" class="primary-btn">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <div class="about-img ml-2">
                        <figure><img src="{{asset('images/about-1.jpg')}}" class="img-responsive" alt="about-1"></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT-SEC END -->


    <!-- SERVICES-SEC START -->

    <section class="services-sec py-6">
        <div class="container">
            <div class="primary-heading color-dark text-center mb-8 wow zoomIn" data-wow-duration="2s"
                data-wow-delay=".3s">
                <h2 class="heading-img">Realtypix360 <span>Services</span></h1>
            </div>
            <div class="services-slider">
              @foreach($service as $value)
                <div class="services-thumbnail m-2 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
                    <div class="services-img">
                        <img src="{{asset($value->image)}}" class="img-responsive" alt="services-1">
                    </div>
                    <article>
                        <a href="#">
                           <?=html_entity_decode($value->content)?>
                        </a>
                    </article>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>

    <!-- SERVICES-SEC END -->


    <!-- FEATURED-SEC START -->

    <section class="featured-sec">
        <div class="featured-img">
            <img src="{{asset($featured->image)}}" class="img-responsive" alt="featured-bg">
        </div>
        <div class="featured-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 wow zoomIn" data-wow-duration="2s" data-wow-delay=".3s">
                        <div class="primary-heading color-dark">
                          <?=html_entity_decode($featured->content)?>
                            <a href="#" class="primary-btn">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{url($vdo1->url)}}" data-fancyBox="" class="video-btn"><i
                class="fa fa-play"></i> Watch Now</a>
    </section>

    <!-- FEATURED-SEC END -->


    <!-- TESTIMONIAL-SEC START -->

    <section class="testimonial-sec py-8">
        <div class="container">
            <div class="primary-heading color-dark text-center mb-6 wow fadeInDown" data-wow-duration="1.5s"
                data-wow-delay=".3s">
                <h2 class="heading-img">Customer <span>Reviews</span></h1>
            </div>
            <div class="testimonial-slider wow zoomIn" data-wow-duration="2s" data-wow-delay=".6s">
              @foreach($testimonial as $value)
                <div class="testimonial-thumbnail text-center">
                    <div class="row">
                        <div class="col-md-10 col-xs-12 col-center">
                            <figure><img src="{{asset($value->image)}}" alt="testimonial-1"></figure>
                          <?=html_entity_decode($value->comments)?>
                            <h4>{{$value->name}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL-SEC END -->


    <!-- NEXT-PROJECT-SEC START -->

    <section class="next-project">
        <div class="container-fluid">
            <div class="primary-heading color-dark text-center mb-8 wow zoomIn" data-wow-duration="2s"
                data-wow-delay=".3s">
                <h2 class="heading-img">Ready To Start Your <span>Next Project?</span></h1>
            </div>
            <div class="img-container">
                <ul class="list-inline">
                  @foreach($project as $value)
                    <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s"><img
                            src="{{asset($value->image)}}" alt="gallery-1"></li>
                            @endforeach
            
                </ul>
                <a href="#" class="primary-btn">Hire Us</a>
            </div>
        </div>
    </section>

@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection