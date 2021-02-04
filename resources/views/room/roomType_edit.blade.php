<div class="modal fade" id="modal-edit-{{$roomtype->id}}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Tipe Kamar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="panel">
                    <div class="panel-body">
                        <form action="/room-type/{{$roomtype->id}}" method="POST" data-parsley-validate="true" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Nama Tipe</label>
                                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                                <input type="text" class="form-control" name="type_name" value="{{$roomtype->type_name}}" placeholder="Contoh: Tipe 1" required/>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Ukuran Tempat Tidur</label>
                                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                                <input type="text" class="form-control" name="size_bed" value="{{$roomtype->size_bed}}" placeholder="Contoh: 160x200 cm" required/>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Meja Belajar</label>
                                            <span>&nbsp&nbsp&nbsp&nbsp</span>
                                            <div class="checkbox checkbox-css checkbox-inline">
                                                <input type="radio" name="desk" id="rd_desk1_edit" value="Ada" required {{($roomtype->desk=="Ada") ? "checked" : ""}}/>
                                                <label for="rd_desk1_edit">Ada</label>
                                            </div>
                                            <div class="checkbox checkbox-css checkbox-inline"/>
                                                <input type="radio" name="desk" id="rd_desk2_edit" value="Tidak Ada" {{($roomtype->desk=="Tidak Ada") ? "checked" : ""}}/>
                                                <label for="rd_desk2_edit">Tidak Ada</label>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Almari</label>
                                            <span>&nbsp&nbsp&nbsp&nbsp</span>
                                            <div class="checkbox checkbox-css checkbox-inline">
                                                <input type="radio" name="wardrobe" id="rd_wardrobe1_edit" value="Ada" required {{($roomtype->wardrobe=="Ada") ? "checked" : ""}}/>
                                                <label for="rd_wardrobe1_edit">Ada</label>
                                            </div>
                                            <div class="checkbox checkbox-css checkbox-inline"/>
                                                <input type="radio" name="wardrobe" id="rd_wardrobe2_edit" value="Tidak Ada" {{($roomtype->wardrobe=="Tidak Ada") ? "checked" : ""}}/>
                                                <label for="rd_wardrobe2_edit">Tidak Ada</label>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">AC</label>
                                            <span>&nbsp&nbsp&nbsp&nbsp</span>
                                            <div class="checkbox checkbox-css checkbox-inline">
                                                <input type="radio" name="air_conditioner" id="rd_air_conditioner1_edit" value="Ada" required {{($roomtype->air_conditioner=="Ada") ? "checked" : ""}}/>
                                                <label for="rd_air_conditioner1_edit">Ada</label>
                                            </div>
                                            <div class="checkbox checkbox-css checkbox-inline"/>
                                                <input type="radio" name="air_conditioner" id="rd_air_conditioner2_edit" value="Tidak Ada" {{($roomtype->air_conditioner=="Tidak Ada") ? "checked" : ""}}/>
                                                <label for="rd_air_conditioner2_edit">Tidak Ada</label>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Telp Kamar</label>
                                            <span>&nbsp&nbsp&nbsp&nbsp</span>
                                            <div class="checkbox checkbox-css checkbox-inline">
                                                <input type="radio" name="line_telp" id="rd_line_telp1_edit" value="Ada" required {{($roomtype->line_telp=="Ada") ? "checked" : ""}}/>
                                                <label for="rd_line_telp1_edit">Ada</label>
                                            </div>
                                            <div class="checkbox checkbox-css checkbox-inline"/>
                                                <input type="radio" name="line_telp" id="rd_line_telp2_edit" value="Tidak Ada" {{($roomtype->line_telp=="Tidak Ada") ? "checked" : ""}}/>
                                                <label for="rd_line_telp2_edit">Tidak Ada</label>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Wi-Fi</label>
                                            <span>&nbsp&nbsp&nbsp&nbsp</span>
                                            <div class="checkbox checkbox-css checkbox-inline">
                                                <input type="radio" name="wifi" id="rd_wifi1_edit" value="Ada" required {{($roomtype->wifi=="Ada") ? "checked" : ""}}/>
                                                <label for="rd_wifi1_edit">Ada</label>
                                            </div>
                                            <div class="checkbox checkbox-css checkbox-inline"/>
                                                <input type="radio" name="wifi" id="rd_wifi2_edit" value="Tidak Ada" {{($roomtype->wifi=="Tidak Ada") ? "checked" : ""}}/>
                                                <label for="rd_wifi2_edit">Tidak Ada</label>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Kamar Mandi Dalam</label>
                                            <span>&nbsp&nbsp&nbsp&nbsp</span>
                                            <div class="checkbox checkbox-css checkbox-inline">
                                                <input type="radio" name="bathroom" id="rd_bathroom1_edit" value="Ada" required {{($roomtype->bathroom=="Ada") ? "checked" : ""}}/>
                                                <label for="rd_bathroom1_edit">Ada</label>
                                            </div>
                                            <div class="checkbox checkbox-css checkbox-inline"/>
                                                <input type="radio" name="bathroom" id="rd_bathroom2_edit" value="Tidak Ada" {{($roomtype->bathroom=="Tidak Ada") ? "checked" : ""}}/>
                                                <label for="rd_bathroom2_edit">Tidak Ada</label>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Water Heater</label>
                                            <span>&nbsp&nbsp&nbsp&nbsp</span>
                                            <div class="checkbox checkbox-css checkbox-inline">
                                                <input type="radio" name="water_heater" id="rd_heat1_edit" value="Ada" required {{($roomtype->water_heater=="Ada") ? "checked" : ""}}/>
                                                <label for="rd_heat1_edit">Ada</label>
                                            </div>
                                            <div class="checkbox checkbox-css checkbox-inline"/>
                                                <input type="radio" name="water_heater" id="rd_heat2_edit" value="Tidak Ada" {{($roomtype->water_heater=="Tidak Ada") ? "checked" : ""}}/>
                                                <label for="rd_heat2_edit">Tidak Ada</label>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Privat Balkon</label>
                                            <span>&nbsp&nbsp&nbsp&nbsp</span>
                                            <div class="checkbox checkbox-css checkbox-inline">
                                                <input type="radio" name="private_balkon" id="rd_balkon1_edit" value="Ada" required {{($roomtype->private_balkon=="Ada") ? "checked" : ""}}/>
                                                <label for="rd_balkon1_edit">Ada</label>
                                            </div>
                                            <div class="checkbox checkbox-css checkbox-inline"/>
                                                <input type="radio" name="private_balkon" id="rd_balkon2_edit" value="Tidak Ada" {{($roomtype->private_balkon=="Tidak Ada") ? "checked" : ""}}/>
                                                <label for="rd_balkon2_edit">Tidak Ada</label>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="modal-footer">
                                <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Tutup</a>
                                <button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin akan reset form?')">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary m-r-5">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>