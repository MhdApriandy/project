@extends('layouts.app')

@section('content')

<div class="card card-register mx-auto mt-5">
    <div class="card-header">Register an Account</div>
    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="exampleInputName">Name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter your name" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="exampleInputEmail1">Email address</label>
                <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="exampleInputPassword1">Password</label>
                        <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="password" required>
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label for="exampleConfirmPassword">Confirm password</label>
                        <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password" name="password_confirmation" required>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-block">Register</button>
        </form>
        <div class="text-center">
            <a class="d-block small mt-3" href="{{ route('login') }}">Login Page</a>
            <a class="d-block small" href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
    </div>
</div>

@endsection