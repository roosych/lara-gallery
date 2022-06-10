@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>Edit image</h1>
                <img src="/{{$imageInView->image}}" class="img-fluid" alt="">

                <form action="/update/{{$imageInView->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="file" class="form-control mt-3" name="image">
                    <button type="submit" class="btn btn-warning mt-3">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection