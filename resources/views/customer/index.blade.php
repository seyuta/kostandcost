@extends('layouts.app')

@section('sidebar')
@parent
@endsection

@section('content')
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">Daftar Data Pelanggan</a></li>
</ol>
<h1 class="page-header">Data Pelanggan</h1>
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
                <h4 class="panel-title">Daftar Data Pelanggan</h4>
            </div>
            <div class="panel-body">
                <a href="/customer/create" class="btn btn-sm btn-primary"><i class="fas fa-plus-square"></i> <span>Tambah Data</span></a>
                {{-- <a href="#" class="btn btn-sm btn-info"><i class="fas fa-external-link-alt"></i> <span>Export</span></a> --}}
                <br><hr>
                <table id="table_occupant" class="table table-bordered table-hover display nowrap">
                    <thead>
                        <tr>
                            <th style="text-align:center; background:lightgrey;">No</th>
                            <th style="text-align:center; background:lightgrey;">Nama Pelanggan</th>
                            <th style="text-align:center; background:lightgrey;">No KTP</th>
                            <th style="text-align:center; background:lightgrey;">No HP</th>
                            <th style="text-align:center; background:lightgrey;">Tanggal Lahir</th>
                            <th style="text-align:center; background:lightgrey;">Jenis Kelamin</th>
                            <th style="text-align:center; background:lightgrey;">Alamat</th>
                            <th style="text-align:center; background:lightgrey;">Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($customers as $customer)
                    <tbody>
                        <tr class="table-row" id="">
                            <td width="2%">{{ $loop->iteration }}</td>
                            <td>{{ $customer->fullname }}</td>
                            <td>{{ $customer->no_identitas }}</td>
                            <td>{{ $customer->no_hp1 }}</td>
                            <td>{{ $customer->tanggal_lahir }}</td>
                            <td>{{ $customer->gender }}</td>
                            <td>{{ $customer->alamat_asal }}</td>
                            <td style="text-align:center; width:9%;">
                                <a href="/customer/{{$customer->id}}/edit" class="btn btn-xs btn-primary" title="Ubah Data"><i class="fas fa-edit"></i></a>
                                <a href="/customer/{{$customer->id}}" class="btn btn-xs btn-yellow" title="Detail Data"><i class="fas fa-bars"></i></a>
                                {{-- <a href="/customer/{{$customer->id}}/delete" class="btn btn-xs btn-danger" title="Hapus Data" onclick="return confirm('Anda yakin ingin menghapus?')"><i class="fas fa-trash"></i></a> --}}
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
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
		$('#table_occupant').DataTable({
		    'serverside'  : false,
		    'scrollX'     : true,
		    'paging'      : true,
		    'lengthChange': true,
		    'searching'   : true,
		    'ordering'    : true,
		    'info'        : true,
		    'autoWidth'   : true
		});
	});
</script>
@endsection