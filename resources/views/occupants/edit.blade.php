@extends('layouts.app')

@section('sidebar')
@parent
@endsection

@section('content')
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/occupant">Data Penghuni</a></li>
    <li class="breadcrumb-item active">Edit Data Penghuni</li>
</ol>
<h1 class="page-header">Data Penghuni</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-inverse" data-sortable-id="form-stuff-10">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
                    <h4 class="panel-title">Edit Data Penghuni</h4>
                </div>
                    <div class="panel-body">
                        <form action="/occupants/{{$occupant->id}}" method="POST" data-parsley-validate="true" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Kamar</label>
                                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                                <select class="form-control selectpicker" name="room_id" data-size="5" data-width="100%" data-live-search="true" data-style="btn-white" required>
                                                    <option value="">- Pilih No Kamar -</option>
                                                    @foreach ($options_room as $room)
                                                    <option value="{{$room->id}}" {{($occupant->room_id == $room->id)? "selected" : "" }}>{{$room->no_room}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Nama Pelanggan</label>
                                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                                <select class="form-control selectpicker" name="customer_id" data-size="5" data-width="100%" data-live-search="true" data-style="btn-white" disabled>
                                                    <option value="">- Pilih Pelanggan -</option>
                                                    @foreach ($options_customer as $customer)
                                                    <option value="{{$customer->id}}" {{($occupant->customer_id == $customer->id)? "selected" : "" }}>{{$customer->fullname}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Periode Sewa</label>
                                            <span>&nbsp&nbsp&nbsp&nbsp</span>
                                            <div class="checkbox checkbox-css checkbox-inline">
                                                <input type="radio" name="periode" id="rd_periode1_edit" value="Harian" required {{($occupant->periode=="Harian") ? "checked" : ""}}/>
                                                <label for="rd_periode1_edit">Harian</label>
                                            </div>
                                            <div class="checkbox checkbox-css checkbox-inline"/>
                                                <input type="radio" name="periode" id="rd_periode2_edit" value="Bulanan" {{($occupant->periode=="Bulanan") ? "checked" : ""}}/>
                                                <label for="rd_periode2_edit">Bulanan</label>
                                            </div>
                                            <div class="checkbox checkbox-css checkbox-inline"/>
                                                <input type="radio" name="periode" id="rd_periode3_edit" value="Tahunan" {{($occupant->periode=="Tahunan") ? "checked" : ""}}/>
                                                <label for="rd_periode3_edit">Tahunan</label>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Tanggal Berakhir</label>
                                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                                <input type="text" class="form-control" name="end_date" value="{{$occupant->end_date}}" id="datepicker-autoClose1" placeholder="- Pilih Tanggal -" autocomplete="off" disabled/>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">DP Booking</label>
                                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                                <input type="text" class="form-control" name="dp_booking" value="{{$occupant->dp_booking}}" placeholder="Contoh: 500000" data-parsley-type="number"/>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Booking Jatuh Tempo</label>
                                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                                <input type="text" class="form-control" name="due_date" value="{{$occupant->due_date}}" id="datepicker-autoClose2" placeholder="- Pilih Tanggal -" autocomplete="off"/>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Fasilitas Tambahan</label>
                                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                                <table id="dt_facility" class="table table-bordered table-hover display nowrap">
                                                    <thead>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="table-row" id="">
                                                            <td>
                                                                <select class="form-control selectpicker" data-size="3" data-live-search="true" data-style="btn-white">
                                                                    <option value="">- Pilih Fasilitas -</option>
                                                                    @foreach ($options_facilities as $facilities)
                                                                    <option value="{{$facilities->id}}">{{$facilities->facilities_name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <button type="button" onclick="add_facilities()" class="btn btn-sm btn-primary" data-toggle="tooltip"><i class="fa fa-plus-square"></i>&nbsp Tambah Fasilitas Lagi</button>
                                            </div>
                                        </div> --}}
                                        <br>
                                        <div class="note note-warning">
                                            <div class="note-icon"><i class="fa fa-lightbulb"></i></div>
                                            <div class="note-content">
                                                <h4 class="m-t-5 m-b-5 p-b-2">Notes:</h4>
                                                <ul class="m-b-5 p-l-25">
                                                    <li>DP (Down Payment) hanya diperuntukan untuk pelanggan yang hendak booking kamar.</li>
                                                    <li>DP (Down Payment) diisi hanya menggunakan angka tanpa titik.</li>
                                                    <li>Booking jatuh tempo hanya diperuntukan untuk pelanggan yang hendak booking kamar.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-lg-10 offset-md-10 offset-sm-2 offset-xs-2">
                                        <a href="/occupants" class="btn btn-sm btn-default m-r-5">Kembali</a>
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
    </div>
</div>
@endsection

@section('scripts')
@parent
@endsection