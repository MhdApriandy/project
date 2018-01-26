@extends('layouts.admin')
@section('content')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Sunting Kata Pengantar <a href="{{route('katapengantar1.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Kembali </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="post" action="{{ route('katapengantar1.update', ['id' => $katapengantar->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('kata') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kata">Kata-Kata<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea name="kata">{{$katapengantar->kata}}</textarea>
                              @if ($errors->has('kata'))
                              <span class="help-block">{{ $errors->first('kata') }}</span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" value="{{$katapengantar->nama}}" id="katapengantar" name="nama" required  class="form-control col-md-7 col-xs-12">
                            @if ($errors->has('nama'))
                            <span class="help-block">{{ $errors->first('nama') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('tempat') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat">Tempat<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" value="{{$katapengantar->tempat}}" id="katapengantar" name="tempat" required  class="form-control col-md-7 col-xs-12">
                            @if ($errors->has('tempat'))
                            <span class="help-block">{{ $errors->first('tempat') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group{{ $errors->has('tanggal') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" value="{{$katapengantar->tanggal}}" id="katapengantar" name="tanggal" required  class="form-control col-md-7 col-xs-12">
                            @if ($errors->has('tanggal'))
                            <span class="help-block">{{ $errors->first('tanggal') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gambar">Gambar<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" value="{{$katapengantar->image}}" id="gambar" name="image" required  class="form-control col-md-7 col-xs-12">
                            @if ($errors->has('image'))
                            <span class="help-block">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="ln_solid"></div>

                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                            <button type="submit" class="btn btn-success">Perbaharui Kata Pengantar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>


@stop