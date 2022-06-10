@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h1>Add image</h1>
            <form action="/store" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="file" class="form-control" name="image">
                <button type="submit" class="btn btn-success mt-3">Add</button>
            </form>
        </div>
    </div>
</div>
@endsection