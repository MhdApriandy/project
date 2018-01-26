@extends('layouts.admin')
@section('content')

<div class="bg-faded p-2 my-4">
    <hr class="divider">
    <h2 class="text-center my-2">
        <strong>Pendaftaran</strong>
    </h2>
    <hr class="divider">

    <div class="container col-md-8">
        {{ csrf_field() }}
        @foreach($pendaftaran as $data)

        <div class="form-group">
            <label class="control-label col-sm-4" for="nama">Nama Lengkap </label>
            <div class="col-sm-12">
                {{$data->nama}}
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-4" for="tempat_lahir">Tempat Lahir </label>
            <div class="col-sm-12">
                {{$data->tempat_lahir}}
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-4" for="tanggal_lahir">Tanggal Lahir </label>
            <div class="col-sm-12">
                {{$data->tanggal_lahir}}
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-4" for="alamat">Alamat </label>
            <div class="col-sm-12">
                {{$data->alamat}}
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-4" for="asal_sekolah">Asal Sekolah </label>
            <div class="col-sm-12">
                {{$data->asal_sekolah}}
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-4" for="jenis_kelamin">Jenis Kelamin </label>
            <div class="col-sm-12">
                {{$data->jenis_kelamin}}
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-4" for="agama">Agama </label>
            <div class="col-sm-12">
                {{$data->agama}}
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-4" for="status">Status </label>
            <div class="col-sm-12">
                {{$data->status}}
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-4" for="pendidikan">Pendidikan Terakhir </label>
            <div class="col-sm-12">
                {{$data->pendidikan}}
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-4" for="no_ijazah">Nomor Ijazah </label>
            <div class="col-sm-12">
                {{$data->no_ijazah}}
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-4" for="no_hp_peserta">Nomor HP Peserta </label>
            <div class="col-sm-12">
                {{$data->no_hp_peserta}}
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-4" for="ayah">Nama Ayah </label>
            <div class="col-sm-12">
                {{$data->ayah}}
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-4" for="ibu">Nama Ibu </label>
            <div class="col-sm-12">
                {{$data->ibu}}
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-4" for="no_hp_ortu">Nomor HP Orang Tua </label>
            <div class="col-sm-12">
                {{$data->no_hp_ortu}}
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-4" for="foto">Foto </label>
            <div class="col-sm-12">
                <img src="{{asset('uploads/pendaftaran/'.$data->image)}}" width="120px" height="150px">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-4" for="paket">Paket Pembelajaran </label>
            <div class="col-sm-12">
                {{$data->paket}}
            </div>
        </div>
        @endforeach
    </div>
</div>


@stop