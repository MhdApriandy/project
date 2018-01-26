@extends('layouts.user')
@section('content')

<div class="bg-faded p-2 my-4">
	<hr class="divider">
	<h2 class="text-center my-2">
		<strong>Pendaftaran</strong>
	</h2>
	<hr class="divider">

	<div class="container col-md-8">
		<form class="form-horizontal" method="POST" action="{{ route('pendaftaran.store')}}" enctype="multipart/form-data">
			{{ csrf_field() }}
			
			<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
				<label class="control-label col-sm-4" for="nama">Nama Lengkap </label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="nama" required>
					@if ($errors->has('nama'))
					<span class="help-block">{{ $errors->first('nama') }}</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
				<label class="control-label col-sm-4" for="tempat_lahir">Tempat Lahir </label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="tempat_lahir" required>
					@if ($errors->has('tempat_lahir'))
					<span class="help-block">{{ $errors->first('tempat_lahir') }}</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
				<label class="control-label col-sm-4" for="tanggal_lahir">Tanggal Lahir </label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="tanggal_lahir" required>
					@if ($errors->has('tanggal_lahir'))
					<span class="help-block">{{ $errors->first('tanggal_lahir') }}</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
				<label class="control-label col-sm-4" for="alamat">Alamat </label>
				<div class="col-sm-12">
					<textarea class="form-control" name="alamat" required></textarea>
					@if ($errors->has('alamat'))
					<span class="help-block">{{ $errors->first('alamat') }}</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('asal_sekolah') ? ' has-error' : '' }}">
				<label class="control-label col-sm-4" for="asal_sekolah">Asal Sekolah </label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="asal_sekolah" required>
					@if ($errors->has('asal_sekolah'))
					<span class="help-block">{{ $errors->first('asal_sekolah') }}</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
				<label class="control-label col-sm-4" for="jenis_kelamin">Jenis Kelamin </label>
				<div class="col-sm-12">
					<select name="jenis_kelamin" class="form-control " required>
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
					@if ($errors->has('jenis_kelamin'))
					<span class="help-block">{{ $errors->first('jenis_kelamin') }}</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}">
				<label class="control-label col-sm-4" for="agama">Agama </label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="agama" required>
					@if ($errors->has('agama'))
					<span class="help-block">{{ $errors->first('agama') }}</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
				<label class="control-label col-sm-4" for="status">Status </label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="status" required>
					@if ($errors->has('status'))
					<span class="help-block">{{ $errors->first('status') }}</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('pendidikan') ? ' has-error' : '' }}">
				<label class="control-label col-sm-4" for="pendidikan">Pendidikan Terakhir</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="pendidikan" required>
					@if ($errors->has('pendidikan'))
					<span class="help-block">{{ $errors->first('pendidikan') }}</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('no_ijazah') ? ' has-error' : '' }}">
				<label class="control-label col-sm-4" for="no_ijazah">Nomor Ijazah </label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="no_ijazah" required>
					@if ($errors->has('no_ijazah'))
					<span class="help-block">{{ $errors->first('no_ijazah') }}</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('no_hp') ? ' has-error' : '' }}">
				<label class="control-label col-sm-4" for="no_hp">Nomor HP Peserta </label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="no_hp" required>
					@if ($errors->has('no_hp'))
					<span class="help-block">{{ $errors->first('no_hp') }}</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('ayah') ? ' has-error' : '' }}">
				<label class="control-label col-sm-4" for="ayah">Nama Ayah </label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="ayah" required>
					@if ($errors->has('ayah'))
					<span class="help-block">{{ $errors->first('ayah') }}</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('ibu') ? ' has-error' : '' }}">
				<label class="control-label col-sm-4" for="ibu">Nama Ibu </label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="ibu" required>
					@if ($errors->has('ibu'))
					<span class="help-block">{{ $errors->first('ibu') }}</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('no_hp_ortu') ? ' has-error' : '' }}">
				<label class="control-label col-sm-4" for="no_hp_ortu">Nomor HP Orang Tua </label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="no_hp_ortu" required>
					@if ($errors->has('no_hp_ortu'))
					<span class="help-block">{{ $errors->first('no_hp_ortu') }}</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('paket') ? ' has-error' : '' }}">
				<label class="control-label col-sm-4" for="paket">Paket Pembelajaran </label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="paket" required>
					@if ($errors->has('paket'))
					<span class="help-block">{{ $errors->first('paket') }}</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
				<label class="control-label col-sm-4" for="image">Foto </label>
				<div class="col-sm-12">
					<input type="file" name="image" id="image" value="{{ Request::old('image') ?: '' }}" class="form-control" required/>
					@if ($errors->has('image'))
					<span class="help-block">{{ $errors->first('image') }}</span>
					@endif
					<small>Ukuran maksimal 2MB</small>
				</div>
			</div>

			<div class="text-right">
				<input type="hidden" name="_token" value="{{ Session::token() }}"/>
				<button type="submit" class="btn btn-danger">Daftar </button>
			</div>
		</form>
	</div>
</div>


@stop