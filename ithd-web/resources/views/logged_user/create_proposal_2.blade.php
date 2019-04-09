@extends('layouts.admin_app')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <h3>Create new proposal:</h3>
        </div>
    </div>
    <div class="row">
        <div class="progress">
    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 25%">
        <span class="sr-only">20% Complete</span>
    </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <form method="post" action="{{ route('submitStep2') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                    <div class="col-lg-4">
                        <h3>Main technical and economic indicators:</h3>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Area:</label>
                    <div class="col-sm-5">Gross Floor Area:
                        <input class="form-control" name="GFA" value="{{ Session::get('GFA')}}">
                    </div>
                    <div class="col-sm-5">Building Area:
                        <input class="form-control" name="buildingArea" value="{{ Session::get('buildingArea')}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="numOfFloors">
                        Quantity of Floors:</label>
                    <div class="col-sm-10">
                        <input id="numOfFloors" class="form-control" name="numOfFloors" value="{{ Session::get('numOfFloors')}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Height:</label>
                        <div class="row" id="floor">
                            <div class="col-sm-5"><span class="floorName">Basement</span>:
                            <input class="form-control" name="" value="{{ Session::get('GF')}}">
                        </div>
                        </div>

                </div>
                <div class="addFloors">

                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Staircase:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="staircase" value="{{ Session::get('staircase')}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Initial permissive documentation:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="permissiveDocs" value="{{ Session::get('permissiveDocs')}}" ???>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Garage:</label>
                    <div class="col-sm-5">Quantity of the parking:
                        <input class="form-control" name="parking" value="{{ Session::get('parking')}}">
                    </div>
                    <div class="col-sm-5">Materials:
                        <input class="form-control" name="garageMaterials" value="{{ Session::get('garageMaterials')}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Security:</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="security"
                        placeholder="The system of video surveillance and intercoms"
                        value="{{ Session::get('security')}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <h3>Provide pictures of homes that you like with your notes:</h3>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-12">
                        <textarea class="form-control" id="summernote" rows="20" name="dimensionDetails">{!! Session::get('projectDimensions') !!}</textarea>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('#summernote').summernote();
                    });
                </script>
                <div class="form-group row text-center">
                    <div class="col-sm-6" >
                        <a href="/step_1" class="btn btn-default">Back</a>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-default">Continue</button>
                    </div>
                </div>
            </form>
        </div>
  </div>
  <script>
$('#numOfFloors').on('change', function() {
    $(".floors").remove();
    for (i = 1; i < parseInt($(this).val())+1; i++) {
        var floor = $("#floor").clone().addClass("floors").removeClass("col-sm-5").addClass("row");
        floor.find(".floorName").text("Floor " + i);
        $(".addFloors").append("<label class='control-label col-sm-2' for='pwd'></label>");
        $(".addFloors").append(floor);
    }
});
  </script>
@endsection

