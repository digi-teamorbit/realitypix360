@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-white mt-5">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Bookservice {{ $bookservice->id }}</h3>
                    
                        <a class="btn btn-success pull-right" href="{{ url('/admin/bookservice') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $bookservice->id }}</td>
                            </tr>
                            <tr><th> Name </th><td> {{ $bookservice->name }} </td></tr><tr><th> Email </th><td> {{ $bookservice->email }} </td></tr><tr><th> Service </th><td> {{ $bookservice->service }} </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.admin.footer')
</div>
@endsection

