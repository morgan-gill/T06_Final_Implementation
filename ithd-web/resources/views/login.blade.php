@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-offset-4">
            <h3>Login:</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-offset-4">
            <form action="/action_page.php">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="email" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <a href="/dashboard" type="submit" class="btn btn-default">Sign in</a>
                <div class="form-group">
                    <label for="pwd">Not registered? Register here:</label>
                    <a href="/registration" type="submit" class="btn btn-default">Register</a>
                </div>
            </form>
        </div>
    </div>
@endsection
