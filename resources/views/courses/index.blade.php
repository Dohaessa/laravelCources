@extends('layouts.app')
@section('content')

<section class="container">
    <table class="table table-bordered table-striped w-75 mx-auto">

        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Display</td>
            <td>Status</td>
            <td>Edit</td>
            <td>Delete</td>
      
        </tr>

        @foreach ($courses as $course)

        <tr>
            <td>{{$course->id}}</td>
            <td class="">{{$course->title}}
            <span class="float-right badge-warning">{{boolval($course->completed)?'Completed':'Not Completed'}}</span>
                </td>
            <td class="text-center"><a href="{{ route('courses.show', ['id'=>$course->id]) }}"><i class="fa fa-eye text-primary"></i></a></td>
            <td class="text-center"><a href="#"><i class="fa fa-check text-success "></i></a></td>
            <td class="text-center"><a href="#"><i class="fa fa-edit text-secondary "></i></a></td>
            <td class="text-center"><a href="#"><i class="fa fa-trash text-danger "></i></a></td>
            
        </tr> 
            
        @endforeach

       
     
       

    </table>

<div class="w-25 mx-auto">{{ $courses->links() }}</div>

</section>
    
@endsection
    
