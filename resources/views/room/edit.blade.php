@extends('layouts.app')

@section('sidebar')
@parent
@endsection

@section('content')
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/room">Data Kamar</a></li>
    <li class="breadcrumb-item active">Edit Data Kamar</li>
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
                <h4 class="panel-title">Edit Data Kamar</h4>
            </div>
            <div class="panel-body">
                <form action="/room/{{$room->id}}" method="POST" data-parsley-validate="true" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <fieldset>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Tipe Kamar</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <select class="form-control selectpicker" name="room_type_id" data-size="5" data-width="100%" data-live-search="true" data-style="btn-white">
                                            <option value="">- Pilih Tipe Kamar -</option>
                                            @foreach ($options as $option)
                                            <option value="{{$option->id}}" {{($room->room_type_id == $option->id)? "selected" : "" }}>{{$option->type_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">No Kamar</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="no_room" value="{{$room->no_kamar}}" placeholder="Contoh: 201" />
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Lokasi</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="location" value="{{$room->location}}" placeholder="Contoh: Lantai 1" />
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Ukuran Kamar</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="size_room" value="{{$room->size_room}}" placeholder="Contoh: 4x2,6" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Biaya Per Hari (Rp)</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="cost_per_day" value="{{$room->cost_per_day}}" placeholder="Contoh: 150000" data-parsley-type="number"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Biaya Per Bulan (Rp)</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="cost_per_month" value="{{$room->cost_per_month}}" placeholder="Contoh: 1800000" data-parsley-type="number"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Biaya Per Tahun (Rp)</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="cost_per_year" value="{{$room->cost_per_year}}" placeholder="Contoh: 20000000" data-parsley-type="number"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Keterangan</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <textarea class="form-control" rows="3" name="ket_room" placeholder="Keterangan">{{$room->keterangan}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div><hr />
                        <div class="form-group row">
                            <div class="offset-lg-10 offset-md-10 offset-sm-2 offset-xs-2">
                                <a href="/room" class="btn btn-sm btn-default m-r-5">Kembali</a>
                                <button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin akan reset form?')">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary m-r-5">Simpan</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@parent
@endsection