@extends('layouts.user')
@section('content')

<div class="bg-faded p-4 my-4">
	<hr class="divider">
	<h2 class="text-center text-lg text-uppercase my-0">
		<strong>E-Book</strong>
	</h2>
	<hr class="divider">
	@foreach($ebook as $data)
	<p align="center">{{$data->judul}}  <a href="{{$data->link}}" target="_blank">{{$data->link}}</a></p>
	
	@endforeach
</div>

@stop