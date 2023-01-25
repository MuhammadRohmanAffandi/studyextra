@extends('admins.template_admin_master')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Edit Data</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="{{ url('admin-update-siswa-unggulan', $edt->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nama Lengkap</label>
                                    <input name="nama_siswa" type="text" class="form-control" value="{{ $edt -> nama_siswa }}" placeholder="Masukkan Nama Lengkap" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-md-6">
                                    <label>No Hp</label>
                                    <input name="no_hp_siswa" type="text" class="form-control" value="{{ $edt -> no_hp_siswa }}" placeholder="Masukkan Nomor Hp" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input name="email_siswa" type="email" class="form-control" value="{{ $edt -> email_siswa }}" placeholder="Masukkan Email" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-md-6">
                                    <label>Jenis Kelamin</label>
                                    <div class="input-group mb-3">
                                        <select class="form-control col-xl-12 col-lg-8 col-md-8 col-sm-7" name="jenis_kelamin_siswa" value="{{ $edt -> jenis_kelamin_siswa }}" data-live-search="true" tabindex="-98" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                            <option value="{{ $edt -> jenis_kelamin_siswa }}">{{ $edt -> jenis_kelamin_siswa }}</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label>Tempat Tanggal Lahir</label>
                                    <input name="ttl_siswa" type="text" class="form-control" value="{{ $edt -> ttl_siswa }}" placeholder="Masukkan Tempat Tanggal Lahir" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-md-12">
                                    <label>Alamat Rumah Lengkap</label>
                                    <input name="alamat_lengkap_rumah_siswa" type="text" class="form-control" value="{{ $edt -> alamat_lengkap_rumah_siswa }}" placeholder="Masukkan Alamat Rumah Lengkap" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-md-12">
                                    <label>Nama Sekolah</label>
                                    <input name="nama_sekolah_siswa" type="text" class="form-control" value="{{ $edt -> nama_sekolah_siswa }}" placeholder="Masukkan Nama Sekolah" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-md-6">
                                    <label>Jenjang</label>
                                    <div class="input-group mb-3">
                                        <select class="form-control col-xl-12 col-lg-8 col-md-8 col-sm-7" name="jenjang" value="{{ $edt -> jenjang }}" data-live-search="true" tabindex="-98" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                            <option value="{{ $edt -> jenjang }}">{{ $edt -> jenjang }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Paket</label>
                                    <div class="input-group mb-3">
                                        <select class="form-control col-xl-12 col-lg-8 col-md-8 col-sm-7" name="paket" value="{{ $edt -> paket }}" data-live-search="true" tabindex="-98" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                            <option value="{{ $edt -> paket }}">{{ $edt -> paket }}</option>
                                            <option value="REGULAR">REGULAR</option>
                                            <option value="PRIVATE">PRIVATE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label>Upload Foto</label>
                                    <div class="">
                                        <img src="{{ asset('img/siswa/unggulan/'. $edt -> foto_siswa) }}" height="100">
                                        {{ $edt -> foto_siswa }}
                                    </div>
                                    <div class="mt-3">
                                        <div class="custom-file" data-text="Select your file!">
                                            <input class="form-control" name="foto_siswa" placeholder="Upload Foto" type="file" value="{{ $edt -> foto_siswa }}" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <fieldset>
                                        <button type="submit" class="btn btn-primary">Edit Data</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection