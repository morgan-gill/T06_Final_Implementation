@extends('layouts.admin_app')
@section('content')
@if(Session::has('success'))
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                            <div id="message" class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    </div>
                @endif
    <div class="row " >
        <div class="col-lg-4">
            <h3>My Proposals:</h3>
        </div>
    </div>
    <div class="row">
    @foreach(\App\Project::where('userId', 1)->get() as $project)
        <div class="col-lg-3 text-center">
            <label>Proposal {{ $loop->iteration }}</label>
            <a href="{{ asset('project_'.$project->projectId.'.pdf') }}" target="_blank">
                <img width="100px" src="/pdf_placeholder.png"/>
            </a>
        </div>
        @endforeach
    </div>
<br>
    <div class="row">
    <div class="col-lg-4">
        </div>
        <div class="col-lg-4 text-center">
            <a href="/step_1" class="btn btn-default">Create new proposal</a>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
    <div class="row">
    <div class="col-lg-4">
        </div>
        <div class="col-lg-4 text-center">
            <a href="/contact" type="submit" class="btn btn-default">Having an issue? Send us a message.</a>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
@endsection
