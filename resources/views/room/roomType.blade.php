@extends('layouts.app')

@section('sidebar')
@parent
@endsection

@section('content')
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">Tipe Kamar</li>
</ol>
<h1 class="page-header">Tipe Kamar</h1>
<style>
    tfoot input {
    width: 90%;
    padding: 2px;
    box-sizing: border-box;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
                <h4 class="panel-title">Daftar Tipe Kamar</h4>
            </div>
            <div class="panel-body">
                <a href="#modal-add" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fas fa-plus-square"></i> <span>Tambah Data</span></a>
                @include('room.roomType_add')
                <br><hr>
                <table id="table_room" class="table table-bordered table-hover display nowrap">
                    <thead>
                        <tr>
                            <th style="text-align:center; background:lightgrey;">No</th>
                            <th style="text-align:center; background:lightgrey;">Nama Tipe</th>
                            <th style="text-align:center; background:lightgrey;">Ukuran Tempat Tidur</th>
                            <th style="text-align:center; background:lightgrey;">Meja Belajar</th>
                            <th style="text-align:center; background:lightgrey;">Almari</th>
                            <th style="text-align:center; background:lightgrey;">AC</th>
                            <th style="text-align:center; background:lightgrey;">Telp Kamar</th>
                            <th style="text-align:center; background:lightgrey;">Wi-Fi</th>
                            <th style="text-align:center; background:lightgrey;">Kamar Mandi Dalam</th>
                            <th style="text-align:center; background:lightgrey;">Water Heater</th>
                            <th style="text-align:center; background:lightgrey;">Privat Balkon</th>
                            <th style="text-align:center; background:lightgrey;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roomtypes as $roomtype)
                        <tr class="table-row" id="">
                            <td width="5%">{{$loop->iteration}}</td>
                            <td>{{$roomtype->type_name}}</td>
                            <td>{{$roomtype->size_bed}}</td>
                            <td>{{$roomtype->desk}}</td>
                            <td>{{$roomtype->wardrobe}}</td>
                            <td>{{$roomtype->air_conditioner}}</td>
                            <td>{{$roomtype->line_telp}}</td>
                            <td>{{$roomtype->wifi}}</td>
                            <td>{{$roomtype->bathroom}}</td>
                            <td>{{$roomtype->water_heater}}</td>
                            <td>{{$roomtype->private_balkon}}</td>
                            <td style="text-align:center; width:9%;">
                                <a href="#modal-edit-{{$roomtype->id}}" data-toggle="modal" class="btn btn-xs btn-primary" title="Edit Data"><i class="fas fa-edit"></i></a>
                                <a href="/room-type/{{$roomtype->id}}/delete" class="btn btn-xs btn-danger" title="Hapus Data" onclick="return confirm('Anda yakin ingin menghapus?')"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @include('room.roomType_edit')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@parent
<script>
	$(document).ready(function() {
		$('#table_room').DataTable({
		    'serverside'  : false,
		    'scrollX'     : true,
		    'paging'      : true,
		    'lengthChange': true,
		    'searching'   : true,
		    'ordering'    : true,
		    'info'        : true,
		    'autoWidth'   : false
		});
	});
</script>
@endsection