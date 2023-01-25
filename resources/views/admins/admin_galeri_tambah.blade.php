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
                        <form method="POST" action="{{ url('/admin-simpan-galeri')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Foto</label>
                                    <div class="custom-file" data-text="Select your file!">
                                        <input class="form-control" placeholder="Upload Foto" name="foto_galeri" type="file" accept="image/*" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
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