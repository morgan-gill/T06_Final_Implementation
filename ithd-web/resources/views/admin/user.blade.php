@extends('layouts.admin_app')
@section('content')
    <div class="row " >
        <div class="col-lg-4">
            <h3>{{ $user->name }}</h3>
        </div>
    </div>

    <div class="row">
    @foreach(\App\Project::where('userId', $user->id)->get() as $project)
        <div class="col-lg-3 text-center">
            <div class="row">
                <label>Proposal {{ $loop->iteration }}</label>
            </div>
            <div class="row">
                <a href="{{ asset('project_'.$project->projectId.'.pdf') }}" target="_blank">
                    <img width="100px" src="/pdf_placeholder.png"/>
                </a>
            </div>

        </div>
        @endforeach
    </div>
    <div class="row " >
        <div class="col-lg-4">
            <h3>User info:</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <label>UserID:</label>
            <p>{{ $user->id }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <label>User Phone #:</label>
            <p>454543333354(not from db)</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <label>User Email:</label>
                <p>{{ $user->email }}</p>
            </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <a href="/send_warning" class="btn btn-default">Send a warning</a>
        </div>
        <form method="post" action="{{ route('user.delete', ['id' => $user->id]) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
        <div class="col-lg-4 text-center">
            <button type="submit" id="delete" class="btn btn-default">Delete user</button>
        </div>
        </form>
        <script>
            $( document ).ready(function() {
                $('#delete').click(function(){
                    alert("are you sure you want to delete that user?");
                })
            });
        </script>
        <div class="col-lg-4 text-center">
            <a href="/users" class="btn btn-default">Back to the user list</a>
        </div>
    </div>

@endsection
