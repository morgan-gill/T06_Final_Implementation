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
                aria-valuemax="5" style="width: 100%">
                <span class="sr-only">20% Complete</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Thank you!</h2>
        </div>
  </div>
  <div class="row">
        <div class="col-md-12 text-center">
            <h3>Your proposal was successfully submitted. Our project manager will contact you soon.</h3>
            <a href="/downloadPDF" class="btn btn-default">Download Proposal</a>
        </div>
  </div>
  <div class="row">
    <div class="col-sm-12  text-center">
        <a type="submit" href="/dashboard" class="btn btn-default">Go to your dashboard</a>
    </div>
  </div>


@endsection

