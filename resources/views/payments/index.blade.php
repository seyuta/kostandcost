@extends('layouts.app')

@section('sidebar')
@parent
@endsection

@section('content')
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item active">Pembayaran</li>
</ol>
<h1 class="page-header">Pembayaran</h1>
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
                <h4 class="panel-title">Daftar Pembayaran</h4>
            </div>
            <div class="panel-body">
                <ul class="nav nav-pills">
                    <li class="nav-items">
                        <a href="#invoice" data-toggle="tab" class="nav-link active">
                            <span class="d-sm-none">Tab 1</span>
                            <span class="d-sm-block d-none">Bayar Sewa</span>
                        </a>
                    </li>
                    <li class="nav-items">
                        <a href="#log" data-toggle="tab" class="nav-link">
                            <span class="d-sm-none">Tab 2</span>
                            <span class="d-sm-block d-none">Bayar Booking</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="invoice">
                        <table id="dt-invoice" class="table table-bordered table-hover display nowrap">
                            <thead>
                                <tr>
                                    <th style="text-align:center; background:lightgrey;">No</th>
                                    <th style="text-align:center; background:lightgrey;">Status</th>
                                    <th style="text-align:center; background:lightgrey;">No Kamar</th>
                                    <th style="text-align:center; background:lightgrey;">Nama Penghuni</th>
                                    <th style="text-align:center; background:lightgrey;">No HP</th>
                                    <th style="text-align:center; background:lightgrey;">Jumlah Tagihan</th>
                                    <th style="text-align:center; background:lightgrey;">Tanggal Bayar</th>
                                    <th style="text-align:center; background:lightgrey;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($occupants as $occupant)
                                <tr class="table-row" id="">
                                    <td width="5%" class="text-center">{{$loop->iteration}}</td>
                                    <td style="text-align:center;font-size:14px;"><span class="badge badge-{{($occupant->payments->status == "Lunas")? "green" : "danger" }} badge-square">{{$occupant->payments->status}}</span></td>
                                    <td>{{$occupant->rooms->no_room}}</td>
                                    <td>{{$occupant->customers->fullname}}</td>
                                    <td>{{$occupant->customers->no_hp1}}</td>
                                    <td style="text-align:center;">Rp. {{number_format($occupant->payments->bill,0,",",".")}},-</td>
                                    <td>{{$occupant->payments->pay_date}}</td>
                                    <td class="text-center">
                                        <a href="/payments/{{$occupant->id}}/receipt" class="btn btn-xs btn-default" title="Print Kwitansi"><i class="fas fa-print"></i></a>
                                        <a href="/payments/{{$occupant->id}}" class="btn btn-xs btn-yellow" title="Detail Data"><i class="fas fa-search"></i></a>
                                        <a {{($occupant->payments->status == "Lunas")? "hidden" : "" }} href="#modal-pay-{{$occupant->payment_id}}" data-toggle="modal" class="btn btn-xs btn-success" title="Bayar"><i class="fas fa-money-bill-alt"></i></a>
                                    </td>
                                </tr>
                                @include('payments.pay')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade show" id="log">
                        <table id="dt-log" class="table table-bordered table-hover display nowrap">
                            <thead>
                                <tr>
                                    <th style="text-align:center; background:lightgrey;">No</th>
                                    <th style="text-align:center; background:lightgrey;">Status</th>
                                    <th style="text-align:center; background:lightgrey;">No Kamar</th>
                                    <th style="text-align:center; background:lightgrey;">Nama Penghuni</th>
                                    <th style="text-align:center; background:lightgrey;">No HP</th>
                                    <th style="text-align:center; background:lightgrey;">DP Booking</th>
                                    <th style="text-align:center; background:lightgrey;">Tanggal Hangus</th>
                                    <th style="text-align:center; background:lightgrey;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $occupant)
                                <tr class="table-row" id="">
                                    <td width="5%" class="text-center">{{$loop->iteration}}</td>
                                    <td style="text-align:center;font-size:14px;"><span class="badge badge-{{($occupant->payments->status_dp == "Lunas")? "green" : "danger" }} badge-square">{{$occupant->payments['status_dp']}}</span></td>
                                    <td>{{$occupant->rooms['no_room']}}</td>
                                    <td>{{$occupant->customers['fullname']}}</td>
                                    <td>{{$occupant->customers['no_hp1']}}</td>
                                    <td>Rp. {{number_format($occupant->payments['dp_booking'],0,",",".")}},-</td>
                                    <td>{{Carbon\Carbon::parse($occupant->due_date)->isoFormat('D MMMM Y')}}</td>
                                    <td class="text-center">
                                        <a href="/payments/{{$occupant->id}}/receipt-dp" class="btn btn-xs btn-default" title="Print Kwitansi"><i class="fas fa-print"></i></a>
                                        <a href="/payments/{{$occupant->id}}" class="btn btn-xs btn-yellow" title="Detail Data"><i class="fas fa-search"></i></a>
                                        <a {{($occupant->payments->status_dp == "Lunas")? "hidden" : "" }} href="#modal-pay_dp-{{$occupant->payment_id}}" data-toggle="modal" class="btn btn-xs btn-success" title="Bayar"><i class="fas fa-money-bill-alt"></i></a>
                                    </td>
                                </tr>
                                @include('payments.pay_dp')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
        $('#dt-invoice').DataTable({
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

    $(document).ready(function() {
        $('#dt-log').DataTable({
            'serverside'  : false,
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