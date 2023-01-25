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
                        <form method="POST" action="{{ url('admin-update-galeri', $edt->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label>Foto</label>
                                    <div class="">
                                        <img src="{{ asset('img/galeri/'. $edt -> foto_galeri) }}" height="100">
                                        {{ $edt -> foto_galeri }}
                                    </div>
                                    <div class="mt-3">
                                        <div class="custom-file" data-text="Select your file!">
                                            <input class="form-control" name="foto_galeri" placeholder="Upload Foto" type="file" value="{{ $edt -> foto_galeri }}" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
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