    @extends('app')

@section('content')

    <div class="col-md-10">
        <div class="col-sm-6">
            <a class="btn btn-success" href="{{route('subject.create')}}">Add Subject</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subject as $subject)
                <tr>
                    <th scope="row">{{$subject->id}}</th>
                    <td>{{$subject->name}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('subject.edit',$subject->id)}}">Edit</a>
                        <a class="btn btn-danger" href="{{route('subject.destroy',$subject->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

