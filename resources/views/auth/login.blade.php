@extends('layouts.app')

@section('content')

<div class="card card-login mx-auto mt-5">
    <div class="card-header">Masuk</div>
    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="exampleInputEmail1">Alamat Email</label>
                <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Masukkan Email" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="exampleInputPassword1">Kata Sandi</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Masukkan Kata Sandi" name="password" required>
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary btn-block">
                Masuk
            </button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="{{ route('register')}}">Register an Account</a>
          <a class="d-block small" href="#">Forgot Password?</a>
        </div>
    </div>
</div>

@endsection
