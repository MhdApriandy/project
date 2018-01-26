@extends('layouts.user')
@section('content')


<div class="bg-faded p-4 my-4">
	<hr class="divider">
	<h2 class="text-center text-lg text-uppercase my-0">
		<strong>Visi</strong>
	</h2>
	<hr class="divider">
	@foreach($visimisi as $data)
	<p><?php
	$a=$data->visi ;
	$b=substr($a,0);
	echo $b ?></p>
	@endforeach
</div>

<div class="bg-faded p-4 my-4">
	<hr class="divider">
	<h2 class="text-center text-lg text-uppercase my-0">
		<strong>Misi</strong>
	</h2>
	<hr class="divider">
	@foreach($visimisi as $data)
	<p><?php
	$c=$data->misi ;
	$d=substr($c,0);
	echo $d ?></p>
	@endforeach
</div>

@stop