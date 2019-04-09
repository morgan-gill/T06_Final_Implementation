@extends('layouts.admin_app')
@section('content')
    <div class="row " >
        <div class="col-lg-4">
            <h3>Inbox:</h3>
        </div>
    </div>
    <div class="row inbox">
        <div class="col-md-2 inbox">
            <div class="row sender active">
                <h3>John</h3>
            </div>
            <div class="row sender">
                <h3>Jane</h3>
            </div>
        </div>
        <div class="col-md-10">
            <div class="row chat">
            <div class="col-md-12">
                <div class="row message">
                    <p><span>Hello there</span></p>
                </div>
                <div class="row text-right message">
                    <p><span>Hello</span></p>
                </div>
                <div class="row message">
                    <p><span>Make this thing work!</span></p>
                </div>
            </div>

            </div>
            <div class="row message-area">
                <div class="col-md-11 form-group">
                    <textarea class="form-control"></textarea>
                </div>
                <div class="col-md-1 text-right">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                </div>
            </div>
        </div>
    </div>

@endsection
