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
             aria-valuemin="0" aria-valuemax="5" style="width: 85%">
                <span class="sr-only">20% Complete</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <form method="post" action="{{ route('submitStep6') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="step" value="1">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Engineering communications:</h3>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                    Location of Utility Room:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="utilityRoomLocation" value="{{ Session::get('utilityRoomLocation')}}" placeholder="In accordance with the project of landscape design">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                    Cold water systems:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="coldWaterSystems" value="{{ Session::get('coldWaterSystems')}} Municipal" placeholder="In accordance with the project of landscape design">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                    Systems of hot water supply:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="hotWaterSupply" value="{{ Session::get('hotWaterSupply')}} Hot Water Tank" placeholder="In accordance with the project of landscape design">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2"
                    for="pwd">
                    Furnance:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="furnance" value="{{ Session::get('furnance')}} Hot Water Tank" placeholder="In accordance with the project of landscape design">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                    Sewage:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="sewage" value="{{ Session::get('sewage')}} Municipal" placeholder="In accordance with the project of landscape design">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                    HVAC(??):</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="hvac" value="{{ Session::get('hvac')}} Municipal" placeholder="In accordance with the project of landscape design">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                    Power supply:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="powerSupply" value="{{ Session::get('powerSupply')}} Municipal" placeholder="In accordance with the project of landscape design">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                    Fire alarm:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="fireAlarm" value="{{ Session::get('fireAlarm')}} Municipal" placeholder="In accordance with the project of landscape design">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                    Security supply:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="securitySupply" value="{{ Session::get('securitySupply')}} Municipal" placeholder="In accordance with the project of landscape design">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                    Internet-optic-fiber:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="internetOpticFiber" value="{{ Session::get('internetOpticFiber')}} Municipal" placeholder="In accordance with the project of landscape design">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                    Video surveillance:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="videoSurveillance" value="{{ Session::get('videoSurveillance')}} Municipal" placeholder="In accordance with the project of landscape design">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                    Order of approval and examination:</label>
                    <div class="col-sm-10">
                    The project is coordinated by the Customer
                    with the involvement of the design
                    organization (in the established order).
                     Payment of approvals is made by the Customer.
                    </div>
                </div>
                <div class="form-group row text-center">
                    <div class="col-sm-6" >
                        <a href="/step_5" class="btn btn-default">Back</a>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-default">Continue</button>
                    </div>
                </div>
            </form>
        </div>
  </div>

@endsection
