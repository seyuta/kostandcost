@extends('layouts.app')

@section('sidebar')
@parent
@endsection

@section('content')
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">Daftar Data Penghuni</a></li>
</ol>
<h1 class="page-header">Data Penghuni</h1>
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
                <h4 class="panel-title">Daftar Data Penghuni</h4>
            </div>
            <div class="panel-body">
                <a href="#modal-add" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fas fa-plus-square"></i> <span>Tambah Data</span></a>
                {{-- <a href="#" class="btn btn-sm btn-info"><i class="fas fa-external-link-alt"></i> <span>Export</span></a> --}}
                <br><hr>
                <table id="table_occupant" class="table table-bordered table-hover display nowrap">
                    <thead>
                        <tr>
                            <th style="text-align:center; background:lightgrey;">No</th>
                            <th style="text-align:center; background:lightgrey;">Status</th>
                            <th style="text-align:center; background:lightgrey;">Nama Penghuni</th>
                            <th style="text-align:center; background:lightgrey;">No KTP</th>
                            <th style="text-align:center; background:lightgrey;">No HP</th>
                            <th style="text-align:center; background:lightgrey;">Nomor Kamar</th>
                            <th style="text-align:center; background:lightgrey;">Periode</th>
                            <th style="text-align:center; background:lightgrey;">Lama Sewa</th>
                            <th style="text-align:center; background:lightgrey;">Tanggal Mulai</th>
                            <th style="text-align:center; background:lightgrey;">Tanggal Berakhir</th>
                            <th style="text-align:center; background:lightgrey;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($occupants as $occupant)
                        <tr class="table-row" id="">
                            <td width="2%">{{$loop->iteration}}</td>
                            <td style="text-align:center;font-size:14px;"><span class="badge badge-{{($occupant->end_date >= $today)? "green" : "danger" }} badge-square">{{($occupant->end_date >= $today)? "Aktif" : "Tidak Aktif" }}</span></td>
                            <td>{{$occupant->customers['fullname']}}</td>
                            <td>{{$occupant->customers['no_identitas']}}</td>
                            <td>{{$occupant->customers['no_hp1']}}</td>
                            <td>{{$occupant->rooms['no_room']}}</td>
                            <td>{{$occupant->periode}}</td>
                            <td>{{$occupant->length}}</td>
                            <td>{{Carbon\Carbon::parse($occupant->created_at)->isoFormat('D MMMM Y')}}</td>
                            <td>{{Carbon\Carbon::parse($occupant->end_date)->isoFormat('D MMMM Y')}}</td>
                            <td style="text-align:center; width:9%;">
                                <a href="/occupants/{{$occupant->id}}/edit" class="btn btn-xs btn-primary" title="Edit Data"><i class="fas fa-edit"></i></a>
                                <a href="/occupants/{{$occupant->id}}" class="btn btn-xs btn-yellow" title="Detail Data"><i class="fas fa-bars"></i></a>
                                <a href="javascript" data-click="swal-danger" class="btn btn-xs btn-danger" title="Hapus Data"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('occupants.add')
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
		    'autoWidth'   : false
		});
	});
</script>
{{-- <script>
    function add_facilities(){
        $('#dt_facility tbody').append(
            '<tr class="table-row" id="">'+
                '<td>'+
                    '<select class="form-control selectpicker" data-size="3" data-live-search="true" data-style="btn-white">'+
                        '<option value="">- Pilih Fasilitas -</option>'+
                        '<option value=""></option>'+
                    '</select>'+
                '</td>'+
            '</tr>'
        );
        $('.selectpicker').selectpicker('refresh');
    }
</script> --}}
@endsection