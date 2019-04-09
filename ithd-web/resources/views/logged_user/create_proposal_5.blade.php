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
             aria-valuemin="0" aria-valuemax="5" style="width: 72.5%">
                <span class="sr-only">20% Complete</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <form method="post" action="{{ route('submitStep5') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="step" value="1">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Structural concepts and materials
                            load bearing bearing and enclosing
                            structures (floors, stairs, lift shafts, partitions, roof).:</h3>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Foundations:</label>
                        <div class="row">
                            <div class="col-sm-4">Footing:
                                <input class="form-control" name="footing"
                                value="{{ Session::get('footing')}} Monolithic reinforced concrete tape" >
                            </div>
                        </div>
                </div>

                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                            Wall:</label>
                        <div class="row" id="materials">
                            <div class="col-sm-4"> <span class="floorName">Basement</span>:
                            <select class="form-control" name="?????">
                                <option>Concrete Block</option>
                                <option>Pureed Concrete</option>
                                <option>Brick</option>
                            </select>
                            </div>
                        </div>
                        <div class="addFloors">

                        </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Exterior walls of the basement:</label>
                        <div class="row">
                            <div class="col-sm-4">
                            <select class="form-control" id="sel1" name="exteriorWalls[]">
                                <option>Concrete Block</option>
                                <option>Pureed Concrete</option>
                                <option>Brick</option>
                            </select>
                            </div>
                        </div>
                        <div class="addFloors">

                        </div>
                </div>

                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                    Supporting structures:</label>
                        <div class="row">
                            <div class="col-sm-4">External Walls:
                                <input class="form-control" name="supportingStructures"
                                value="{{ Session::get('supportingStructures')}} Monolithic reinforced concrete tape" >
                            </div>
                        </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Walls Material:</label>
                        <div class="row" id="materials_2">
                            <div class="col-sm-4"><span class="floorName">Basement</span>:
                            <select class="form-control" id="sel1" name="doorsMaterial">
                                <option>Vinyl</option>
                                <option>Aluminium</option>
                                <option>Wooden</option>
                            </select>
                            </div>
                        </div>
                        <div class="addFloors_2">

                        </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Floor Material:</label>
                        <div class="row">
                            <div class="col-sm-4">Basement:
                            <select class="form-control" id="sel1" name="floorsMaterial">
                                <option>Vinyl</option>
                                <option>Aluminium</option>
                                <option>Wooden</option>
                            </select>
                            </div>
                        </div>
                        <div class="addFloors_2">

                        </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Stairs Material:</label>
                        <div class="row">
                            <div class="col-sm-4">Basement:
                            <select class="form-control" id="sel1" name="stairsMaterial">
                                <option>Vinyl</option>
                                <option>Aluminium</option>
                                <option>Wooden</option>
                            </select>
                            </div>
                        </div>
                        <div class="addFloors_2">

                        </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Roof Material:</label>
                        <div class="row">
                            <div class="col-sm-4">Basement:
                            <select class="form-control" id="sel1" name="roofMaterial">
                                <option>Vinyl</option>
                                <option>Aluminium</option>
                                <option>Wooden</option>
                            </select>
                            </div>
                        </div>
                        <div class="addFloors_2">

                        </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                    Specification of standards & materials:</label>
                        <div class="row">
                            <div class="col-sm-4">ALL CONSTRUCTION TO CONFORM TO ONTARIO BUILDING CODE 2012. CONTRACTOR TO CHECK AND VERIFY ALL DIMENSIONS AND REPORT ANY DISCREPANCY PRIOR TO PROCEEDING WITH THE WORK.
LUMBER IS #2 GRADE SPRUCE, UNLESS NOTED OTHERWISE.
                            </div>
                        </div>
                </div>
                <div class="form-group row text-center">
                    <div class="col-sm-6" >
                        <a href="/step_4" class="btn btn-default">Back</a>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-default">Continue</button>
                    </div>
                </div>
            </form>
        </div>
  </div>
  <script>
var numOfFloors = "{{ Session::get('numOfFloors')}}";
console.log(numOfFloors);

    for (i = 1; i < parseInt(numOfFloors)+1; i++) {
        console.log($("#materials").clone());
        var floor = $("#materials").clone().addClass("floors").removeClass("col-sm-5").addClass("row");
        var floor_2 = $("#materials_2").clone().addClass("floors").removeClass("col-sm-5").addClass("row");

        floor.find(".floorName").text("Floor " + i);
        floor_2.find(".floorName").text("Floor " + i);
        $(".addFloors, .addFloors_2").append("<label class='control-label col-sm-2' for='pwd'></label>");
        $(".addFloors").append(floor);
        $(".addFloors_2").append(floor_2);
    }

  </script>
@endsection
