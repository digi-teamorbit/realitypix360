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


    <section class="p-content py-6">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-11 col-xs-12 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="primary-heading color-dark mr-2">
                        <h2 class="heading-img mb-3">Book <span>Services</span></h2>
                       <?=html_entity_decode($book->content)?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <form class="row book-service-form" action="{{route(BookService)}}" method="post">
                        @csrf
                        <div class="form-group col-md-6 col-xs-12">
                            <input name="name" type="text" class="form-control" placeholder="Full Name">
                        </div>

                        <div class="form-group col-md-6 col-xs-12">
                            <input name="email" type="email" class="form-control" placeholder="Email Address">
                        </div>

                        <div class="form-group col-md-6 col-xs-12">
                            <select class="form-control" name="service">
                                <option>Select Service</option>
                                <option>Service</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6 col-xs-12">
                            <input name="date" type="date" class="form-control" placeholder="Select Date">
                        </div>

                        <div class="form-group col-md-12 col-xs-12">
                            <textarea name="comment" rows="6" class="form-control" placeholder="Comment"></textarea>
                        </div>

                        <div class="form-group col-md-12 col-xs-12">
                            <button class="primary-btn">Book Now</button>
                        </div>
                    </form>
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


    
