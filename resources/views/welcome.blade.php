@extends('layout')


@section('content')
    <div class="container">
        <h1 class="text-center">Images</h1>
        <div class="row">

            @foreach($imagesInView as $image)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$image->image}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <a href="/show/{{$image->id}}" class="btn btn-primary">Show</a>
                            <a href="/edit/{{$image->id}}" class="btn btn-warning">Edit</a>
                            <a href="/delete/{{$image->id}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Del</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
