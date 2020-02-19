@extends('app')

@section('content')

        <div class="col-md-10">
            <div class="col-sm-6">
                <a class="btn btn-success" href="{{route('score.create')}}">Add Score</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Score</th>
                    <th scope="col">Class</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($score as $score)
                    <tr>
                        <th scope="row">{{$score->id}}</th>
                        <td>{{$score->student->name}}</td>
                        <td>{{$score->subject->name}}</td>
                        <td>{{$score->score}}</td>
                        <td><a href="">{{$score->student->class->name}}</a></td>

                        <td>
                            <a class="btn btn-primary" href="{{route('score.edit',$score->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{route('score.destroy',$score->id)}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

@endsection

