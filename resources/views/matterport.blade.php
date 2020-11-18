@extends('layouts.main')
@section('content')
    
    <!-- BANNER-SEC START -->

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

    <!-- BANNER-SEC END -->

    <!-- AERIAL-VIEW-SEC START -->

    <section class="google-virtual-page p-content py-6">
        <div class="container">

            <!-- FEATURED-SEC START -->

            <div class="featured-sec m-0 mb-8 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".6s">
                <div class=" featured-img">
                    <img src="{{asset($matterport->image)}}" class="img-responsive" alt="matterport-img">
                    
                </div>
                <a href="{{url($vdo2->url)}}" data-fancyBox=""
                    class="video-btn"><i class="fa fa-play"></i> Watch Now</a>
            </div>

            <!-- FEATURED-SEC END -->

            <div class="primary-heading color-dark mb-2 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
               <?=html_entity_decode($matterport->content)?>
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

