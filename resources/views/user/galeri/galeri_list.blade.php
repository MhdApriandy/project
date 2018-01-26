@extends('layouts.user')
@section('content')

<div class="bg-faded p-4 my-4">
	<hr class="divider">
	<h2 class="text-center my-2">
		<strong>Galeri</strong>
	</h2>
	<hr class="divider">
	<div class="row">
		@foreach($galeri as $data)
		<div class="col-lg-4 col-sm-6 text-center mb-4">
			<h3>{{$data->judul}}</h3>
			<a href="{{ route('galeri.show', ['id' => $data->id]) }}"><img src="{{asset('uploads/galeri/'.$data->image)}}" width="100%" height="65%"></a>
			<p></p>
			<div class="text-heading text-muted text-lg">
				<strong><?php
				$a=$data->description ;
				$b=substr($a,0);
				echo $b ?></strong> 
				<small>{{$data->created_at}}</small>
			</div>
		</div>
		@endforeach
	</div>
</div>
@stop