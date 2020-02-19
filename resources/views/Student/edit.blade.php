@extends('app')

@section('content')

    <div class="col-md-6">
        <form action="{{route('student.update',$student->id)}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" class="form-control" name="name" value="{{$student->name}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Giới Tính</label>
                <select name="sex" class="form-control" value="{{$student->sex}}">
                    <option value="Nam">Nam</option>
                    <option value="Nu">Nu</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Ngày Sinh</label>
                <input type="text" class="form-control" name="date" value="{{$student->date}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Lớp</label>

                <select name="class" class="form-control">
                    <option value="{{$student->class_id}}">{{$student->class->name}}</option>
                    @foreach($class as $class)
                        <option value="{{$class->id}}">{{$class->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
