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
                aria-valuemax="5" style="width: 97.5%">
                <span class="sr-only">20% Complete</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" action=" ">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Review provided information and go back if you need to correct anything:</h3>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Project Owner:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('projectOwner')}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Project Name:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('projectName')}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Phone:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('phone')}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Email:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('email')}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <h3>Project Site Information:</h3>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Address Line:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('projectAddress') }}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Builder:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('builder')}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Architectural style:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('archStyle')}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">General Contractor:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('genContractor')}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Design Stages:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('designStages')}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Requirements for variant development:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('revisions')}} revisions</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Data of special construction conditions:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('specialConditions')}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">General information about the site (location, borders, area):</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('generalInfo')}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Main technical and economic indicators:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('indicators')}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Staircase:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('staircase')}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Initial Permissive Documentation:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('permissiveDocs')}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Parking:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('parking')}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Initial Permissive Documentation:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('permissiveDocs')}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Materials:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('materials')}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Security:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('security')}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Architectural and planning:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('planning')}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Structural concepts and materials load bearing bearing and enclosing structures (floors, stairs, lift shafts, partitions, roof):</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('structures')}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-sm-2" for="pwd">Requirements for landscaping and hardscaping:</label>
                    <div class="col-sm-10">
                        <p>{{ Session::get('landscapingReqs')}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <h3>Approximate Dimensions and other files:</h3>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-10">
                    {!! Session::get('projectDimensions') !!}
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-12 text-center">
                        <input type="checkbox" name="agreement" required>
                        <label class="control-label">I agree with the policy..</label>
                    </div>
                </div>

                <div class="form-group row text-center">
                    <div class="col-sm-6" >
                        <a type="submit" href="/step_6" class="btn btn-default">Back</a>
                    </div>
                    <div class="col-sm-6">
                        <a type="submit" href="/create_proposal_finished" class="btn btn-default">Continue</a>
                    </div>
                </div>
            </form>
        </div>
  </div>


@endsection

