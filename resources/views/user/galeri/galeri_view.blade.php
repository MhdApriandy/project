@extends('layouts.user')
@section('content')

<div class="bg-faded p-4 my-4">
	<div class="row">
		<?php $b=0; ?>
		@foreach($foto as $data)
		<?php $b=$b+1; ?>
		<div class="col-lg-3 col-md-4 col-xs-6">
			<a href="{{asset('uploads/galeri/'.$data->foto)}}" class="d-block mb-4 h-100">
				<img class="img-fluid img-thumbnail" src="{{asset('uploads/galeri/'.$data->foto)}}" alt="">
			</a>
		</div>
		@endforeach
	</div>
</div>

@stop