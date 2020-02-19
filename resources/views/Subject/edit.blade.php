@extends('app')

@section('content')

    <div class="col-md-6">
        <form action="{{route('subject.update',$subject->id)}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" class="form-control" name="name" value="{{$subject->name}}">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
