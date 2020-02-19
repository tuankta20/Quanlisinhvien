@extends('app')

@section('content')

    <div class="col-md-6">
        <form action="{{route('score.update',$score->id)}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Score</label>
                <input type="number" class="form-control" name="score" value="{{$score->score}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Student</label>
                <select name="student" class="form-control">
                    @foreach($student as $student)
                        <option value="{{$student->id}}">{{$student->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Subject</label>
                <select name="subject" class="form-control">
                    @foreach($subject as $subject)
                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
