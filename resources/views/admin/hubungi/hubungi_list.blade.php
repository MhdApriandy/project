@extends('layouts.admin')
@section('content')

<div class="">
    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div id="printableArea">

                <div class="x_panel">
                    <div class="x_title">
                        <h2>Hubungi Kami <a href="{{route('hubungi1.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Buat Hubungi Baru </a></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatables" class="table table-striped table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nomor Telepon</th>
                                    <th>Alamat</th>
                                    <th>Peta (G-Maps)</th>
                                    <th>G-Mail</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Nomor Telepon</th>
                                    <th>Alamat</th>
                                    <th>Peta (G-Maps)</th>
                                    <th>G-Mail</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($hubungi as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->telepon}}</td>
                                    <td>{{$data->alamat}}</td>
                                    <td><a href="{{$data->gps}}" target="_blank">{{$data->gps}}</a></td>
                                    <td><a href="{{$data->gmail}}" target="_blank">{{$data->gmail}}</a></td>
                                    <td>
                                        <a href=" {{ route('hubungi1.edit', ['id' => $data->id]) }} " class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                                        <a href="{{ route('hubungi1.show', ['id' => $data->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop