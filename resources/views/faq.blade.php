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


    <section class="faq-page py-6">
        <div class="container">
            <div class="row">
                <div class="col-md-11 col-xs-12 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="primary-heading color-dark mr-2">
                      <?=html_entity_decode($cms_faq->content)?>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="col-md-12 col-sm-12">
                    <div aria-multiselectable="true" class="panel-group" id="accordion" role="tablist">
                        @foreach($faq as $key=>$value)
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingOne" role="tab">
                                <h4 class="panel-title"><a aria-controls="collapseOne{{$key}}" aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseOne{{$key}}" role="button">{{$value->name}}</a></h4>
                            </div>
                            <div aria-expanded="true" aria-labelledby="headingOne" class="panel-collapse collapse" id="collapseOne{{$key}}" role="tabpanel">
                                <div class="panel-body">
                                    <?=html_entity_decode($value->content)?>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
