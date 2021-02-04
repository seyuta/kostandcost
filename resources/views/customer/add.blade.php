@extends('layouts.app')

@section('sidebar')
@parent
@endsection

@section('content')
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/customer">Data Pelanggan</a></li>
    <li class="breadcrumb-item active">Tambah Data Pelanggan</li>
</ol>
<h1 class="page-header">Data Pelanggan</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-inverse" data-sortable-id="form-stuff-10">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
                <h4 class="panel-title">Tambah Data Pelanggan</h4>
            </div>
            <div class="panel-body">
                <form action="{{ route('customer.store')}}" method="POST" data-parsley-validate="true" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <div>
                            <h4><i class="fa fa-id-card fa-fw"></i> Identitas Pelanggan</h4>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Nama Lengkap</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="fullname" placeholder="Contoh: Bambang Ferguso" required/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Nama Panggilan</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="nickname" placeholder="Contoh: Ferguso" />
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Jenis Identitas - No Identitas</label>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <select name="jenis_identitas" class="form-control selectpicker">
                                            <option value="">- Pilih Jenis -</option>
                                            <option value="KTP">KTP</option>
                                            <option value="SIM">SIM</option>
                                            <option value="PASSPORT">Passport</option>
                                            <option value="NIM">Nomor Induk Mahasiswa</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="no_identitas" placeholder="Contoh: 367589483009280" required/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-form-label">Tempat - Tanggal Lahir</label>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inline">
                                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Contoh: Banyumas" />
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <input type="text" class="form-control" id="datepicker-autoClose1" name="tanggal_lahir" placeholder="- Pilih Tanggal -" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">No Hp 1 - No Hp 2</label>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="no_hp1" placeholder="Contoh: 08123456789" required data-parsley-type="number"/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="no_hp2" placeholder="Contoh: 08123456789" data-parsley-type="number"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Jenis Kelamin</label>
                                    <span>&nbsp&nbsp&nbsp&nbsp</span>
                                    <div class="checkbox checkbox-css checkbox-inline">
                                        <input type="radio" name="gender" id="gender1" value="Pria"/>
                                        <label for="gender1">Pria</label>
                                    </div>
                                    <div class="checkbox checkbox-css checkbox-inline"/>
                                        <input type="radio" name="gender" id="gender2" value="Wanita"/>
                                        <label for="gender2">Wanita</label>
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Foto</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <span class="btn btn-primary fileinput-button m-r-3">
                                            <i class="fa fa-plus"></i>
                                            <span>Upload Foto</span>
                                            <input type="file" name="profile_photo" id="profile_photo" required>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label"></label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <img id="preview_holder" src="/images/no-images.png" width="250px" height="250px"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">E-Mail</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <input type="email" class="form-control" name="email" placeholder="Contoh: email@mail.com" data-parsley-type="email"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Pekerjaan</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="job" placeholder="Contoh: Mahasiswa" />
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Alamat Asal</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <textarea class="form-control" rows="3" name="alamat_asal" placeholder="Contoh: Jl. Campus No. 663, Kelurahan Karang Wangkal, Kecamatan Purwokerto Utara, Kabupaten Banyumas"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Nama Instansi</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="nama_instansi" placeholder="Contoh: Universitas Jenderal Soedirman"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Alamat Instansi</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <textarea class="form-control" rows="3" name="alamat_instansi" placeholder="Contoh: Jl. Campus No. 663, Kelurahan Karang Wangkal, Kecamatan Purwokerto Utara, Kabupaten Banyumas"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">No Telp Instansi</label>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="no_telp_instansi" placeholder="Contoh: 08123456789" data-parsley-type="number"/>
                                    </div>
                                </div>
                            </div>
                        </div><hr />
                        <div>
                            <h4><i class="fa fa-id-card fa-fw"></i> Kontak Darurat</h4>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Nama Lengkap</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="fullname_ec" placeholder="Contoh: Maemunah" />
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Hubungan</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="relation" placeholder="Contoh: Ibu Kandung" />
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Jenis Identitas - No Identitas</label>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <select name="jenis_identitas_ec" class="form-control selectpicker">
                                            <option value="">- Pilih Jenis -</option>
                                            <option value="KTP">KTP</option>
                                            <option value="SIM">SIM</option>
                                            <option value="PASSPORT">Passport</option>
                                            <option value="NIM">Nomor Induk Mahasiswa</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="no_identitas_ec" placeholder="Contoh: 367589483009280" />
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-form-label">Tempat - Tanggal Lahir</label>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inline">
                                        <input type="text" class="form-control" name="tmp_lahir_ec" placeholder="Contoh: Banyumas" />
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <input type="text" class="form-control" id="datepicker-autoClose2" name="tgl_lahir_ec" placeholder="- Pilih Tanggal -" />
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">No Hp 1 - No Hp 2</label>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="no_hp1_ec" placeholder="Contoh: 0281654321" data-parsley-type="number"/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="no_hp2_ec" placeholder="Contoh: 08123456789" data-parsley-type="number"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Jenis Kelamin</label>
                                    <span>&nbsp&nbsp&nbsp&nbsp</span>
                                    <div class="checkbox checkbox-css checkbox-inline">
                                        <input type="radio" name="gender_ec" id="gender_ec1" value="Pria"/>
                                        <label for="gender_ec1">Pria</label>
                                    </div>
                                    <div class="checkbox checkbox-css checkbox-inline"/>
                                        <input type="radio" name="gender_ec" id="gender_ec2" value="Wanita"/>
                                        <label for="gender_ec2">Wanita</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">E-Mail</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <input type="email" class="form-control" name="email_ec" placeholder="Contoh: email@mail.com" data-parsley-type="email"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Pekerjaan</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control" name="job_ec" placeholder="Contoh: Dokter" />
                                    </div>
                                </div>
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-form-label">Alamat</label>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                        <textarea class="form-control" rows="3" name="alamat_ec" placeholder="Contoh: Jl. Campus No. 663, Kelurahan Karang Wangkal, Kecamatan Purwokerto Utara, Kabupaten Banyumas"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div><hr />
                        <div class="form-group row">
                            <div class="offset-lg-10 offset-md-10 offset-sm-2 offset-xs-2">
                                <a href="/customer" class="btn btn-sm btn-default m-r-5">Kembali</a>
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
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#preview_holder').attr('src', e.target.result);
            }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#profile_photo").change(function() {
            readURL(this);
        });
</script>
@endsection