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
                        <form action="{{ url('admin-update-ebook', $edt->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nama E-Book</label>
                                    <input name="nama_ebook" type="text" class="form-control" value="{{ $edt -> nama_ebook }}" placeholder="Masukkan Nama E-Book" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label>E-Book</label>
                                    <div class="">
                                        <a href="{{ asset('dokumen/ebook/'. $edt ->file_ebook) }}" class="">{{ $edt->file_ebook}}</a>
                                    </div>
                                    <div class="mt-3">
                                        <div class="custom-file" data-text="Select your file!">
                                            <input class="form-control" name="file_ebook" placeholder="Upload E-Book" type="file" value="{{ $edt -> file_ebook }}" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
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