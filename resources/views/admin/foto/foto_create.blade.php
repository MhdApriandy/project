@extends('layouts.admin')
@section('content')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tambahkan Foto <a href="{{route('foto1.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Kembali </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="post" action="{{ route('foto1.store') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto">Gambar <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" value="{{ Request::old('foto') ?: '' }}" id="foto" name="foto" required  class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('foto'))
                                <span class="help-block">{{ $errors->first('foto') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('id_galeri') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_galeri">Kategori Galeri<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="id_galeri" value="{{ Request::old('id_galeri') ?: '' }}" id="id_galeri" class="form-control col-md-7 col-xs-12">
                                   @foreach($galeri as $data)
                                    <option value="{{$data->id}}">{{$data->judul}}--{{$data->id}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('id_galeri'))
                                <span class="help-block">{{ $errors->first('id_galeri') }}</span>
                                @endif
                            </div>
                        </div>  

                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <button type="submit" class="btn btn-success">Tambahkan foto</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop