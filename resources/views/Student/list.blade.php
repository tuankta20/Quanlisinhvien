@extends('app')

@section('content')

        <div class="col-md-10">
            <div class="col-sm-6">
                <a class="btn btn-success" href="{{route('student.create')}}">Add Student</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Sex</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Class</th>
                    <th scope="col">Course</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <th scope="row">{{$student->id}}</th>
                        <td>{{$student->name}}</td>
                        <td>{{$student->sex}}</td>
                        <td>{{$student->date}}</td>
                        <td>{{$student->class?$student->class->name:'errrors'}}</td>
                        <td>{{$student->class?$student->class->course->name:'errrors'}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('student.edit',$student->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{route('student.destroy',$student->id)}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
@endsection

