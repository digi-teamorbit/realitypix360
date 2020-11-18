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

    <!-- BANNER-SEC END -->

    <section class="py-6">
        <div class="container">
            <div class="row mb-6">
                <div class="col-md-11 col-xs-12 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="primary-heading color-dark mr-2">
                       <?=html_entity_decode($preparation->content)?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-6 prepar-sec">
        <img class="img-responsive" src="{{asset($heading->image)}}" alt="image" />
        <div class="container">
            <div class="row mb-6">
                <div class="col-md-8 col-xs-12 pull-right wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="primary-heading color-dark mr-2 bg-box">
                       <?=html_entity_decode($heading->content)?>
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

