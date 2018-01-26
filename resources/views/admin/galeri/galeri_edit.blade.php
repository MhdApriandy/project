@extends('layouts.admin')
@section('content')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Sunting Galeri <a href="{{route('galeri1.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Kembali </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="post" action="{{ route('galeri1.update', ['id' => $galeri->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="judul">Judul<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$galeri->judul}}" id="galeri" name="judul" required  class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('judul'))
                                <span class="help-block">{{ $errors->first('judul') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="judul">Deskripsi<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea name="description">{{$berita->description}}</textarea>
                              @if ($errors->has('description'))
                              <span class="help-block">{{ $errors->first('description') }}</span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gambar">Gambar<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" value="{{$galeri->image}}" id="gambar" name="image" required  class="form-control col-md-7 col-xs-12">
                            @if ($errors->has('image'))
                            <span class="help-block">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="ln_solid"></div>

                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                            <button type="submit" class="btn btn-success">Perbaharui Galeri</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>


@stop