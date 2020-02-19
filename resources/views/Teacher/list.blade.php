@extends('app')

@section('content')

        <div class="col-md-10">
            <div class="col-sm-6">
                <a class="btn btn-success" href="{{route('teacher.create')}}">Add Teacher</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Course</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($teacher as $teacher)
                    <tr>
                        <th scope="row">{{$teacher->id}}</th>
                        <td>{{$teacher->name}}</td>
                        <td>{{$teacher->subject->name}}</td>
                       <td>
                           <ul>
                               @foreach($teacher->course as $course)
                                   <li>{{$course->name}}</li>
                               @endforeach
                           </ul>
                       </td>
                        <td>
                            <a class="btn btn-primary" href="{{route('teacher.edit',$teacher->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{route('teacher.destroy',$teacher->id)}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

@endsection

