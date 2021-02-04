<div class="modal fade" id="modal-pay_dp-{{$occupant->payment_id}}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Pembayaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="panel">
                    <div class="panel-body">
                        <div>
                            <h4><i class="fa fa-id-card fa-fw"></i> Detail Penghuni</h4>
                        </div><br>
                        <div class="row m-b-0">
                            <div class="col-md-4 col-xs-12">
                                <dl>
                                    <dt class="text-inverse">No Kamar</dt>
                                    <dd>{{$occupant->rooms->no_room}}</dd>
                                    <dt class="text-inverse m-t-10">Nama Pelanggan</dt>
                                    <dd>{{$occupant->customers->fullname}}</dd>
                                    <dt class="text-inverse m-t-10">Lama Sewa</dt>
                                    <dd>{{$occupant->length}}</dd>
                                </dl>
                            </div>
                            <div class="col-md-8 col-xs-12">
                                <dl>
                                    <dt class="text-inverse">Alamat</dt>
                                    <dd>{{$occupant->customers->alamat_asal}}</dd>
                                    <dt class="text-inverse m-t-10">No Identitas</dt>
                                    <dd>{{$occupant->customers->no_identitas}}</dd>
                                    <dt class="text-inverse m-t-10">No HP</dt>
                                    <dd>{{$occupant->customers->no_hp1}}</dd>
                                </dl>
                            </div>
                        </div><hr>
                        <div>
                            <h4><i class="fa fa-money-bill fa-fw"></i> Pembayaran</h4>
                        </div><br>
                        <form action="/payments/{{$occupant->payment_id}}/update-dp" method="POST" data-parsley-validate="true" enctype="multipart/form-data">
                            @method('GET')
                            @csrf
                            <div class="row m-b-0">
                                <div class="col-md-4 col-xs-12">
                                    <dl>
                                      <dt class="text-inverse">Down Payment (DP)</dt>
                                      <dd>Rp. {{number_format($occupant->payments->dp_booking,0,",",".")}},-</dd>
                                      <br>
                                      <dt class="text-inverse m-t-10"><a class="btn btn-info btn-sm" href="/payments/{{$occupant->id}}"><i class="fa fa-search"></i> Lihat Detail Biaya</a></dt>
                                    </dl>
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <div class="form-group row m-b-15">
                                        <label class="col-form-label col-md-4">Metode Pembayaran</label>
                                        <div class="col-md-8">
                                            <select class="form-control" name="pay_method_dp">
                                                <option value="">- Pilih Metode -</option>
                                                <option value="Tunai">Tunai</option>
                                                <option value="Transfer">Transfer</option>
                                            </select>
                                            <small class="f-s-12 text-grey-darker">Pilih Metode Pembayaran Tunai atau Debit</small>
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-form-label col-md-4">Nama Bank</label>
                                        <div class="col-md-8">
                                            <select class="form-control" name="bank_name_dp">
                                                <option value="">- Pilih Nama Bank -</option>
                                                <option value="BNI">BNI</option>
                                                <option value="BRI">BRI</option>
                                                <option value="BCA">BCA</option>
                                                <option value="MANDIRI">MANDIRI</option>
                                                <option value="CIMB NIAGA">CIMB NIAGA</option>
                                            </select>
                                            <small class="f-s-12 text-grey-darker">Pilih Nama Bank yang digunakan</small>
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-form-label col-md-4">Kode Transaksi</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="transaction_code_dp">
                                            <small class="f-s-12 text-grey-darker">Jika Pembayaran Transfer isikan kode transaksi.</small><br>
                                            <small class="f-s-12 text-grey-darker">Jika Pembayaran Tunai biarkan kosong.</small>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <div class="modal-footer">
                                <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Tutup</a>
                                <button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin akan reset form?')">Reset</button>
                                <button type="submit" class="btn btn-sm btn-success m-r-5" onclick="return confirm('Yakin lakukan pembayaran?')">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>