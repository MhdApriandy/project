@extends('layouts.admin')
@section('content')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Buat Hubungi <a href="{{route('hubungi1.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Kembali </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="post" action="{{ route('hubungi1.store') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('telepon') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telepon">Nomor Telepon <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Request::old('telepon') ?: '' }}" id="hubungi" name="telepon" required class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('telepon'))
                                <span class="help-block">{{ $errors->first('telepon') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Request::old('alamat') ?: '' }}" id="hubungi" name="alamat" required class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('alamat'))
                                <span class="help-block">{{ $errors->first('alamat') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gps') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gps">Peta (G-Maps) <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Request::old('gps') ?: '' }}" id="hubungi" name="gps" required class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('gps'))
                                <span class="help-block">{{ $errors->first('gps') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gmail') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gmail">G-Mail <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Request::old('gmail') ?: '' }}" id="hubungi" name="gmail" required class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('gmail'))
                                <span class="help-block">{{ $errors->first('gmail') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <button type="submit" class="btn btn-success">Buat Hubungi Kami</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop