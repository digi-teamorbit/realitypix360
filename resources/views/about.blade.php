@extends('layouts.main')
@section('content')
    <section class="banner-sec">
        <div class="banner-img">
            <img src="{{asset($innerbanner->image)}}" class="img-responsive" alt="banner-img">
        </div>
        <div class="banner-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-xs-12 pull-right">
                        <div class="wrapper wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s">
                            <div class="primary-heading color-dark">
                               <?=html_entity_decode($innerbanner->description)?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="about-sec py-6">
        <div class="container">
            <div class="row nav-flex mb-6">
                <div class="col-md-6 col-xs-12 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="primary-heading color-dark mr-2">
                      <?=html_entity_decode($cms_home1->content) ?>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <div class="about-img ml-2">
                        <figure><img src="{{asset('images/about-1.jpg')}}" class="img-responsive" alt="about-1"></figure>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="primary-heading color-dark">
                   <?=html_entity_decode($footer_about->content)?>
                    </div>
                </div>
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


