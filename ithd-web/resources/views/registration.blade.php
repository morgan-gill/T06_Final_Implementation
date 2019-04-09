@extends('layouts.app')
@section('content')
<!-- Container (About Section) -->
<h1>Registration</h1>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8">

        <form>
        <div class="form-group">

                <div class="form-group col-md-6">
                    <label for="inputFirstName">First Name:</label>
                    <input type="text" class="form-control" id="inputFirstName">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLastName">Last Name:</label>
                    <input type="text" class="form-control" id="inputLastName">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputEmail">Email:</label>
                    <input type="email" class="form-control" id="inputEmail">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputPassword">Password:</label>
                    <div class="input-group" id="password_group">
                        <input type="password" class="form-control" id="inputPassword">
                        <div class="input-group-addon">
                            <a href=""><span class="fa fa-eye-slash"></span></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="form-row">
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputDOB">Date of Birth:</label>
                    <div class="input-group date" data-provide="datepicker">
                        <input type="text" class="form-control" id="inputDOB">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputAddress">Address:</label>
                    <input type="text" class="form-control" id="inputAddress">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City:</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPostal">Postal:</label>
                    <input type="text" class="form-control" id="inputPostal">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10">
                    <label for="inputCountry">Country:</label>
                    <input type="text" class="form-control" id="inputCountry">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPhoneNo">Phone Number:</label>
                    <input type="text" class="form-control" id="inputPhoneNo">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <a href="/confirm" type="submit" class="btn btn-default">Submit</a>
                </div>
                <div class="form-group col-md-6">
                    <label for="pwd">Already registered? Login here:</label>
                </div>
                <div class="form-group col-md-3">
                    <a href="/login" type="submit" class="btn btn-default">Sign in</a>
                </div>
            </div>
        </form>
        </div>
        </div>
    </div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">


$( document ).ready(function() {
    //datepicker
    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        startDate: '-3d'
    });
    //show-hide password script
    $('#password_group a').on('click',(event) => {
        event.preventDefault();
        if($('#password_group input').attr('type')=='text'){
            $('#password_group input').attr('type','password');
            $('#password_group span').addClass( "fa-eye-slash" );
            $('#password_group span').removeClass( "fa-eye" );
        }else if($('#password_group input').attr("type") == "password"){
            $('#password_group input').attr('type', 'text');
            $('#password_group span').removeClass( "fa-eye-slash" );
            $('#password_group span').addClass( "fa-eye" );
        }
    })
});
        </script>
