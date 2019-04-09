@extends('layouts.admin_app')
@section('content')
    <div class="row " >
        <div class="col-lg-4">
            <h3>Send user a warning:</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal" action="/dashboard">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Subject:</label>
    <div class="col-sm-10">
    <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">JavaScript</a></li>
  </ul>
</div>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Message:</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="pwd" placeholder="Enter your message to us" rows="10"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="file" class="btn btn-default">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
        </div>
    </div>

@endsection
