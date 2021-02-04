<div class="modal fade" id="modal-add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Tipe Kamar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="panel">
                    <div class="panel-body">
                        <form action="{{ route('room-type.store')}}" method="POST" data-parsley-validate="true" enctype="multipart/form-data">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Nama Tipe</label>
                                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                                <input type="text" class="form-control" name="type_name" placeholder="Contoh: Tipe 1" required/>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Ukuran Tempat Tidur</label>
                                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                                <input type="text" class="form-control" name="size_bed" placeholder="Contoh: 160x200 cm" required/>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Meja Belajar</label>
                                            <span>&nbsp&nbsp&nbsp&nbsp</span>
                                            <div class="checkbox checkbox-css checkbox-inline">
                                                <input type="radio" name="desk" id="rd_desk1" value="Ada" required/>
                                                <label for="rd_desk1">Ada</label>
                                            </div>
                                            <div class="checkbox checkbox-css checkbox-inline"/>
                                                <input type="radio" name="desk" id="rd_desk2" value="Tidak Ada"/>
                                                <label for="rd_desk2">Tidak Ada</label>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Almari</label>
                                            <span>&nbsp&nbsp&nbsp&nbsp</span>
                                            <div class="checkbox checkbox-css checkbox-inline">
                                                <input type="radio" name="wardrobe" id="rd_wardrobe1" value="Ada" required/>
                                                <label for="rd_wardrobe1">Ada</label>
                                            </div>
                                            <div class="checkbox checkbox-css checkbox-inline"/>
                                                <input type="radio" name="wardrobe" id="rd_wardrobe2" value="Tidak Ada"/>
                                                <label for="rd_wardrobe2">Tidak Ada</label>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">AC</label>
                                            <span>&nbsp&nbsp&nbsp&nbsp</span>
                                            <div class="checkbox checkbox-css checkbox-inline">
                                                <input type="radio" name="air_conditioner" id="rd_air_conditioner1" value="Ada" required/>
                                                <label for="rd_air_conditioner1">Ada</label>
                                            </div>
                                            <div class="checkbox checkbox-css checkbox-inline"/>
                                                <input type="radio" name="air_conditioner" id="rd_air_conditioner2" value="Tidak Ada"/>
                                                <label for="rd_air_conditioner2">Tidak Ada</label>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Telp Kamar</label>
                                            <span>&nbsp&nbsp&nbsp&nbsp</span>
                                            <div class="checkbox checkbox-css checkbox-inline">
                                                <input type="radio" name="line_telp" id="rd_line_telp1" value="Ada" required/>
                                                <label for="rd_line_telp1">Ada</label>
                                            </div>
                                            <div class="checkbox checkbox-css checkbox-inline"/>
                                                <input type="radio" name="line_telp" id="rd_line_telp2" value="Tidak Ada"/>
                                                <label for="rd_line_telp2">Tidak Ada</label>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Wi-Fi</label>
                                            <span>&nbsp&nbsp&nbsp&nbsp</span>
                                            <div class="checkbox checkbox-css checkbox-inline">
                                                <input type="radio" name="wifi" id="rd_wifi1" value="Ada" required/>
                                                <label for="rd_wifi1">Ada</label>
                                            </div>
                                            <div class="checkbox checkbox-css checkbox-inline"/>
                                                <input type="radio" name="wifi" id="rd_wifi2" value="Tidak Ada"/>
                                                <label for="rd_wifi2">Tidak Ada</label>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Kamar Mandi Dalam</label>
                                            <span>&nbsp&nbsp&nbsp&nbsp</span>
                                            <div class="checkbox checkbox-css checkbox-inline">
                                                <input type="radio" name="bathroom" id="rd_bathroom1" value="Ada" required/>
                                                <label for="rd_bathroom1">Ada</label>
                                            </div>
                                            <div class="checkbox checkbox-css checkbox-inline"/>
                                                <input type="radio" name="bathroom" id="rd_bathroom2" value="Tidak Ada"/>
                                                <label for="rd_bathroom2">Tidak Ada</label>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Water Heater</label>
                                            <span>&nbsp&nbsp&nbsp&nbsp</span>
                                            <div class="checkbox checkbox-css checkbox-inline">
                                                <input type="radio" name="water_heater" id="rd_heat1" value="Ada" required/>
                                                <label for="rd_heat1">Ada</label>
                                            </div>
                                            <div class="checkbox checkbox-css checkbox-inline"/>
                                                <input type="radio" name="water_heater" id="rd_heat2" value="Tidak Ada"/>
                                                <label for="rd_heat2">Tidak Ada</label>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Privat Balkon</label>
                                            <span>&nbsp&nbsp&nbsp&nbsp</span>
                                            <div class="checkbox checkbox-css checkbox-inline">
                                                <input type="radio" name="private_balkon" id="rd_balkon1" value="Ada" required/>
                                                <label for="rd_balkon1">Ada</label>
                                            </div>
                                            <div class="checkbox checkbox-css checkbox-inline"/>
                                                <input type="radio" name="private_balkon" id="rd_balkon2" value="Tidak Ada"/>
                                                <label for="rd_balkon2">Tidak Ada</label>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="modal-footer">
                                <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Tutup</a>
                                <button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin akan reset form?')">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary m-r-5">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>