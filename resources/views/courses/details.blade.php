@extends('layouts.app')
@section('content')

<section class="container">

    <div class="card w-50 mx-auto">
        <div class="card-header">

        <h3 class="card-title">{{$course->title}}</h3>

        </div>

        <div class="card-body">

            <img src="{{$course->image}}" alt="">
            <p>{{$course->description}}</p>

        </div>

        <div class="card-footer">

            <a href="/courses">Home Page</a>

        </div>
    </div>

</section>

@endsection