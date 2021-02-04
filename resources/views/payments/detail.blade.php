@extends('layouts.app')

@section('sidebar')
@parent
@endsection

@section('content')
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/billing">Billing</a></li>
    <li class="breadcrumb-item active">Detail Tagihan</li>
</ol>
<h1 class="page-header">Detail Tagihan</h1>
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
                <h4 class="panel-title">Identitas Pelanggan</h4>
            </div>
            <div class="panel-body">
                <fieldset>
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <dl>
                                <dt class="text-inverse">Nama Lengkap</dt>
                                <dd>{{$occupants->customers['fullname']}}</dd>
                                <dt class="text-inverse m-t-10">Nama Panggilan</dt>
                                <dd>{{$occupants->customers['nickname']}}</dd>
                                <dt class="text-inverse m-t-10">No Identitas</dt>
                                <dd>{{$occupants->customers['no_identitas']}}</dd>
                                <dt class="text-inverse m-t-10">Tempat - Tanggal Lahir</dt>
                                <dd>{{$occupants->customers['tempat_lahir']}} - {{$occupants->customers['tanggal_lahir']}}</dd>
                                <dt class="text-inverse m-t-10">No Hp 1 - No Hp 2</dt>
                                <dd>{{$occupants->customers['np_hp1']}} - {{$occupants->customers['np_hp2']}}</dd>
                                <dt class="text-inverse m-t-10">Jenis Kelamin</dt>
                                <dd>{{$occupants->customers['gender']}}</dd>
                                <dt class="text-inverse m-t-10">Foto</dt>
                                <dd><img src="{{ Storage::url('public/profile_photo/'.$occupants->customers['profile_photo']) }}" width="250px" height="250px"/></dd>
                            </dl>
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <dl>
                                <dt class="text-inverse m-t-10">Email</dt>
                                <dd>{{$occupants->customers['email']}}</dd>
                                <dt class="text-inverse m-t-10">Pekerjaan</dt>
                                <dd>{{$occupants->customers['job']}}</dd>
                                <dt class="text-inverse m-t-10">Alamat Asal</dt>
                                <dd>{{$occupants->customers['alamat_asal']}}</dd>
                                <dt class="text-inverse m-t-10">Nama Instansi (Sekolah/Kampus/Kantor)</dt>
                                <dd>{{$occupants->customers['nama_instansi']}}</dd>
                                <dt class="text-inverse m-t-10">Alamat Instansi (Sekolah/Kampus/Kantor)</dt>
                                <dd>{{$occupants->customers['alamat_instansi']}}</dd>
                                <dt class="text-inverse m-t-10">No Telp Instansi (Sekolah/Kampus/Kantor)</dt>
                                <dd>{{$occupants->customers['no_telp_instansi']}}</dd>
                            </dl>
                        </div>
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
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title">Detail Tagihan <span class="badge badge-{{($occupants->payments->status == "Lunas")? "green" : "danger" }} badge-square">{{$occupants->payments->status}}</span></h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6">
                        <table class="table table-striped table-hover">
                            <tr>
                                <td width="15%">No Kamar</td>
                                <td width="1%">:</td>
                                <td>{{$occupants->rooms->no_room}}</td>
                            </tr>
                            <tr>
                                <td width="15%">Biaya Sewa {{$occupants->periode}} Kamar No {{$occupants->rooms->no_room}}</td>
                                <td width="1%">:</td>
                                <td>Rp. {{number_format($cost,0,",",".")}},-</td>
                            </tr>
                            <tr>
                                <td width="15%">Lama Sewa</td>
                                <td width="1%">:</td>
                                <td>{{$occupants->length}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <dl>
                            <dt class="text-inverse">Jumlah Biaya</dt>
                            <dd><h3>Rp {{number_format($occupants->payments->bill,0,",",".")}},-</h3></dd>
                        </dl>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <dl>
                            <dt class="text-inverse m-t-10">Down Payment (DP) <span class="badge badge-{{($occupants->payments->status_dp == "Lunas")? "green" : "danger" }} badge-square">{{$occupants->payments->status_dp}}</span></dt>
                            <dd><h3>Rp {{number_format($occupants->payments->dp_booking,0,",",".")}},-</h3></dd>
                        </dl>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <dl>
                            <dt class="text-inverse m-t-10">Total Biaya</dt>
                            <dd><h3>Rp {{number_format(($occupants->payments->bill - $occupants->payments->dp_booking),0,",",".")}},-</h3></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12" {{($occupants->payments->status == "Belum Lunas")? "hidden" : "" }}>
        <div class="panel panel-inverse" data-sortable-id="form-stuff-10">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                    <h4 class="panel-title">Detail Pembayaran</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6">
                            <table class="table table-striped table-hover">
                                <tr>
                                    <td width="20%">Kode Pembayaran</td>
                                    <td width="1%">:</td>
                                    <td><b>{{$occupants->payments->pay_code}}</b></td>
                                </tr>
                                <tr>
                                    <td width="20%">Waktu Pembayaran</td>
                                    <td width="1%">:</td>
                                    <td><b>{{Carbon\Carbon::parse($occupants->payments->pay_date)->isoFormat('DD MMMM Y')}}</b></td>
                                </tr>
                                <tr>
                                    <td width="20%">Metode Pembayaran</td>
                                    <td width="1%">:</td>
                                    <td><b>{{$occupants->payments->pay_method}}</b></td>
                                </tr>
                                <tr>
                                    <td width="20%">Nama Bank</td>
                                    <td width="1%">:</td>
                                    <td><b>{{$occupants->payments->bank_name}}</b></td>
                                </tr>
                                <tr>
                                    <td width="20%">Kode Transaksi</td>
                                    <td width="1%">:</td>
                                    <td><b>{{$occupants->payments->transaction_code}}</b></td>
                                </tr>
                                <tr>
                                    <td width="20%">Jumlah yang dibayarkan</td>
                                    <td width="1%">:</td>
                                    <td><b>Rp. {{number_format(($occupants->payments->bill - $occupants->payments->dp_booking),0,",",".")}},-</b></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12" {{($occupants->payments->status_dp == "Belum Lunas")? "hidden" : "" }}>
        <div class="panel panel-inverse" data-sortable-id="form-stuff-10">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                    <h4 class="panel-title">Detail Pembayaran DP</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6">
                            <table class="table table-striped table-hover">
                                <tr>
                                    <td width="20%">Kode Pembayaran</td>
                                    <td width="1%">:</td>
                                    <td><b>{{$occupants->payments->pay_code_dp}}</b></td>
                                </tr>
                                <tr>
                                    <td width="20%">Waktu Pembayaran</td>
                                    <td width="1%">:</td>
                                    <td><b>{{Carbon\Carbon::parse($occupants->payments->pay_date_dp)->isoFormat('DD MMMM Y')}}</b></td>
                                </tr>
                                <tr>
                                    <td width="20%">Metode Pembayaran</td>
                                    <td width="1%">:</td>
                                    <td><b>{{$occupants->payments->pay_method_dp}}</b></td>
                                </tr>
                                <tr>
                                    <td width="20%">Nama Bank</td>
                                    <td width="1%">:</td>
                                    <td><b>{{$occupants->payments->bank_name_dp}}</b></td>
                                </tr>
                                <tr>
                                    <td width="20%">Kode Transaksi</td>
                                    <td width="1%">:</td>
                                    <td><b>{{$occupants->payments->transaction_code_dp}}</b></td>
                                </tr>
                                <tr>
                                    <td width="20%">Jumlah yang dibayarkan</td>
                                    <td width="1%">:</td>
                                    <td><b>Rp. {{number_format($occupants->payments->dp_booking,0,",",".")}},-</b></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@parent
@endsection