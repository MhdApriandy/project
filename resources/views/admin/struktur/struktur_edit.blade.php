@extends('layouts.admin')
@section('content')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Sunting Struktur <a href="{{route('struktur1.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Kembali </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="post" action="{{ route('struktur1.update', ['id' => $struktur->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$struktur->nama}}" id="struktur" name="nama" required  class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('nama'))
                                <span class="help-block">{{ $errors->first('nama') }}</span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jabatan">Jabatan<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$struktur->jabatan}}" id="struktur" name="jabatan" required  class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('jabatan'))
                                <span class="help-block">{{ $errors->first('jabatan') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gambar">Gambar<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" value="{{$struktur->image}}" id="gambar" name="image" required  class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('image'))
                                <span class="help-block">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <button type="submit" class="btn btn-success">Perbaharui Struktur</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@stop