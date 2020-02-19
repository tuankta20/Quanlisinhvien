@extends('app')

@section('content')

    <div class="col-md-10">
        <div class="col-sm-6">
            <a class="btn btn-success" href="{{route('course.create')}}">Add Course</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($course as $course)
                <tr>
                    <th scope="row">{{$course->id}}</th>
                    <td>{{$course->name}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('course.edit',$course->id)}}">Edit</a>
                        <a class="btn btn-danger" href="{{route('course.destroy',$course->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

