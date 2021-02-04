<div class="modal fade" id="modal-edit_{{$facility->id}}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Fasilitas Tambahan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="panel">
                    <div class="panel-body">
                        <form action="/additional-facilities/{{$facility->id}}" method="POST" data-parsley-validate="true" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Nama Fasilitas</label>
                                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                                <input type="text" class="form-control" name="facilities_name" value="{{$facility->facilities_name}}" placeholder="Contoh: Loundry" required/>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Biaya (Rp)</label>
                                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                                <input type="text" class="form-control" name="cost" value="{{$facility->cost}}" placeholder="Contoh: 300000" data-parsley-type="number"/>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Keterangan</label>
                                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                                <textarea class="form-control" rows="3" name="ket" placeholder="Contoh: Loundry dengan sistem antar jemput">{{$facility->ket}}</textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="note note-warning">
                                            <div class="note-icon"><i class="fa fa-lightbulb"></i></div>
                                            <div class="note-content">
                                                <h4 class="m-t-5 m-b-5 p-b-2">Notes:</h4>
                                                <ul class="m-b-5 p-l-25">
                                                    <li>Mengisi kolom biaya hanya <strong>angka saja</strong> tanpa menggunakan titik</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Tutup</a>
                                    <button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin akan reset form?')">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary m-r-5">Simpan</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>