@extends('layouts.admin')

@section('content')

<div class="alert alert-success">
    Selamat Datang di Admin Panel, <strong>{{ Auth::user()->name }}</strong>!
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
</div>

@endsection
