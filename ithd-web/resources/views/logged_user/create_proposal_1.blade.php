@extends('layouts.admin_app')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <h3>Create new proposal:</h3>
        </div>
    </div>
    <div class="row">
        <div class="progress">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="1"
             aria-valuemin="0" aria-valuemax="5" style="width: 12.5%">
                <span class="sr-only">20% Complete</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <form method="post" action="{{ route('submitStep1') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="step" value="1">
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Project Owner:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="projectOwner" value="{{ Session::get('projectOwner')}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Project Name:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="projectName" value="{{ Session::get('projectName')}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Phone:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="phone" value="{{ Session::get('phone')}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Email:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="email" value="{{ Session::get('email')}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Address Line:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="projectAddress" value="{{ Session::get('projectAddress')}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <h3>Project Site Information:</h3>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Builder:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="builder" value="{{ Session::get('builder')}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Design Company:</label>
                    <div class="col-sm-10">
                        In Tech House Design Corporation
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Architectural Style:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="archStyle" value="{{ Session::get('archStyle')}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        General Contractor:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="genContractor" value="{{ Session::get('genContractor')}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Design Stages:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="designStages" value="{{ Session::get('designStages')}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Requirements for variant development:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="revisions" value="{{ Session::get('revisions')}}" revisions>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Data of special construction conditions:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="specialConditions" value="{{ Session::get('specialConditions')}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        General information about the site (location, borders, area):</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="generalInfo" value="{{ Session::get('generalInfo')}}">
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-default">Continue</button>
                    </div>
                </div>
            </form>
        </div>
  </div>

@endsection
