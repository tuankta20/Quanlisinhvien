@extends('app')

@section('content')

    <div class="col-md-6">
        <form action="{{route('class.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1"> Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1"> Course</label>
                <select name="course" class="form-control">
                    @foreach($course as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
    </div>
@endsection
