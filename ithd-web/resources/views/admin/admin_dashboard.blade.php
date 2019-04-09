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
            <h3>Admin Dashboard:</h3>
        </div>
    </div>
                <div class="card" style="width: 18rem;">
  <img class="card-img-top" width="100px" src="https://png.pngtree.com/svg/20170105/9036e5d28b.svg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Users</h5>
    <a href="{{ route('admin.users') }}" class="btn btn-default">Go to users</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" width="100px" src="https://cdn3.iconfinder.com/data/icons/line/36/speech_bubble_question-512.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Inquiries</h5>
    <a href="{{ route('inquiries') }}" class="btn btn-default">Go to inquiries</a>
  </div>
</div>
@endsection
