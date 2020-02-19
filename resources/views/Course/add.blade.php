@extends('app')

@section('content')

    <div class="col-md-6">
        <form action="{{route('course.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1"> Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
    </div>
@endsection
