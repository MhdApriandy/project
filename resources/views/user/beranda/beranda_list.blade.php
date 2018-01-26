@extends ('layouts.user')
@section('content')

<div class="bg-faded p-4 my-4">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<img class="d-block img-fluid w-100" src="{{ asset('user/img/slide-1.jpg')}}" alt="">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid w-100" src="{{ asset('user/img/slide-2.jpg')}}" alt="">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid w-100" src="{{ asset('user/img/slide-3.jpg')}}" alt="">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="text-center mt-4">
		<div class="text-heading text-muted text-lg">Selamat Datang di</div>
		<h1 class="my-2">Website LKP Media Com</h1>
		<div class="text-heading text-muted text-lg">By
			<strong>M. Apriandy</strong>
		</div>
	</div>
</div>

<div class="bg-faded p-2 my-4">
	<hr class="divider">
	<h2 class="text-center my-2">
		<strong>Berita</strong> Terkini
	</h2>
	<hr class="divider">
</div>

@foreach($berita as $data)
<div class="bg-faded p-4 my-4">
	<h2 class="text-center text-lg text-uppercase my-0">
		<strong>{{$data->judul}}</strong>
	</h2>
	<a href="{{asset('uploads/'.$data->image)}}" target="_blank">
		<img class="img-fluid float-left mr-4 d-block" src="{{asset('uploads/'.$data->image)}}" width="25%" height="10%">
	</a>
	<p><?php
	$a=$data->description ;
	$b=substr($a,0);
	echo $b ?></p>
	<div class="text-heading text-muted text-lg">Dipublikasi pada 
		<strong>{{$data->created_at}}</strong>
	</div>
</div>

@endforeach

@stop