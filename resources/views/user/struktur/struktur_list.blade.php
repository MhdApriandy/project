@extends('layouts.user')
@section('content')

<div class="bg-faded p-4 my-4">
	<hr class="divider">
	<h2 class="text-center text-lg text-uppercase my-0">
		<strong>Struktur</strong>
	</h2>
	<hr class="divider">
	<div class="row">
	@foreach($struktur as $data)
	<div class="col-lg-4 col-sm-6 text-center mb-4">
		<h3>{{$data->jabatan}}</h3>
		<img class="img-fluid d-block mx-auto" src="{{asset('uploads/'.$data->image)}}" style="border-radius: 10px;">
		<h3>
			<small>{{$data->nama}}</small>
		</h3>
	</div>
	@endforeach
	</div>
</div>

@stop