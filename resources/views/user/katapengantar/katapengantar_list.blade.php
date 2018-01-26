@extends ('layouts.user')
@section('content')



<div class="bg-faded p-4 my-4">
	<hr class="divider">
	<h2 class="text-center text-lg text-uppercase my-0">Kata 
		<strong>Pengantar</strong>
	</h2>
	<hr class="divider">

	@foreach($katapengantar as $data)
	<a href="{{asset('uploads/'.$data->image)}}"><img src="{{asset('uploads/'.$data->image)}}" class="img-fluid float-right mr-4 d-block" width="200px" height="100px"></a>
	<p><?php
	$a=$data->kata ;
	$b=substr($a,0);
	echo $b ?></p>
	<p>{{$data->nama}}</p>
	<p>{{$data->tempat}}, {{$data->tanggal}}</p>
	@endforeach
</div>

@stop