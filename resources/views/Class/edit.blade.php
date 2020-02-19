@extends('app')

@section('content')

    <div class="col-md-6">
        <form action="{{route('class.update',$class->id)}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" class="form-control" name="name" value="{{$class->name}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"> Course</label>
                <select name="course" class="form-control">
                    <option value="{{$class->class_id}}">{{$class->course->name}}</option>
                    @foreach($course as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
