@extends('layouts.admin_app')
@section('content')
    <div class="row " >
        <div class="col-lg-4">
            <h3>Create new proposal:</h3>
        </div>
    </div>
    <div class="row">
        <div class="progress">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="2" aria-valuemin="0"
                aria-valuemax="5" style="width: 47.5%">
                <span class="sr-only">20% Complete</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('submitStep3') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-4">
                        <h3>Upload Files:</h3>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-4 text-center">
                        <label>File 1</label>
                        <img width="300px" src="https://hlfppt.org/wp-content/uploads/2017/04/placeholder.png"/>
                    </div>
                    <div class="col-lg-4 text-center">
                        <label>File 2</label>
                        <img width="300px" src="https://hlfppt.org/wp-content/uploads/2017/04/placeholder.png"/>
                    </div>
                    <div class="col-lg-4 text-center">
                        <label>File 3</label>
                        <img width="300px" src="https://hlfppt.org/wp-content/uploads/2017/04/placeholder.png"/>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Add files:</label>
                    <div class="col-sm-10">
                        <input type="file" name="files[]" class="form-control">
                    </div>
                </div>
                <div class="form-group row text-center">
                    <div class="col-sm-6" >
                        <a type="submit" href="/step_2" class="btn btn-default">Back</a>
                    </div>
                    <div class="col-sm-6">
                    <button type="submit" class="btn btn-default">Continue</button>
                    </div>
                </div>
            </form>
        </div>
  </div>


@endsection

