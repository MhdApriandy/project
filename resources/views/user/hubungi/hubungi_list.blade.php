@extends('layouts.user')
@section('content')

<div class="bg-faded p-2 my-4">
	<hr class="divider">
	<h2 class="text-center my-2">
		<strong>Hubungi</strong> Kami
	</h2>
	<hr class="divider">
@foreach($hubungi as $data)

<table class="table table-responsive" style="margin: 5%;" >
	<tr>
		<td style="width: 10px;">
			<img src="{{asset ('user/img/phone.png')}}" style="width: 10%">&nbsp;
			<span style="font-size: 25px;">{{$data->telepon}}</span>
		</td>
	</tr>
	<tr>
		<td>
			<img src="{{asset('user/img/email.png')}}" style="width: 10%">&nbsp;
			<span style="font-size: 25px;">{{$data->gmail}}</span>
		</td>
	</tr>
	<tr>
		<td>
			<img src="{{asset('user/img/maps.png')}}" style="width: 10%">
			<span style="font-size: 25px;">{{$data->alamat}}</span>
		</td>
	</tr>
	<tr>
		<td>
			<iframe src="{{$data->gps}}" width="90%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</td>
	</tr>
</table>
@endforeach

</div>

@stop