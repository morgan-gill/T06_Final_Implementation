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
            <h3>Users:</h3>
        </div>
    </div>

    <div class="row">
    <table class="table table-striped">
    <thead>
      <tr>
        <th></th>
        <th>Name</th>
        <th>Email</th>
        <th>Created at</th>
        <th>Profile</th>
      </tr>
    </thead>
    <tbody>
    @foreach(\App\User::all() as $user)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at }}</td>
        <td><a href="{{ asset('user/'.$user->id) }}"><span class="glyphicon glyphicon-chevron-right"></span></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
