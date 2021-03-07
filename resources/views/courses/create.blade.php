@extends('layouts.app')
@section('content')

<section class="container py-5">

    <div class="card w-50 mx-auto text-center">
        <div class="card-body">
        <form action="/store" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">

                <input type="text" class="form-control" placeholder="enter Title" name="txtTitle">
            </div>

            <div class="form-group">

                <textarea  class="form-control" placeholder="enter description" name="txtDescription"></textarea>
            </div>

            <div class="form-group">

                <input type="file" class="form-control form-control-file" placeholder="enter Image" name="fimage">
            </div>

            <div class="form-group">

                <input type="submit" class="btn btn-block btn-primary" value="Add New Post" name="">
            </div>

        </form>

        </div>
    </div>


</section>

@endsection