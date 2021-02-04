@extends('layouts.app')

@section('sidebar')
@parent
@endsection

@section('content')
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">Fasilitas Tambahan</li>
</ol>
<h1 class="page-header">Fasilitas Tambahan</h1>
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
                <h4 class="panel-title">Daftar Fasilitas Tambahan</h4>
            </div>
            <div class="panel-body">
                <a href="#modal-add" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fas fa-plus-square"></i> <span>Tambah Data</span></a>
                <br><hr>
                <table id="table_room" class="table table-bordered table-hover display nowrap">
                    <thead>
                        <tr>
                            <th style="text-align:center; background:lightgrey;">No</th>
                            <th style="text-align:center; background:lightgrey;">Nama Fasilitas</th>
                            <th style="text-align:center; background:lightgrey;">Biaya (Rp)</th>
                            <th style="text-align:center; background:lightgrey;">Keterangan</th>
                            <th style="text-align:center; background:lightgrey;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($facilities as $facility)
                        <tr class="table-row" id="">
                            <td width="5%">{{$loop->iteration}}</td>
                            <td>{{$facility->facilities_name}}</td>
                            <td>Rp. {{$facility->cost}},-</td>
                            <td>{{$facility->ket}}</td>
                            <td style="text-align:center; width:9%;">
                                <a href="#modal-edit_{{$facility->id}}" data-toggle="modal" class="btn btn-xs btn-primary" title="Edit Data"><i class="fas fa-edit"></i></a>
                                <a href="/additional-facilities/{{$facility->id}}/delete" onclick="return confirm('Anda yakin ingin menghapus?')" class="btn btn-xs btn-danger" title="Hapus Data"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @include('room.roomFacilities_edit')
                        @endforeach
                    </tbody>
                </table>
                @include('room.roomFacilities_add')
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