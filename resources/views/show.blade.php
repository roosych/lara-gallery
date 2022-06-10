@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="gallery text-center">
                    <h1>Image</h1>
                    <img src="/{{$imageInView}}" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </div>
@endsection