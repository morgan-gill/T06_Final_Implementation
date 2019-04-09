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
             aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                <span class="sr-only">20% Complete</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <form method="post" action="{{ route('submitStep4') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="step" value="1">
                <div class="row">
                    <div class="col-lg-4">
                        <h3>Architectural and planning:</h3>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Facades(Materials and colours):</label>
                        <div class="row">
                            <div class="col-sm-4">Front:
                                <input class="form-control" name="frontFacade"
                                value="{{ Session::get('frontFacade')}}">
                            </div>
                        </div>
                </div>

                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                    </label>
                    <div class="col-sm-4">Rear:
                        <input class="form-control" name="rearFacade" value="{{ Session::get('rearFacade')}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                    </label>
                    <div class="col-sm-4">Sides:
                        <input class="form-control" name="sidesFacade" value="{{ Session::get('sidesFacade')}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Windows:</label>
                        <div class="row">
                            <div class="col-sm-4">Frame:
                            <select class="form-control" id="sel1" name="windowsFrame">
                                <option>Vinyl</option>
                                <option>Aluminium</option>
                                <option>Wooden</option>
                            </select>
                            </div>
                        </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                    </label>
                    <div class="col-sm-4">Colour:
                        <input class="form-control" name="windowsColour" value="{{ Session::get('windowsColour')}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                    </label>
                    <div class="col-sm-4">Glazing:
                        <input class="form-control" name="windowsGlazing" value="{{ Session::get('windowsGlazing')}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                        Doors:</label>
                        <div class="row">
                            <div class="col-sm-4">Entrance Material:
                            <select class="form-control" id="sel1" name="doorsMaterial">
                                <option>Vinyl</option>
                                <option>Aluminium</option>
                                <option>Wooden</option>
                            </select>
                            </div>
                        </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                    </label>
                    <div class="col-sm-4">Colour:
                        <input class="form-control" name="doorsColour" value="{{ Session::get('doorsColour')}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                            Walls Material:</label>
                        <div class="row">
                            <div class="col-sm-4">
                            <select class="form-control" id="sel1" name="wallsMaterial">
                                <option>Vinyl</option>
                                <option>Aluminium</option>
                                <option>Wooden</option>
                            </select>
                            </div>
                        </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">
                            Deck:</label>
                        <div class="row">
                            <div class="col-sm-4">
                            <select class="form-control" id="sel1" name="deckMaterial">
                                <option>Vinyl</option>
                                <option>Aluminium</option>
                                <option>Wooden</option>
                            </select>
                            </div>
                        </div>
                </div>
                <div class="form-group row text-center">
                    <div class="col-sm-6" >
                        <a href="/step_3" class="btn btn-default">Back</a>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-default">Continue</button>
                    </div>
                </div>
            </form>
        </div>
  </div>

@endsection
