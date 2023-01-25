@extends('admins.template_admin_master')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Tambah Data</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form method="POST" action="{{ url('admin-simpan-siswa-smp')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nama Lengkap</label>
                                    <input name="nama_siswa" type="text" class="form-control" placeholder="Masukkan Nama Lengkap" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-md-6">
                                    <label>No Hp</label>
                                    <input name="no_hp_siswa" type="text" class="form-control" placeholder="Masukkan Nomor Hp" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input name="email_siswa" type="email" class="form-control" placeholder="Masukkan Email" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-md-6">
                                    <label>Jenis Kelamin</label>
                                    <div class="input-group mb-3">
                                        <select class="form-control col-xl-12 col-lg-8 col-md-8 col-sm-7" name="jenis_kelamin_siswa" data-live-search="true" tabindex="-98" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                            <option selected="">--Pilih Jenis Kelamin--</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label>Tempat Tanggal Lahir</label>
                                    <input name="ttl_siswa" type="text" class="form-control" placeholder="Masukkan Tempat Tanggal Lahir" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-md-12">
                                    <label>Alamat Rumah Lengkap</label>
                                    <input name="alamat_lengkap_rumah_siswa" type="text" class="form-control" placeholder="Masukkan Alamat Rumah Lengkap" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-md-12">
                                    <label>Nama Sekolah</label>
                                    <input name="nama_sekolah_siswa" type="text" class="form-control" placeholder="Masukkan Nama Sekolah" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-md-6">
                                    <label>Jenjang</label>
                                    <div class="input-group mb-3">
                                        <select class="form-control col-xl-12 col-lg-8 col-md-8 col-sm-7" name="jenjang" data-live-search="true" tabindex="-98" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                            <option selected="SMP Sederajat">SMP Sederajat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Paket</label>
                                    <div class="input-group mb-3">
                                        <select class="form-control col-xl-12 col-lg-8 col-md-8 col-sm-7" name="paket" data-live-search="true" tabindex="-98" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                            <option selected="">--Pilih Paket--</option>
                                            <option value="REGULAR">REGULAR</option>
                                            <option value="PRIVATE">PRIVATE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Foto</label>
                                    <div class="custom-file" data-text="Select your file!">
                                        <input class="form-control" name="foto_siswa" placeholder="Upload Foto" type="file" accept="image/*" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <fieldset>
                                        <button type="submit" class="btn btn-primary">Tambah Data</button>
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