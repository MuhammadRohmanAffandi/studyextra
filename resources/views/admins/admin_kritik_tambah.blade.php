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
                        <form action="{{ url('admin-simpan-kritik-saran')}}" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nama</label>
                                    <input name="nama_siswa" type="text" class="form-control" placeholder="Masukkan Nama" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input name="email_siswa" type="email" class="form-control" placeholder="Masukkan Email" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-md-12">
                                    <label>Kritik dan Saran</label>
                                    <textarea name="kritik" type="text" class="form-control" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></textarea>
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