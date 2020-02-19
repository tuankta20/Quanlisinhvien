@extends('app')

@section('content')

        <div class="col-md-10">
            <div class="col-sm-6">
                <a class="btn btn-success" href="{{route('class.create')}}">Add Class</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Course</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($class as $class)
                    <tr>
                        <th scope="row">{{$class->id}}</th>
                        <td>{{$class->name}}</td>
                        <td>{{$class->course->name}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('class.edit',$class->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{route('class.destroy',$class->id)}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

@endsection

