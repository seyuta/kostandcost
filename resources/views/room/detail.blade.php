@extends('layouts.app')

@section('sidebar')
@parent
@endsection

@section('content')
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/room">Data Kamar</a></li>
    <li class="breadcrumb-item active">Detail Data Kamar</li>
</ol>
<h1 class="page-header">Data Kamar</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-inverse" data-sortable-id="form-stuff-10">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
                <h4 class="panel-title">Detail Data Kamar</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <dl>
                            <dt class="text-inverse m-t-10">Tipe Kamar</dt>
                            <dd>{{$room->room_types->type_name}}</dd>
                            <dt class="text-inverse m-t-10">No Kamar</dt>
                            <dd>{{$room->no_room}}</dd>
                            <dt class="text-inverse m-t-10">Lokasi Kamar</dt>
                            <dd>{{$room->location}}</dd>
                            <dt class="text-inverse m-t-10">Ukuran Kamar</dt>
                            <dd>{{$room->size_room}}</dd>
                        </dl>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <dl>
                            <dt class="text-inverse m-t-10">Biaya Per Hari (Rp)</dt>
                            <dd>{{$room->cost_per_day}}</dd>
                            <dt class="text-inverse m-t-10">Biaya Per Bulan (Rp)</dt>
                            <dd>{{$room->cost_per_month}}</dd>
                            <dt class="text-inverse m-t-10">Biaya Per Tahun (Rp)</dt>
                            <dd>{{$room->cost_per_year}}</dd>
                            <dt class="text-inverse m-t-10">Keterangan</dt>
                            <dd>{{$room->ket_room}}</dd>
                        </dl>
                    </div>
                </div><hr>
                <div>
                    <h4><i class="fa fa-wifi fa-fw"></i> Fasilitas Kamar</h4>
                </div><br>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <dl>
                            <dt class="text-inverse m-t-10">Ukuran Tempat Tidur</dt>
                            <dd>{{$room->room_types->size_bed}}</dd>
                            <dt class="text-inverse m-t-10">Meja Belajar</dt>
                            <dd>{{$room->room_types->desk}}</dd>
                            <dt class="text-inverse m-t-10">Almari</dt>
                            <dd>{{$room->room_types->wardrobe}}</dd>
                            <dt class="text-inverse m-t-10">AC</dt>
                            <dd>{{$room->room_types->air_conditioner}}</dd>
                            <dt class="text-inverse m-t-10">Telp Kamar</dt>
                            <dd>{{$room->room_types->line_telp}}</dd>
                        </dl>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <dl>
                            <dt class="text-inverse m-t-10">Wifi</dt>
                            <dd>{{$room->room_types->wifi}}</dd>
                            <dt class="text-inverse m-t-10">Kamar Mandi Dalam</dt>
                            <dd>{{$room->room_types->bathroom}}</dd>
                            <dt class="text-inverse m-t-10">Water Heater</dt>
                            <dd>{{$room->room_types->water_heater}}</dd>
                            <dt class="text-inverse m-t-10">Privat Balkon</dt>
                            <dd>{{$room->room_types->private_balkon}}</dd>
                        </dl>
                    </div>
                </div><hr>
                <div>
                    <h4><i class="fa fa-info-circle fa-fw"></i>Status Kamar:  <span class="badge badge-{{($room->occupant_id != null) ? "danger" : "green" }} badge-square">  {{($room->occupant_id != null) ? "Sudah Terisi" : "Kosong" }}</span></h4>
                </div><br>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@parent
@endsection