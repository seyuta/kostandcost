@extends('layouts.app')

@section('sidebar')
@parent
@endsection

@section('content')
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/customer">Data Pelanggan</a></li>
    <li class="breadcrumb-item active">Detail Data Pelanggan</li>
</ol>
<h1 class="page-header">Detail Data Pelanggan</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-inverse" data-sortable-id="form-stuff-10">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
                <h4 class="panel-title">Detail Data Pribadi</h4>
            </div>
            <div class="panel-body">
                <fieldset>
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <dl>
                                <dt class="text-inverse">Nama Lengkap</dt>
                                <dd>{{$customer->fullname}}</dd>
                                <dt class="text-inverse m-t-10">Nama Panggilan</dt>
                                <dd>{{$customer->nickname}}</dd>
                                <dt class="text-inverse m-t-10">No Identitas</dt>
                                <dd>{{$customer->no_identitas}}</dd>
                                <dt class="text-inverse m-t-10">Tempat - Tanggal Lahir</dt>
                                <dd>{{$customer->tempat_lahir}} - {{$customer->tanggal_lahir}}</dd>
                                <dt class="text-inverse m-t-10">No Hp 1 - No Hp 2</dt>
                                <dd>{{$customer->no_hp1}} - {{$customer->no_hp2}}</dd>
                                <dt class="text-inverse m-t-10">Jenis Kelamin</dt>
                                <dd>{{$customer->gender}}</dd>
                                <dt class="text-inverse m-t-10">Foto</dt>
                                <dd><img src="{{ Storage::url('public/profile_photo/'.$customer->profile_photo) }}" width="250px" height="250px"/></dd>
                            </dl>
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <dl>
                                <dt class="text-inverse m-t-10">Email</dt>
                                <dd>{{$customer->email}}</dd>
                                <dt class="text-inverse m-t-10">Pekerjaan</dt>
                                <dd>{{$customer->job}}</dd>
                                <dt class="text-inverse m-t-10">Alamat Asal</dt>
                                <dd>{{$customer->alamat_asal}}</dd>
                                <dt class="text-inverse m-t-10">Nama Instansi (Sekolah/Kampus/Kantor)</dt>
                                <dd>{{$customer->nama_instansi}}</dd>
                                <dt class="text-inverse m-t-10">Alamat Instansi (Sekolah/Kampus/Kantor)</dt>
                                <dd>{{$customer->alamat_instansi}}</dd>
                                <dt class="text-inverse m-t-10">No Telp Instansi (Sekolah/Kampus/Kantor)</dt>
                                <dd>{{$customer->no_telp_instansi}}</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="btn-group pull-right">
                        <a href="#" class="btn btn-sm btn-info"><i class="fas fa-print"></i> <span>Print</span></a>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="panel panel-inverse" data-sortable-id="form-stuff-10">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
                <h4 class="panel-title">Data Pendukung</h4>
            </div>
            <div class="panel-body">
                <ul class="nav nav-pills">
                <li class="nav-items">
                    <a href="#nav-1" data-toggle="tab" class="nav-link active">
                        <span class="d-sm-none">Kontak Darurat</span>
                        <span class="d-sm-block d-none">Kontak Darurat</span>
                    </a>
                </li>
                <li class="nav-items">
                    <a href="#nav-2" data-toggle="tab" class="nav-link">
                        <span class="d-sm-none">Detail Kamar</span>
                        <span class="d-sm-block d-none">Detail Kamar</span>
                    </a>
                </li>
                <li class="nav-items">
                    <a href="#nav-3" data-toggle="tab" class="nav-link">
                        <span class="d-sm-none">Detail Pembayaran</span>
                        <span class="d-sm-block d-none">Detail Pembayaran</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="nav-1">
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <dl>
                                <dt class="text-inverse">Nama Lengkap</dt>
                                <dd>{{$customer->emergency_contacts['fullname_ec']}}</dd>
                                <dt class="text-inverse m-t-10">Hubungan</dt>
                                <dd>{{$customer->emergency_contacts['relation']}}</dd>
                                <dt class="text-inverse m-t-10">No Identitas</dt>
                                <dd>{{$customer->emergency_contacts['no_identitas_ec']}}</dd>
                                <dt class="text-inverse m-t-10">Tempat - Tanggal Lahir</dt>
                                <dd>{{$customer->emergency_contacts['tmp_lahir_ec']}} - {{$customer->emergency_contacts['tgl_lahir_ec']}}</dd>
                                <dt class="text-inverse m-t-10">No Telp - No Hp</dt>
                                <dd>{{$customer->emergency_contacts['no_hp1_ec']}} - {{$customer->emergency_contacts['no_hp2_ec']}}</dd>
                                <dt class="text-inverse m-t-10">Jenis Kelamin</dt>
                                <dd>{{$customer->emergency_contacts['gender_ec']}}</dd>
                            </dl>
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <dl>
                                <dt class="text-inverse m-t-10">Email</dt>
                                <dd>{{$customer->emergency_contacts['email_ec']}}</dd>
                                <dt class="text-inverse m-t-10">Pekerjaan</dt>
                                <dd>{{$customer->emergency_contacts['job_ec']}}</dd>
                                <dt class="text-inverse m-t-10">Alamat</dt>
                                <dd>{{$customer->emergency_contacts['alamat_ec']}}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-2">
                    <table id="table_bill" class="table table-bordered table-hover display nowrap">
                        <thead>
                            <tr>
                                <th style="text-align:center; background:lightgrey;">No</th>
                                <th style="text-align:center; background:lightgrey;">Nama Penghuni</th>
                                <th style="text-align:center; background:lightgrey;">No KTP</th>
                                <th style="text-align:center; background:lightgrey;">No HP</th>
                                <th style="text-align:center; background:lightgrey;">Tanggal Lahir</th>
                                <th style="text-align:center; background:lightgrey;">Jenis Kelamin</th>
                                <th style="text-align:center; background:lightgrey;">Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-row" id="">
                                <td width="2%">1</td>
                                <td>Joker</td>
                                <td>302109892820192829</td>
                                <td>08123456789</td>
                                <td>01/01/2001</td>
                                <td>Laki - Laki</td>
                                <td>Jl. Jalan Terus</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-3">
                    <table id="dt-log" class="table table-bordered table-hover display nowrap">
                        <thead>
                            <tr>
                                <th style="text-align:center; width:5%; background:lightgrey;">
                                    No
                                </th>
                                <th style="text-align:center; width:9%; background:lightgrey;">Aksi</th>
                                <th style="text-align:center; width:10%; background:lightgrey;">No Pembayaran</th>
                                <th style="text-align:center; width:10%; background:lightgrey;">Tanggal Pembayaran</th>
                                <th style="text-align:center; width:10%; background:lightgrey;">No Reg</th>
                                <th style="text-align:center; width:15%; background:lightgrey;">Poli</th>
                                <th style="text-align:center; width:10%; background:lightgrey;">Nama Lengkap</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-row" id="">
                                <td width="5%" class="text-center">1</td>
                                <td class="text-center">
                                    <a href="/billing_detail" class="btn btn-xs btn-yellow" title="Detail Pembayaran"><i class="fas fa-search"></i></a>
                                </td>
                                <td>[No Pembayaran]</td>
                                <td>[Tanggal Pembayaran]</td>
                                <td>[No Registrasi Pasien1]</td>
                                <td>[Nama Poli1]</td>
                                <td>[Nama Lengkap Pasien1]</td>
                            </tr>
                        </tbody>
                    </table>
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
        $('#dt-log').DataTable({
            'serverside'  : false,
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : true
        });
    });
    $(document).ready(function() {
        $('#table_bill').DataTable({
            'serverside'  : false,
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