@extends ('layouts.user')
@section('content')

<div class="bg-faded p-4 my-4">
	<hr class="divider">
	<h2 class="text-center text-lg text-uppercase my-0">
		<strong>Informasi</strong> Selebihnya
	</h2>
	<hr class="divider">
	<div class="row">
		@foreach($info as $data)
		<p><?php
		$a=$data->description ;
		$b=substr($a,0);
		echo $b ?></p>

		@endforeach
	</div>
</div>

@stop