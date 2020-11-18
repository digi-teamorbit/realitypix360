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

    <section class="p-content hdr-photograph-page py-6">
        <div class="container">
            <div class="primary-heading color-dark mb-2 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".6s">
           <?=html_entity_decode($Hdr->content)?>
            </div>

            <div class="next-project">
                <div class="img-container">
                          <?php $arr=array_chunk($project, 4) ?>
                    @foreach($arr as $array)
                    <ul class="list-inline mb-1">
                            @foreach($array as $value)
                      <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s"><img
                            src="{{asset($value->image)}}" alt="gallery-1"></li>
                           @endforeach
                            </ul>
                             @endforeach
     
                </div>
            </div>
        </div>
    </section>

    <!-- AERIAL-VIEW-SEC END -->

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

@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection
