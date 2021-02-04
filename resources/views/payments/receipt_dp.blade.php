@extends('layouts.app')

@section('sidebar')
@parent
@endsection

@section('content')
<ol class="breadcrumb hidden-print pull-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/payments">Pembayaran</a></li>
    <li class="breadcrumb-item active">Kwitansi</li>
</ol>
<h1 class="page-header hidden-print"><br></h1>
<div class="invoice">
    <div class="invoice-company text-inverse f-w-600">
        <span class="pull-right hidden-print">
            <span {{($occupants->payments->status_dp == "Lunas")? "" : "hidden" }} class="badge badge-{{($occupants->payments->status_dp == "Lunas")? "green" : "danger" }} badge-square">{{$occupants->payments->status_dp}}</span>
            <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5" {{($occupants->payments->status_dp == "Lunas")? "hidden" : "" }}><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
        </span>
        Campus663 Livin <small>Kwitansi</small>
    </div>
    <div class="invoice-header">
        <div class="invoice-from">
            <small>TELAH TERIMA DARI :</small>
            <address class="m-t-5 m-b-5">
                <strong class="text-inverse">{{$occupants->customers->fullname}}</strong><br />
                {{$occupants->customers->alamat_asal}}<br />
                No HP 1 : {{$occupants->customers->no_hp1}}<br />
                No HP 2 : {{$occupants->customers->no_hp2}}
            </address>
        </div>
        <div class="invoice-to">
            <small>DIBAYARKAN KEPADA :</small>
            <address class="m-t-5 m-b-5">
                <strong class="text-inverse">Campus663 Livin</strong><br />
                Jl. Kampus No. 663 Karang Wangkal<br />
                Purwokerto Utara, Banyumas<br />
                Telp : 02814567890<br />
            </address>
        </div>
        <div class="invoice-date">
            <small>TANGGAL CETAK KWITANSI</small>
            <div class="date text-inverse m-t-5">{{Carbon\Carbon::now()->isoFormat("D MMMM Y")}}</div>
            <div class="invoice-detail">
                <small>NOMOR KWITANSI</small>
                <br>
                {{$occupants->payments->no_kwitansi_dp}}
            </div>
        </div>
    </div>
    <div class="invoice-content">
        <div class="table-responsive">
            <table class="table table-invoice">
                <thead>
                    <tr>
                        <th>UNTUK PEMBAYARAN</th>
                        <th class="text-center" width="10%"></th>
                        <th class="text-center" width="10%"></th>
                        <th class="text-right" width="20%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="text-inverse">Down Payment (DP)</span><br />
                            <small>DP Hangus Tanggal : {{Carbon\Carbon::parse($occupants->due_date)->isoFormat('D MMMM YYYY')}}
                                <br>No Kamar : {{$occupants->rooms->no_room}}
                                <br>Periode Sewa : {{$occupants->periode}}
                            </small>
                        </td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-right"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="invoice-price">
            <div class="invoice-price-right">
                <small>TOTAL</small> <span class="f-w-600">Rp. {{number_format($occupants->payments->dp_booking,0,",",".")}},-</span>
            </div>
        </div>
    </div>
    <div class="invoice-note">
        * Jika pembayaran melalui transfer pastikan pemilik rekening atas nama Campus663<br />
        * Harap konfirmasi ke admin Campus663 setelah melakukan pembayaran<br />
        * Jika ada pertanyaan silahkan ajukan pertanyakan ke admin Campus663
    </div>
    <div class="invoice-footer">
        <p class="text-center m-b-5 f-w-600">
            TERIMA KASIH
        </p>
        <p class="text-center">            
            <span class="text-center">Campus663 Livin</span>
        </p>
    </div>
</div>
@endsection

@section('scripts')
@parent
@endsection