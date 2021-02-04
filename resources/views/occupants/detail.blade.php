@extends('layouts.app')

@section('sidebar')
@parent
@endsection

@section('content')
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">Detail Data Penghuni</li>
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
        <div class="panel panel-inverse" data-sortable-id="form-stuff-10">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title">Data Penghuni</h4>
            </div>
            <div class="panel-body">
                <div>
                    <h4><i class="fa fa-id-card fa-fw"></i> Identitas Penghuni</h4>
                </div><br>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <dl>
                            <dt class="text-inverse">Nama Lengkap</dt>
                            <dd>{{$occupant->customers['fullname']}}</dd>
                            <dt class="text-inverse m-t-10">Nama Panggilan</dt>
                            <dd>{{$occupant->customers['nickname']}}</dd>
                            <dt class="text-inverse m-t-10">No Identitas</dt>
                            <dd>{{$occupant->customers['no_identitas']}}</dd>
                            <dt class="text-inverse m-t-10">Tempat - Tanggal Lahir</dt>
                            <dd>{{$occupant->customers['tempat_lahir']}} - {{$occupant->customers['tanggal_lahir']}}</dd>
                            <dt class="text-inverse m-t-10">No Hp 1 - No Hp 2</dt>
                            <dd>{{$occupant->customers['np_hp1']}} - {{$occupant->customers['np_hp2']}}</dd>
                            <dt class="text-inverse m-t-10">Jenis Kelamin</dt>
                            <dd>{{$occupant->customers['gender']}}</dd>
                            <dt class="text-inverse m-t-10">Foto</dt>
                            <dd><img src="{{ Storage::url('public/profile_photo/'.$occupant->customers['profile_photo']) }}" width="250px" height="250px"/></dd>
                        </dl>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <dl>
                            <dt class="text-inverse m-t-10">Email</dt>
                            <dd>{{$occupant->customers['email']}}</dd>
                            <dt class="text-inverse m-t-10">Pekerjaan</dt>
                            <dd>{{$occupant->customers['job']}}</dd>
                            <dt class="text-inverse m-t-10">Alamat Asal</dt>
                            <dd>{{$occupant->customers['alamat_asal']}}</dd>
                            <dt class="text-inverse m-t-10">Nama Instansi (Sekolah/Kampus/Kantor)</dt>
                            <dd>{{$occupant->customers['nama_instansi']}}</dd>
                            <dt class="text-inverse m-t-10">Alamat Instansi (Sekolah/Kampus/Kantor)</dt>
                            <dd>{{$occupant->customers['alamat_instansi']}}</dd>
                            <dt class="text-inverse m-t-10">No Telp Instansi (Sekolah/Kampus/Kantor)</dt>
                            <dd>{{$occupant->customers['no_telp_instansi']}}</dd>
                        </dl>
                    </div>
                </div><hr />
                <div>
                    <h4><i class="fa fa-bed fa-fw"></i> Detail Kamar</h4>
                </div><br>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <dl>
                            <dt class="text-inverse">No Kamar</dt>
                            <dd>{{$occupant->rooms['no_room']}}</dd>
                            <dt class="text-inverse">Tipe Kamar</dt>
                            <dd>{{$occupant->rooms->room_types['type_name']}}</dd>
                            <dt class="text-inverse m-t-10">Lokasi Kamar</dt>
                            <dd>{{$occupant->rooms['location']}}</dd>
                        </dl>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <dl>
                            <dt class="text-inverse m-t-10">Ukuran Kamar</dt>
                            <dd>{{$occupant->rooms['size_room']}}</dd>
                            <dt class="text-inverse m-t-10">Keterangan</dt>
                            <dd>{{$occupant->rooms['keterangan']}}</dd>
                        </dl>
                    </div>
                </div><hr />
                <div>
                    <h4><i class="fa fa-wifi fa-fw"></i> Fasilitas Kamar</h4>
                </div><br>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <dl>
                            <dt class="text-inverse">Ukuran Tempat Tidur</dt>
                            <dd>{{$occupant->rooms->room_types['size_bed']}}</dd>
                            <dt class="text-inverse">Meja Belajar</dt>
                            <dd>{{$occupant->rooms->room_types['desk']}}</dd>
                            <dt class="text-inverse m-t-10">Almari</dt>
                            <dd>{{$occupant->rooms->room_types['wardrobe']}}</dd>
                            <dt class="text-inverse m-t-10">AC</dt>
                            <dd>{{$occupant->rooms->room_types['air_conditioner']}}</dd>
                            <dt class="text-inverse m-t-10">Telp Kamar</dt>
                            <dd>{{$occupant->rooms->room_types['line_telp']}}</dd>
                        </dl>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <dl>
                            <dt class="text-inverse m-t-10">Wifi</dt>
                            <dd>{{$occupant->rooms->room_types['wifi']}}</dd>
                            <dt class="text-inverse m-t-10">Kamar Mandi Dalam</dt>
                            <dd>{{$occupant->rooms->room_types['bathroom']}}</dd>
                            <dt class="text-inverse m-t-10">Water Heater</dt>
                            <dd>{{$occupant->rooms->room_types['water_heater']}}</dd>
                            <dt class="text-inverse m-t-10">Privat Balkon</dt>
                            <dd>{{$occupant->rooms->room_types['private_balkon']}}</dd>
                        </dl>
                    </div>
                </div><hr />
                {{-- <div>
                    <h4><i class="fa fa-table fa-fw"></i>List Fasilitas Tambahan</h4>
                </div><br>
                    <table id="table_facility" class="table table-bordered table-hover display nowrap">
                        <thead>
                            <tr>
                                <th style="text-align:center; background:lightgrey;">No</th>
                                <th style="text-align:center; background:lightgrey;">Fasilitas</th>
                                <th style="text-align:center; background:lightgrey;">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-row" id="">
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table><hr/>
                </div> --}}
                <div class="btn-group pull-right">
                    <a href="#" class="btn btn-sm btn-info"><i class="fas fa-print"></i> <span>Print</span></a>
                </div>
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
		    'paging'      : false,
		    'lengthChange': false,
		    'searching'   : false,
		    'ordering'    : true,
		    'info'        : false,
		    'autoWidth'   : false
		});
		$('#table_facility').DataTable({
		    'serverside'  : false,
		    'scrollX'     : true,
		    'paging'      : false,
		    'lengthChange': false,
		    'searching'   : false,
		    'ordering'    : true,
		    'info'        : false,
		    'autoWidth'   : false
		});
	});
</script>
@endsection