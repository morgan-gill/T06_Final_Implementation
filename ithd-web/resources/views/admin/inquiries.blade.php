@extends('layouts.admin_app')
@section('content')
    <div class="row " >
        <div class="col-lg-4">
            <h3>Inquiries:</h3>
        </div>
    </div>
    <div class="row " >
        <div class="col-lg-4">
            <h4>In progress/New:</h4>
        </div>
    </div>
    <div class="row">
    <table class="table table-striped">
    <thead>
      <tr>
        <th></th>
        <th>User ID</th>
        <th>Message</th>
        <th>Sent at</th>
        <th>Mark as solved</th>
      </tr>
    </thead>
    <tbody>
    @foreach(\App\Inquiry::orderBy('created_at', 'DESC')->where('solved', 0)->get() as $inquiry)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td><a href="{{ asset('user/'.$inquiry->userId) }}">{{ $inquiry->userId }}</a> </td>
        <td>{{ $inquiry->inquiry }}</td>
        <td>{{ $inquiry->created_at }}</td>
        <td><form action="/inquiries/{{ $inquiry->id }}/complete" method="POST" class="form-inline">
				{{ csrf_field() }}
				{{ method_field('PATCH') }}
				<div class="form-group">
					<button type="submit" class="btn">
						<i class="fa {{ $inquiry->solved?'fa-check solved':'fa-check' }} " aria-hidden="true"></i>
					</button>
				</div>
			</form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  <div class="row " >
        <div class="col-lg-4">
            <h4>Solved:</h4>
        </div>
    </div>
    <div class="row">
    <table class="table table-striped">
    <thead>
      <tr>
        <th></th>
        <th>User ID</th>
        <th>Message</th>
        <th>Sent at</th>
        <th>Mark as solved</th>
      </tr>
    </thead>
    <tbody>
    @foreach(\App\Inquiry::orderBy('created_at', 'DESC')->where('solved', 1)->get() as $inquiry)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td><a href="{{ asset('user/'.$inquiry->userId) }}">{{ $inquiry->userId }}</a> </td>
        <td>{{ $inquiry->inquiry }}</td>
        <td>{{ $inquiry->created_at }}</td>
        <td><form action="/inquiries/{{ $inquiry->id }}/complete" method="POST" class="form-inline">
				{{ csrf_field() }}
				{{ method_field('PATCH') }}
				<div class="form-group">
					<button type="submit" class="btn">
						<i class="fa {{ $inquiry->solved?'fa-check solved':'fa-check' }} " aria-hidden="true"></i>
					</button>
				</div>
			</form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
