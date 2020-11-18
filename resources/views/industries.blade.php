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

    <section class="google-virtual-page py-6">
        <div class="container">

            <div class="primary-heading color-dark mb-4 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".6s">
                <?=html_entity_decode($industries->content)?>
            </div>

            <div class="row">
               @foreach($service as $value)

                <div class="col-md-4 col-xs-12">
                    <div class="services-thumbnail mb-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <div class="services-img">
                            <img src="{{asset($value->image)}}" class="img-responsive" alt="services-4">
                        </div>
                        <article>
                            <a href="#">
                          <?=html_entity_decode($value->content)?>
                            </a>
                        </article>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-md-4 col-xs-12">
                    <div class="services-thumbnail mb-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <div class="services-img">
                            <img src="images/services-5.jpg" class="img-responsive" alt="services-5">
                        </div>
                        <article>
                            <a href="#">
                                <h3 class="mb-3">MATTERPORT TRUE3D & <span>360º PHOTOGRAPHY</span></h3>
                                <p>Matterport True3D virtual tours start at $150 and are the gold standard for the 360º
                                    3D
                                    industry and are VR goggle ready. </p>
                            </a>
                        </article>
                    </div>
                </div> -->
                <!-- <div class="col-md-4 col-xs-12">
                    <div class="services-thumbnail mb-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">
                        <div class="services-img">
                            <img src="images/services-6.jpg" class="img-responsive" alt="services-6">
                        </div>
                        <article>
                            <a href="#">
                                <h3 class="mb-3">MATTERPORT TRUE3D & <span>360º PHOTOGRAPHY</span></h3>
                                <p>Matterport True3D virtual tours start at $150 and are the gold standard for the 360º
                                    3D
                                    industry and are VR goggle ready. </p>
                            </a>
                        </article>
                    </div>
                </div> -->
                <!-- <div class="col-md-4 col-xs-12">
                    <div class="services-thumbnail mb-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <div class="services-img">
                            <img src="images/services-4.jpg" class="img-responsive" alt="services-4">
                        </div>
                        <article>
                            <a href="#">
                                <h3 class="mb-3">MATTERPORT TRUE3D & <span>360º PHOTOGRAPHY</span></h3>
                                <p>Matterport True3D virtual tours start at $150 and are the gold standard for the 360º
                                    3D
                                    industry and are VR goggle ready. </p>
                            </a>
                        </article>
                    </div>
                </div> -->
                <!-- <div class="col-md-4 col-xs-12">
                    <div class="services-thumbnail mb-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <div class="services-img">
                            <img src="images/services-5.jpg" class="img-responsive" alt="services-5">
                        </div>
                        <article>
                            <a href="#">
                                <h3 class="mb-3">MATTERPORT TRUE3D & <span>360º PHOTOGRAPHY</span></h3>
                                <p>Matterport True3D virtual tours start at $150 and are the gold standard for the 360º
                                    3D
                                    industry and are VR goggle ready. </p>
                            </a>
                        </article>
                    </div>
                </div> -->
                <!-- <div class="col-md-4 col-xs-12">
                    <div class="services-thumbnail mb-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">
                        <div class="services-img">
                            <img src="images/services-6.jpg" class="img-responsive" alt="services-6">
                        </div>
                        <article>
                            <a href="#">
                                <h3 class="mb-3">MATTERPORT TRUE3D & <span>360º PHOTOGRAPHY</span></h3>
                                <p>Matterport True3D virtual tours start at $150 and are the gold standard for the 360º
                                    3D
                                    industry and are VR goggle ready. </p>
                            </a>
                        </article>
                    </div>
                </div> -->
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