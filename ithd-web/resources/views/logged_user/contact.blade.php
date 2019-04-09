@extends('layouts.admin_app')
@section('content')
    <div class="row " >
        <div class="col-lg-4">
            <h3>Send us a message:</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <form method="post" action="{{ route('submitInquiry') }}" enctype="multipart/form-data">
                        {{ csrf_field() }} 
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Message:</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="pwd" name="inquiry" placeholder="Enter your message to us" rows="10"></textarea>
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
