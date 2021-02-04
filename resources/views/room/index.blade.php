@extends('layouts.app')

@section('sidebar')
@parent
@endsection

@section('content')
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">Data Kamar</li>
</ol>
<h1 class="page-header">Data Kamar</h1>
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
                <h4 class="panel-title">Daftar Data Kamar</h4>
            </div>
            <div class="panel-body">
                <a href="#modal-add" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fas fa-plus-square"></i> <span>Tambah Data</span></a>
                <br><hr>
                <table id="table_room" class="table table-bordered table-hover display nowrap">
                    <thead>
                        <tr>
                            <th style="text-align:center; background:lightgrey;">No</th>
                            <th style="text-align:center; background:lightgrey;">Nomor Kamar</th>
                            <th style="text-align:center; background:lightgrey;">Lokasi</th>
                            <th style="text-align:center; background:lightgrey;">Biaya Per Hari</th>
                            <th style="text-align:center; background:lightgrey;">Biaya Per Bulan</th>
                            <th style="text-align:center; background:lightgrey;">Biaya Per Tahun</th>
                            <th style="text-align:center; background:lightgrey;">Status Kamar</th>
                            <th style="text-align:center; background:lightgrey;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $room)
                        <tr class="table-row" id="">
                            <td width="5%">{{$loop->iteration}}</td>
                            <td>{{$room->no_room}}</td>
                            <td>{{$room->location}}</td>
                            <td>Rp. {{$room->cost_per_day}},-</td>
                            <td>Rp. {{$room->cost_per_month}},-</td>
                            <td>Rp. {{$room->cost_per_year}},-</td>
                            <td style="text-align:center;font-size:14px;"><span class="badge badge-{{($room->occupant_id != null) ? "danger" : "green" }} badge-square">{{($room->occupant_id != null) ? "Sudah Terisi" : "Kosong" }}</span></td>
                            <td style="text-align:center; width:9%;">
                                <a href="/room/{{$room->id}}/edit" class="btn btn-xs btn-primary" title="Ubah Data"><i class="fas fa-edit"></i></a>
                                <a href="/room/{{$room->id}}" class="btn btn-xs btn-yellow" title="Detail Data"><i class="fas fa-bars"></i></a>
                                <a href="/room/{{$room->id}}/delete" class="btn btn-xs btn-danger" title="Hapus Data" onclick="return confirm('Anda yakin ingin menghapus?')"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('room.add')
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