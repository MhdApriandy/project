@extends('layouts.admin')
@section('content')

<div class="">
	<div class="clearfix"></div>

	<div class="row">
		<div class="col-md-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Hapus Visi Misi <a href="{{route('visimisi1.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Kembali </a></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<p>Yakin untuk menghapus <strong>Visi Misi</strong>?</p>

					<form method="POST" action="{{ route('visimisi1.destroy', ['id' => $visimisi->id]) }}">
						<input type="hidden" name="_token" value="{{ Session::token() }}">
						<input name="_method" type="hidden" value="DELETE">
						<button type="submit" class="btn btn-danger">Ya saya yakin. Hapus.</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@stop